@extends('admin.layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header flex-column flex-md-row">
            <div class="row">
                <div class="col-6 head-label">
                    <h5 class="card-title mb-0">Blog Sections</h5>
                </div>
                <div class="col-6 dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                        <a href="{{ route('admin.blog-sections.create') }}" class="text-white btn btn-secondary create-new btn-primary" tabindex="0"
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
                         <th>Blog</th>
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
            ajax: '{{ route('admin.blog-sections.data') }}',
            columns: [{
                    data: 'pk_i_id'
                },
                {
                    data: 's_title',
                    name: 's_title'
                },
                {data: 'blog.s_title', searchable: false, sortable: false},
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
                    visible: {{ (int) auth()->user()->can('blog-sections-store') }}
                },
                {
                    data: 'actions_column',
                    searchable: false,
                    sortable: false,
                    responsivePriority: -1,
                    visible: {{ (int) (auth()->user()->can('blog-sections-store') || auth()->user()->can('blog-sections-store')) }}
                },
            ]
        });

    </script>


@endpush
