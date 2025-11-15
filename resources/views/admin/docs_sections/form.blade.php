@extends('admin.layouts.dashboard')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <style>
        #editor {
            min-height: 300px;
            /* or any height you prefer */
        }
    </style>
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $docs_section ? 'Edit Section' : 'Create New Section' }}
                </h5>

                <form class="card-body" action="{{ route('admin.docs-sections.store') }}" method="post"
                    enctype="multipart/form-data">
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
                    @isset($docs_section)
                        <input type="hidden" name="pk_i_id" value="{{ $docs_section->getKey() }}" />
                    @endisset
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Section title</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $docs_section->s_title ?? '' }}" placeholder="Section title">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Slug </label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="slug" class="form-control"
                                value="{{ $docs_section->slug ?? '' }}" placeholder="Slug">
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="selectpickerLiveSearch" class="col-sm-3 col-form-label">Live Search</label>
                        <div class="col-sm-9">
                            <select id="selectpickerLiveSearch" class="selectpicker w-100" data-style="btn-default"
                                data-live-search="true" name="fk_i_page_id">
                                <option selected="">Choose Page</option>
                               @foreach ($pages as $page)
                                    <option data-tokens="{{ $page->slug }}" @selected($docs_section && $docs_section->fk_i_page_id == $page->pk_i_id) value="{{ $page->pk_i_id }}">{{ $page->slug }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">select page</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="fk_i_page_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Choose Page</option>
                                @foreach ($pages as $page)
                                    <option @selected($docs_section && $docs_section->fk_i_page_id == $page->pk_i_id) value="{{ $page->pk_i_id }}">{{ $page->slug }}
                                    </option>
                                @endforeach


                            </select>
                            @error('e_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Description </label>
                        <div class="col-sm-9">
                            <textarea id="summernote" name="s_description" class="form-control rich-text" placeholder="Description" rows="5">{{ $docs_section->s_description ?? '' }}</textarea>
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
                                <a href="{{ route('admin.docs-sections.index') }}" type="reset"
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300 // set the height in pixels
            });
        });
    </script>

    <script>
        function previewCover(event) {
            const s_cover = event.target.files[0];
            if (s_cover) {
                const reader = new FileReader();
                reader.onload = e => {
                    document.getElementById('coverPreview').src = e.target.result;
                };
                reader.readAsDataURL(s_cover);
            }
        }
        $(function() {
            const selectPicker = $('.selectpicker'),
                select2 = $('.select2'),
                select2Icons = $('.select2-icons');

            // Bootstrap Select
            // --------------------------------------------------------------------
            if (selectPicker.length) {
                selectPicker.selectpicker();
            }
        });
    </script>
@endpush
