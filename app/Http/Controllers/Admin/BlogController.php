<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    protected $model;

    public function __construct(Blog $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.blog');
        $pageDescription = trans('navigation.blog');

        return view('admin.blogs.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $blog = null;
        if ($id) {
            $blog = $this->model->findOrFail($id);
        }
        $categories = Category::enabled()->get();
        return view('admin.blogs.form', compact('blog','categories'));

    }
    public function store(StoreBlogRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/blogs');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $blog = $this->model->find($id);
                $blog->update($input);
            } else {
                $blog = $this->model->create($input);
            }
            if ($images = $request->file('images')) {
                foreach ($images as $file) {
                    $type = strtoupper(explode('/', $file->getMimeType())[0]);
                    $blog->resources()->create([
                        's_filename' => $file->store('uploads/blogs'),
                        'e_type' => $type,
                        'e_status' => 'not_destroyer',
                    ]);
                }
            }
             $blog->categories()->sync($request->categories);

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.blogs.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.blogs.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(Blog $blog)
    {
        $pageTitle = $blog->s_title;
        $pageDescription = $blog->s_title;

        return view('admin.blogs.show', compact('blog', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $blog = $this->model->findOrFail($request->id);
        $blog->b_enabled = (int)$request->enabled;
        $blog->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(Blog $blog)
    {
        $blog->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $blog = $this->model->select('t_blogs.*')->filter($filters)->distinct();
        return datatables($blog)->addColumn('actions_column', function ($row) {
            return view('admin.blogs.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);

    }
}
