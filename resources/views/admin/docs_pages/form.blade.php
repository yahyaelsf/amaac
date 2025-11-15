@extends('admin.layouts.dashboard')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $docs_page ? 'Edit Page' : 'Create New Page' }}
                </h5>

                <form class="card-body" action="{{ route('admin.docs-pages.store') }}" method="post"
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
                    @isset($docs_page)
                        <input type="hidden" name="pk_i_id" value="{{ $docs_page->getKey() }}" />
                    @endisset
                    {{-- <div class="row mb-5">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Cover Image</label>
                        <div class="col-sm-9">
                            <div class="position-relative d-inline-block mx-auto" style="width: 80px; height: 80px;">
                                <label for="coverInput">
                                    <img src="{{ $docs_page && $docs_page->s_cover ? asset($docs_page->s_cover) : asset('admin/placeholder.jfif') }}"
                                        alt="Cover Image" class="img-fluid w-100 h-100 object-fit-cover rounded shadow"
                                        id="coverPreview" style="cursor: pointer;" />
                                </label>
                                <label for="coverInput"
                                    class="position-absolute top-0 end-0 translate-middle bg-white p-2 rounded-circle shadow"
                                    style="cursor: pointer;">
                                    <i class="bi bi-pencil-fill text-primary"></i> <!-- Bootstrap icon -->
                                </label>
                                <input type="file" name="s_cover" id="coverInput" accept="image/*" class="d-none"
                                    onchange="previewCover(event)">

                            </div>
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Page title</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $docs_page->s_title ?? '' }}" placeholder="Page title">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Slug </label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="slug" class="form-control"
                                value="{{ $docs_page->slug ?? '' }}" placeholder="Slug">
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="typeSelect" class="col-sm-3 col-form-label">Select Type</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="e_type" id="typeSelect" aria-label="Default select example">
                                <option value="" selected>Open this select docs type</option>
                                <option @selected($docs_page && $docs_page->e_type == 'get_started') value="get_started">Get Started</option>
                                <option @selected($docs_page && $docs_page->e_type == 'toolkits') value="toolkits">Toolkits</option>
                                <option @selected($docs_page && $docs_page->e_type == 'fuego_ai') value="fuego_ai">Fuego Ai</option>
                            </select>
                            @error('e_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div id="parentSelectWrapper" class="row mb-3" style="display: none;">
                        <label for="parentSelect" class="col-sm-3 col-form-label">Select Parent</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="fk_i_parent_id" id="parentSelect"
                                aria-label="Default select example">
                                <option value="" selected disabled>Open this select docs Parent</option>
                                @foreach ($pages as $page)
                                    <option @selected($docs_page && $docs_page->fk_i_parent_id == $page->pk_i_id) value="{{ $page->pk_i_id }}">
                                        {{ $page->s_title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('fk_i_parent_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Description </label>
                        <div class="col-sm-9">
                            <textarea id="basic-default-message" name="s_description" class="form-control" placeholder="Description" rows="5">{{ $docs_page->s_description ?? '' }}</textarea>
                            @error('s_description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.docs-pages.index') }}" type="reset"
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
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.getElementById('typeSelect');
            const parentWrapper = document.getElementById('parentSelectWrapper');

            function toggleParentSelect() {
                if (typeSelect.value === 'toolkits') {
                    parentWrapper.style.display = 'flex';
                } else {
                    parentWrapper.style.display = 'none';
                }
            }

            // Run on page load in case it's already selected
            toggleParentSelect();

            // Run when changed
            typeSelect.addEventListener('change', toggleParentSelect);
        });
    </script>
@endpush
