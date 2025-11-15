<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.category');
        $pageDescription = trans('navigation.category');

        return view('admin.categories.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $category = null;
        if ($id) {
            $category = $this->model->findOrFail($id);
        }
        return view('admin.categories.form', compact('category'));

    }
    public function store(StoreCategoryRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/categories');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $category = $this->model->find($id);
                $category->update($input);
            } else {
                $category = $this->model->create($input);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.categories.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.categories.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(Category $category)
    {
        $pageTitle = $category->s_title;
        $pageDescription = $category->s_title;

        return view('admin.categories.show', compact('category', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $category = $this->model->findOrFail($request->id);
        $category->b_enabled = (int)$request->enabled;
        $category->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(Category $category)
    {
        $category->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $category = $this->model->select('t_categories.*')->filter($filters)->distinct();
        return datatables($category)->addColumn('actions_column', function ($row) {
            return view('admin.categories.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
