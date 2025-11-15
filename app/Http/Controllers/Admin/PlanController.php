<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePlanRequest;
use App\Models\TPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    protected $model;

    public function __construct(TPlan $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('admin.plans.index');
    }


    public function create()
    {

        $id = request('id');
        $plan = null;
        if ($id) {
            $plan = $this->model->findOrFail($id);
        }
        return view('admin.plans.form', compact('plan'));
    }

    public function store(StorePlanRequest $request)
    {

        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/plans');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $plan = $this->model->find($id);
                $plan->update($input);
            } else {
                $plan = $this->model->create($input);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.plans.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.plans.index')->with('success', trans('alerts.successfully_added'));
        }

    }

    public function updateStatus(Request $request)
    {
        $plan = $this->model->findOrFail($request->id);
        $plan->b_enabled = (int)$request->enabled;
        $plan->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(TPlan $plan)
    {
        $plan->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $plans = $this->model->select('t_plans.*')->filter($filters)->distinct();
        return datatables($plans)->addColumn('actions_column', function ($row) {
            return view('admin.plans.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
