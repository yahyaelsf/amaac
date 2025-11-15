<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDocsSectionRequest;
use App\Models\DocsPage;
use App\Models\DocsSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocsSectionController extends Controller
{
    protected $model;

    public function __construct(DocsSection $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.docs_section');
        $pageDescription = trans('navigation.docs_section');

        return view('admin.docs_sections.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $docs_section = null;
        if ($id) {
            $docs_section = $this->model->findOrFail($id);
        }
        $pages = DocsPage::enabled()->get();
        return view('admin.docs_sections.form', compact('docs_section','pages'));

    }
    public function store(StoreDocsSectionRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/docs_sections');
        }
            if ($id = request('pk_i_id')) {
                $docs_section = $this->model->find($id);
                $docs_section->update($input);
            } else {
                $docs_section = $this->model->create($input);
            }

        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.docs-sections.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.docs-sections.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(DocsSection $docs_section)
    {
        $pageTitle = $docs_section->s_title;
        $pageDescription = $docs_section->s_title;

        return view('admin.docs_sections.show', compact('docs_section', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $docs_section = $this->model->findOrFail($request->id);
        $docs_section->b_enabled = (int)$request->enabled;
        $docs_section->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(DocsSection $docs_section)
    {
        $docs_section->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $docs_section = $this->model->select('t_docs_sections.*')->with('page')->filter($filters)->distinct();
        return datatables($docs_section)->addColumn('actions_column', function ($row) {
            return view('admin.docs_sections.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
