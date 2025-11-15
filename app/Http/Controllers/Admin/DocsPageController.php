<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDocsPageRequest;
use App\Models\DocsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocsPageController extends Controller
{
    protected $model;

    public function __construct(DocsPage $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.docs_page');
        $pageDescription = trans('navigation.docs_page');

        return view('admin.docs_pages.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $docs_page = null;
        if ($id) {
            $docs_page = $this->model->findOrFail($id);
        }
        $pages = DocsPage::whereNull('fk_i_parent_id')->where('e_type','toolkits')->get();
        // dd($pages);
        return view('admin.docs_pages.form', compact('docs_page','pages'));

    }
    public function store(StoreDocsPageRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/docs_pages');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $docs_page = $this->model->find($id);
                if($docs_page->e_type == 'toolkits' && $request->e_type != 'toolkits'){
                    $input['fk_i_parent_id'] = null ;
                }
                $docs_page->update($input);
            } else {
                $docs_page = $this->model->create($input);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.docs-pages.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.docs-pages.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(DocsPage $docs_page)
    {
        $pageTitle = $docs_page->s_title;
        $pageDescription = $docs_page->s_title;

        return view('admin.docs_pages.show', compact('docs_page', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $docs_page = $this->model->findOrFail($request->id);
        $docs_page->b_enabled = (int)$request->enabled;
        $docs_page->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(DocsPage $docs_page)
    {
        $docs_page->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $docs_page = $this->model->select('t_docs_pages.*')->filter($filters)->distinct();
        return datatables($docs_page)->addColumn('actions_column', function ($row) {
            return view('admin.docs_pages.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
