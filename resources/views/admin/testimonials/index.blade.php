@extends('admin.layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header flex-column flex-md-row">
            <div class="row">
                <div class="col-6 head-label">
                    <h5 class="card-title mb-0">Traders say</h5>
                </div>
                <div class="col-6 dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                        <a href="{{ route('admin.testimonials.create') }}" class="text-white btn btn-secondary create-new btn-primary" tabindex="0"
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
                        <th>title</th>
                        <th>value</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Status</th>
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
            ajax: '{{ route('admin.testimonials.data') }}',
            columns: [{
                    data: 'pk_i_id'
                },
                {
                    data: 's_title',
                    name: 's_title'
                },
                {
                    data: 'i_value',
                    name: 'i_value'
                },
                {
                    data: 'dt_created_date'
                },
                {
                    data: 'dt_modified_date'
                },
                {
                    data: 'enabled_html',
                    searchable: false,
                    sortable: false,
                    visible: {{ (int) auth()->user()->can('testimonials-status') }}
                },
                {
                    data: 'actions_column',
                    searchable: false,
                    sortable: false,
                    responsivePriority: -1,
                    visible: {{ (int) (auth()->user()->can('testimonials-store') || auth()->user()->can('testimonials-delete')) }}
                },
            ]
        });

    </script>


@endpush
