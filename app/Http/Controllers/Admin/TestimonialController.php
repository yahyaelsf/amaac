<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTestimonialRequest;
use App\Models\TTestimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    protected $model;

    public function __construct(TTestimonial $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('admin.testimonials.index');
    }


    public function create()
    {

        $id = request('id');
        $testimonial = null;
        if ($id) {
            $testimonial = $this->model->findOrFail($id);
        }
        return view('admin.testimonials.form', compact('testimonial'));
    }

    public function store(StoreTestimonialRequest $request)
    {

        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/testimonials');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $testimonial = $this->model->find($id);
                $testimonial->update($input);
            } else {
                $testimonial = $this->model->create($input);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.testimonials.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.testimonials.index')->with('success', trans('alerts.successfully_added'));
        }

    }

    public function updateStatus(Request $request)
    {
        $testimonial = $this->model->findOrFail($request->id);
        $testimonial->b_enabled = (int)$request->enabled;
        $testimonial->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(TTestimonial $testimonial)
    {
        $testimonial->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $testimonials = $this->model->select('t_testimonials.*')->filter($filters)->distinct();
        return datatables($testimonials)->addColumn('actions_column', function ($row) {
            return view('admin.testimonials.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
