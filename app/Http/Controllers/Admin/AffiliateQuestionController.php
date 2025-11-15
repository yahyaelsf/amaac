<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateQuestionRequest;
use App\Models\TAffiliateQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffiliateQuestionController extends Controller
{
    protected $model;

    public function __construct(TAffiliateQuestion $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.affiliate_question');
        $pageDescription = trans('navigation.affiliate_question');

        return view('admin.affiliate_questions.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $affiliate_question = null;
        if ($id) {
            $affiliate_question = $this->model->findOrFail($id);
        }
        return view('admin.affiliate_questions.form', compact('affiliate_question'));

    }
    public function store(AffiliateQuestionRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/affiliate_questions');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $affiliate_question = $this->model->find($id);
                $affiliate_question->update($input);
            } else {
                $affiliate_question = $this->model->create($input);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.affiliate_question.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.affiliate_question.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(TAffiliateQuestion $affiliate_question)
    {
        $pageTitle = $affiliate_question->s_title;
        $pageDescription = $affiliate_question->s_title;

        return view('admin.affiliate_questions.show', compact('affiliate_question', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $affiliate_question = $this->model->findOrFail($request->id);
        $affiliate_question->b_enabled = (int)$request->enabled;
        $affiliate_question->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(TAffiliateQuestion $affiliate_question)
    {
        $affiliate_question->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $affiliate_question = $this->model->select('t_affiliate_questions.*')->filter($filters)->distinct();
        return datatables($affiliate_question)->addColumn('actions_column', function ($row) {
            return view('admin.affiliate_questions.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
