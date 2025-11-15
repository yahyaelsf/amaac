@extends('admin.layouts.dashboard')
@push('css')
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                {{ $category ? "Edit Category" : "Create New Category" }}
                </h5>

                <form class="card-body" action="{{ route('admin.categories.store') }}" method="post">
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
                    @isset($category)
                        <input type="hidden" name="pk_i_id" value="{{ $category->getKey() }}" />
                    @endisset
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Category</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $category->s_title ?? '' }}" placeholder="title category">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   

                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.categories.index') }}" type="reset"
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
