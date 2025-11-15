<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStrategyRequest;
use App\Models\TStrategy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrategyController extends Controller
{
    protected $model;

    public function __construct(TStrategy $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.strategy');
        $pageDescription = trans('navigation.strategy');

        return view('admin.strategies.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $strategy = null;
        if ($id) {
            $strategy = $this->model->findOrFail($id);
        }
        return view('admin.strategies.form', compact('strategy'));

    }
    public function store(StoreStrategyRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/strategies');
        }
        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $strategy = $this->model->find($id);
                $strategy->update($input);
            } else {
                $strategy = $this->model->create($input);
            }
            if ($images = $request->file('images')) {
                foreach ($images as $file) {
                    $type = strtoupper(explode('/', $file->getMimeType())[0]);
                    $strategy->resources()->create([
                        's_filename' => $file->store('uploads/strategies'),
                        'e_type' => $type,
                        'e_status' => 'not_destroyer',
                    ]);
                }
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.strategies.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.strategies.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(TStrategy $strategy)
    {
        $pageTitle = $strategy->s_title;
        $pageDescription = $strategy->s_title;

        return view('admin.strategies.show', compact('strategy', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $strategy = $this->model->findOrFail($request->id);
        $strategy->b_enabled = (int)$request->enabled;
        $strategy->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(TStrategy $strategy)
    {
        $strategy->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $strategy = $this->model->select('t_strategies.*')->filter($filters)->distinct();
        return datatables($strategy)->addColumn('actions_column', function ($row) {
            return view('admin.strategies.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
