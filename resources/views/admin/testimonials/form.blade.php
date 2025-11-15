@extends('admin.layouts.dashboard')
@push('css')
@endpush
@section('content')

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                {{ $testimonial ? "Edit Traders say" : " Create New Traders say" }}

                </h5>

                <form class="card-body" action="{{ route('admin.testimonials.store') }}" method="post">
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
                    @isset($testimonial)
                        <input type="hidden" name="pk_i_id" value="{{ $testimonial->getKey() }}" />
                    @endisset
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Name Trader </label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $testimonial->s_title ?? '' }}" placeholder="title testimonial">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">value for stars </label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="i_value" class="form-control"
                                value="{{ $testimonial->i_value ?? '' }}" placeholder="value for stars">
                            @error('i_value')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">About us</label>
                        <div class="col-sm-9">
                            <textarea id="basic-default-message" name="s_description" class="form-control" placeholder="answer testimonial"
                                rows="5">{{ $testimonial->s_description ?? '' }}</textarea>
                            @error('s_description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.testimonials.index') }}" type="reset"
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
