@extends('admin.layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header flex-column flex-md-row">
            <div class="row">
                <div class="col-6 head-label">
                    <h5 class="card-title mb-0">Earnings</h5>
                </div>
                <div class="col-6 dt-action-buttons text-end pt-3 pt-md-0">
                    {{-- <div class="dt-buttons btn-group flex-wrap">
                        <a href="{{ route('admin.payments.form') }}" class="text-white btn btn-secondary create-new btn-primary" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button">
                            <span>
                                <i class="ti ti-plus me-sm-1"></i>
                                <span class="d-none d-sm-inline-block">Add New Record</span>
                            </span>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table" id="data-table">
                <thead>
                    <tr>
                        <th>id</th>
                         <th>email</th>
                        <th>rate</th>
                        <th>Earnings</th>
                        <th>payout Address</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection

@push('js')
    <script>
        const table = $('#data-table');
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.earnings.data') }}',
            columns: [
                {data: 'id'},
                {data: 'referrer.s_email', searchable: false, sortable: false},
                {data: 'commission_rate'},
                {data: 'commission_amount'},
                {data: 'payout_address_display'},
                {data: 'is_withdrawn_label'},
                {data: 'actions_column', responsivePriority: -1, sortable: false},
            ]
        });

    </script>


@endpush
