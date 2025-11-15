<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
        protected $model;

    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('admin.sliders.index');
    }
    public function create()
    {
        $id = request('id');
        $slider = null;
        if ($id) {
            $slider = $this->model->findOrFail($id);
        }

        return view('admin.sliders.form', compact('slider'));

    }
    public function store(SliderRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/sliders');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $slider = $this->model->find($id);
                $slider->update($input);
            } else {
                $slider = $this->model->create($input);
            }


            $slider->categories()->sync($request->categories);

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.sliders.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.sliders.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(Slider $slider)
    {
        $pageTitle = $slider->s_title;
        $pageDescription = $slider->s_title;

        return view('admin.sliders.show', compact('slider', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $slider = $this->model->findOrFail($request->id);
        $slider->b_enabled = (int)$request->enabled;
        $slider->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(Slider $slider)
    {
        $slider->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $slider = $this->model->select('sliders.*')->filter($filters)->distinct();
        return datatables($slider)->addColumn('actions_column', function ($row) {
            return view('admin.sliders.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
