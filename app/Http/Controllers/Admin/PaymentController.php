<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePaymentRequest;
use App\Models\Commission;
use App\Models\Payment;
use App\Models\TUser;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
     protected $model;

    public function __construct(Payment $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        return view('admin.payments.index');
    }


    public function form()
    {
        $id = intval(request('id'));
        $payment = null;

        if ($id) {
            $payment = $this->model->findOrFail($id);
        }

        return view('admin.payments.form', compact('payment'));
    }

    public function process(StorePaymentRequest $request)
    {
        $id = $request->get('id');

        if ($id) {
            $payment = $this->model->find($id);
            $payment->update($request->all());
            $action = 'update';
        } else {
            $payment = $this->model->create($request->all());
        }


        return redirect()->route('admin.payments.index')->with('success', trans('alerts.successfully_updated'));
    }


    public function destroy(Payment $payment)
    {
        // $user = TUser::where('pk_i_id' , $payment->user_id)->first();
        // Commission::where('referrer_id', $user->referred_by)->delete();
        $payment->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(Request $request)
    {
        $payments = $this->model->select('payments.*')->with(['user','plan']);
        return datatables()->of($payments)->addColumn('actions_column', function ($row) {
            return view('admin.payments.datatable.actions', compact('row'));
        })->rawColumns(['actions_column'])->make(true);
    }
}
