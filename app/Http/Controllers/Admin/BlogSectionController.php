<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogSectionRequest;
use App\Models\Blog;
use App\Models\BlogSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogSectionController extends Controller
{
    protected $model;

    public function __construct(BlogSection $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.blog_section');
        $pageDescription = trans('navigation.blog_section');

        return view('admin.blog_sections.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $blog_section = null;
        if ($id) {
            $blog_section = $this->model->findOrFail($id);
        }
        $blogs = Blog::enabled()->get();
        return view('admin.blog_sections.form', compact('blog_section','blogs'));

    }
    public function store(StoreBlogSectionRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/blog_sections');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $blog_section = $this->model->find($id);
                $blog_section->update($input);
            } else {
                $blog_section = $this->model->create($input);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.blog-sections.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.blog-sections.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(BlogSection $blog_section)
    {
        $pageTitle = $blog_section->s_title;
        $pageDescription = $blog_section->s_title;

        return view('admin.blog_sections.show', compact('blog_section', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $blog_section = $this->model->findOrFail($request->id);
        $blog_section->b_enabled = (int)$request->enabled;
        $blog_section->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(BlogSection $blog_section)
    {
        $blog_section->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $blog_section = $this->model->select('t_blog_sections.*')->with('blog')->filter($filters)->distinct();
        return datatables($blog_section)->addColumn('actions_column', function ($row) {
            return view('admin.blog_sections.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
