<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Models\TUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $model;

    public function __construct(TUser $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.user');
        $pageDescription = trans('navigation.user');

        return view('admin.users.index', compact('pageTitle', 'pageDescription'));
    }
    public function create()
    {
        $id = request('id');
        $user = null;
        if ($id) {
            $user = $this->model->findOrFail($id);
        }
        return view('admin.users.form', compact('user'));

    }
    public function store(Request $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/users');
        }
        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $user = $this->model->find($id);
                $user->update($input);
            } else {
                $user = $this->model->create($input);
            }
            if ($images = $request->file('images')) {
                foreach ($images as $file) {
                    $type = strtoupper(explode('/', $file->getMimeType())[0]);
                    $user->resources()->create([
                        's_filename' => $file->store('uploads/users'),
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
            return redirect()->route('admin.users.index')->with('success', trans('alerts.successfully_updated'));
        } else {
            return redirect()->route('admin.users.index')->with('success', trans('alerts.successfully_added'));
        }
    }
    public function show(TUser $user)
    {
        $pageTitle = $user->s_title;
        $pageDescription = $user->s_title;

        return view('admin.users.show', compact('user', 'pageTitle', 'pageDescription'));
    }
    public function updateStatus(Request $request)
    {
        $user = $this->model->findOrFail($request->id);
        $user->b_enabled = (int)$request->enabled;
        $user->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function destroy(TUser $user)
    {
       $user->forceDelete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }
    public function datatable(ParentFilter $filters)
    {
        $user = $this->model->select('t_users.*')->filter($filters)->distinct();
        return datatables($user)->addColumn('actions_column', function ($row) {
            return view('admin.users.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
