@extends('admin.layouts.dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/tagify/tagify.css') }}" />
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $payment ? 'Edit payment' : 'Create New payment' }}
                </h5>

                <form class="card-body" action="{{ route('admin.payments.process') }}" method="post">
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
                    @isset($payment)
                        <input type="hidden" name="id" value="{{ $payment->id }}" />
                    @endisset
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">username</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="username" class="form-control"
                                value="{{ $payment->username ?? '' }}" placeholder="payment name"  {{ $payment ?'readonly': '' }}>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">wallet address</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="wallet_address" class="form-control"
                                value="{{ $payment->wallet_address ?? '' }}" placeholder="payment display name" {{ $payment ?'readonly': '' }}>
                            @error('wallet_address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Change Status</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="status" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Open this change status</option>
                                    <option @selected($payment && $payment->status == 'pending') value="pending">pending</option>
                                    <option @selected($payment && $payment->status == 'confirmed') value="confirmed">confirmed</option>
                                    <option @selected($payment && $payment->status == 'rejected') value="rejected">rejected</option>


                            </select>
                             @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.payments.index') }}" type="reset"
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
