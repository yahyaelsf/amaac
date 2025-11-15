<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<!-- Flat Picker -->
<script src="{{ asset('admin/assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<!-- Form Validation -->
<script src="{{ asset('admin/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Page JS -->
{{-- <script src="{{ asset('admin/assets/js/tables-datatables-basic.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.js') }}"></script>
<script>
    function deleteItem(item, path = "{{ request()->segment(2) }}") {
        swal.fire({
            title: "{{ trans('alerts.you_sure') }}",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '{{ trans('general.yes') }}',
            cancelButtonText: '{{ trans('general.no') }}',
            customClass: {
                confirmButton: 'btn btn-primary me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                let baseUrl = "{{ route('admin.home') }}".replace('/dashboard', '');
                $.ajax({
                    type: "delete",
                    dataType: 'json',
                    url: baseUrl + '/' + path + '/' + item,
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: item
                    },
                    success: function(data) {
                        if (data.success) {
                            swal.fire({
                                confirmButtonText: "@lang('general.yes')",
                                title: "{{ trans('alerts.successfully_deleted') }}",
                                type: 'success'
                            });
                            $('#data-table').DataTable().ajax.reload(null, false);

                        } else {
                            swal.fire({
                                confirmButtonText: "@lang('buttons.close')",
                                title: data.message,
                                type: 'error'
                            });
                        }

                    }
                });
            }
        });
    }

    $(document).on('change', '.js-switch', function() {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let elementId = $(this).data('id');
        let isFrequent = $(this).data('value');
        let baseUrl = "{{ route('admin.home') }}".replace('/dashboard', '');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: baseUrl + '/' + "{{ request()->segment(2) }}" + '/update_status',
            data: {
                'enabled': status,
                'id': elementId,
                'frequent': isFrequent
            },
            success: function(data) {
                console.log(data.message);
            }
        });
    });

</script>
<script>
    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @endif
</script>
@stack('js')
