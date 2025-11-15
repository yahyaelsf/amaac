<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuestionRequest;
use App\Models\TQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    protected $model;

    public function __construct(TQuestion $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.question');
        $pageDescription = trans('navigation.question');

        return view('admin.questions.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $question = null;
        if ($id) {
            $question = $this->model->findOrFail($id);
        }
        return view('admin.questions.form', compact('question'));

    }
    public function store(StoreQuestionRequest $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/questions');
        }

        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $question = $this->model->find($id);
                $question->update($input);
            } else {
                $question = $this->model->create($input);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', trans('alerts.validation_failed'));
        }

        DB::commit();
        if ($id = request('pk_i_id')) {
            return redirect()->route('admin.questions.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.questions.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(TQuestion $question)
    {
        $pageTitle = $question->s_title;
        $pageDescription = $question->s_title;

        return view('admin.questions.show', compact('question', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $question = $this->model->findOrFail($request->id);
        $question->b_enabled = (int)$request->enabled;
        $question->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(TQuestion $question)
    {
        $question->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $question = $this->model->select('t_questions.*')->filter($filters)->distinct();
        return datatables($question)->addColumn('actions_column', function ($row) {
            return view('admin.questions.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
