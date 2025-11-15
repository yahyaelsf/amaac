@extends('admin.layouts.dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/tagify/tagify.css') }}" />
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $earning ? 'Edit Earning' : 'Create New Earning' }}
                </h5>

                <form class="card-body" action="{{ route('admin.earnings.process') }}" method="post">
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
                    @isset($earning)
                        <input type="hidden" name="id" value="{{ $earning->id }}" />
                    @endisset
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Payout Address</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="username" class="form-control"
                                value="{{ $earning->referrer->payout_address ?? '' }}" placeholder="Payout Address"  {{ $earning ?'readonly': '' }}>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Commission Rate</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="commission_rate" class="form-control"
                                value="{{ $earning->commission_rate ?? '' }}" placeholder="earning display name" {{ $earning ?'readonly': '' }}>
                            @error('commission_rate')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Earnings</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="commission_amount" class="form-control"
                                value="{{ $earning->commission_amount ?? '' }}" placeholder="earning display name" {{ $earning ?'readonly': '' }}>
                            @error('commission_amount')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Change Status</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="is_withdrawn" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Open this change status</option>
                                    <option @selected($earning && $earning->is_withdrawn == 0) value="0">Un paid</option>
                                    <option @selected($earning && $earning->is_withdrawn == 1) value="1">Paid</option>
                            </select>
                             @error('is_withdrawn')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.earnings.index') }}" type="reset"
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
