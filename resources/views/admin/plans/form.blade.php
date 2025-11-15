@extends('admin.layouts.dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/tagify/tagify.css') }}" />
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $plan ? 'Edit Plan' : 'Create New Plan' }}
                </h5>

                <form class="card-body" action="{{ route('admin.plans.store') }}" method="post">
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
                    @isset($plan)
                        <input type="hidden" name="pk_i_id" value="{{ $plan->getKey() }}" />
                    @endisset
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">plan description</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $plan->s_title ?? '' }}" placeholder="plan description">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">price</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="i_price" class="form-control"
                                value="{{ $plan->i_price ?? '' }}" placeholder="plan price">
                            @error('i_price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">select type</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="e_type" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Open this select period type</option>
                                <option @selected($plan && $plan->e_type == 'Monthly') value="Monthly">Monthly</option>
                                <option @selected($plan && $plan->e_type == 'Quarterly') value="Quarterly">Quarterly</option>
                                <option @selected($plan && $plan->e_type == 'Yearly') value="Yearly">Yearly</option>
                            </select>
                             @error('e_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message" for="tags">Features</label>
                        <div class="col-sm-9">
                            <input id="features" name="s_features" class="form-control"
                                placeholder="Type and press enter" value="{{ $plan->s_features ?? '' }}" />
                            @error('s_features')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.plans.index') }}" type="reset"
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
