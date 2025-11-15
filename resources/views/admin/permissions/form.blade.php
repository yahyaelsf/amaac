@extends('admin.layouts.dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/tagify/tagify.css') }}" />
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $permission ? 'Edit permission' : 'Create New permission' }}
                </h5>

                <form class="card-body" action="{{ route('admin.permissions.process') }}" method="post">
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
                    @isset($permission)
                        <input type="hidden" name="pk_i_id" value="{{ $permission->getKey() }}" />
                    @endisset
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">permission name</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="name" class="form-control"
                                value="{{ $permission->name ?? '' }}" placeholder="permission name"  {{ $permission ?'readonly': '' }}>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">display name</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="display_name" class="form-control"
                                value="{{ $permission->display_name ?? '' }}" placeholder="permission display name">
                            @error('display_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">select Parent</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="parent_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Open this select Parent</option>
                                @foreach($parents as $id => $label)
                                     <option @selected($permission && $permission->parent_id == $id) value="{{ $id }}">{{ $label }}</option>
                                @endforeach

                            </select>
                             @error('parent_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.permissions.index') }}" type="reset"
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
    <script src="{{ asset('admin/assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script>
        let input = document.querySelector('#features');
        new Tagify(input);
    </script>
@endpush
