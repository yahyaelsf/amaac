@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $admin ? 'Edit admin' : 'Create New admin' }}
                </h5>

                <form class="card-body" action="{{ route('admin.admins.store') }}" method="post"
                    enctype="multipart/form-data">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    @isset($admin)
                        <input type="hidden" name="pk_i_id" value="{{ $admin->getKey() }}" />
                    @endisset

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">name</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_name" class="form-control"
                                value="{{ $admin->s_name ?? '' }}" placeholder="title admin">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">email</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_email" class="form-control"
                                value="{{ $admin->s_email ?? '' }}" placeholder="email admin">
                            @error('s_email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">select Role</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="fk_i_role_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Choose Role</option>
                                @foreach($roles as $role)
                                     <option @selected($admin && isset($admin->roles[0])) value="{{ $role->name }}">{{ $role->display_name }}</option>
                                @endforeach


                            </select>
                             @error('e_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">password</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_password" class="form-control"
                                 placeholder="password admin">
                            @error('s_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">confirm password</label>
                        <div class="col-sm-9">
                            <input type="password" id="multicol-username" name="s_confirm_password" class="form-control"
                                value="{{ $admin->s_confirm_password ?? '' }}" placeholder="confirm password admin">
                            @error('s_confirm_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.admins.index') }}" type="reset"
                                    class="btn btn-label-secondary waves-effect">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('js')

@endpush
