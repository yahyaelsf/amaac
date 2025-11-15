@extends('admin.layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header flex-column flex-md-row">
            <div class="row">
                <div class="col-6 head-label">
                    <h5 class="card-title mb-0">roles</h5>
                </div>
                <div class="col-6 dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                        <a href="{{ route('admin.roles.form') }}" class="text-white btn btn-secondary create-new btn-primary" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button">
                            <span>
                                <i class="ti ti-plus me-sm-1"></i>
                                <span class="d-none d-sm-inline-block">Add New Record</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table" id="data-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Created Date</th>
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
            ajax: '{{ route('admin.roles.data') }}',
            columns: [{
                    data: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'actions_column',
                    searchable: false,
                    sortable: false,
                    responsivePriority: -1,
                    visible: {{ (int) (auth()->user()->can('roles-store') || auth()->user()->can('roles-store')) }}
                },
            ]
        });

    </script>


@endpush
