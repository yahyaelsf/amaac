<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEarningRequest;
use App\Models\Commission;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EarningController extends Controller
{
         protected $model;

    public function __construct(Commission $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        return view('admin.earnings.index');
    }


    public function form()
    {
        $id = intval(request('id'));
        $earning = null;

        if ($id) {
            $earning = $this->model->findOrFail($id);
        }

        return view('admin.earnings.form', compact('earning'));
    }

    public function process(StoreEarningRequest $request)
    {
        $id = $request->get('id');

        if ($id) {
            $earning = $this->model->find($id);

            $action = 'update';
            if ($request->has('is_withdrawn') && $request->get('is_withdrawn')) {
                // جلب payout_address للمستخدم المرتبط
                $userPayoutAddress = $earning->referrer->payout_address ?? null;
                $request->merge(['payout_address' => $userPayoutAddress]);
            }
             $earning->update($request->all());
        } else {
            $earning = $this->model->create($request->all());
        }


        return redirect()->route('admin.earnings.index')->with('success', trans('alerts.successfully_updated'));
    }


    public function destroy(Commission $earning)
    {
        $earning->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(Request $request)
    {
        $earnings = $this->model->select('commissions.*')->where('created_at', '<=', Carbon::now()->subMonths())->with(['referrer','payment']);
        return datatables()->of($earnings)
        ->addColumn('is_withdrawn_label', function ($row) {
            return $row->is_withdrawn
                ? '<span class="badge bg-success">paid</span>'
                : '<span class="badge bg-danger">un paid</span>';
        })
        ->addColumn('payout_address_display', function ($row) {
            // إذا كانت قيمة payout_address موجودة في الـ commission نستخدمها
            // وإلا نستخدم payout_address من المستخدم
            return $row->payout_address ?: ($row->referrer->payout_address ?? '-');
        })
        ->addColumn('actions_column', function ($row) {
            return view('admin.earnings.datatable.actions', compact('row'));
        })
        ->rawColumns(['actions_column','is_withdrawn_label','payout_address_display'])
        ->make(true);
    }
}
