@extends('admin.layouts.dashboard')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .dz-preview {
            position: relative;
            width: 150px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .dz-preview img {
            width: 100%;
            border-radius: 5px;
        }

        .dz-progress {
            height: 4px;
            background: #ddd;
            margin-top: 5px;
            border-radius: 4px;
            overflow: hidden;
        }

        .dz-progress-bar {
            height: 100%;
            background-color: #0d6efd;
            width: 0;
            transition: width 0.4s;
        }

        .dz-remove {
            position: absolute;
            top: 4px;
            right: 6px;
            background: #ccc;
            color: white;
            border: none;
            border-radius: 100%;
            width: 24px;
            height: 24px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
@endpush
@section('content')


    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $strategy ? 'Edit strategy' : 'Create New strategy' }}
                </h5>

                <form class="card-body" action="{{ route('admin.strategies.store') }}" method="post"
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
                    @isset($strategy)
                        <input type="hidden" name="pk_i_id" value="{{ $strategy->getKey() }}" />
                    @endisset
                    <div class="row mb-5">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Cover Image</label>
                        <div class="col-sm-9">
                            <div class="position-relative d-inline-block mx-auto" style="width: 80px; height: 80px;">
                                <label for="coverInput">
                                    <img src="{{ $strategy ? asset($strategy->s_cover) : asset('admin/placeholder.jfif') }}"
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
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">strategy</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $strategy->s_title ?? '' }}" placeholder="title strategy">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                     <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Link</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_link" class="form-control"
                                value="{{ $strategy->s_link ?? '' }}" placeholder="link strategy">
                            @error('s_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">key</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_key" class="form-control"
                                value="{{ $strategy->s_key ?? '' }}" placeholder="key strategy">
                            @error('s_key')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Description</label>
                        <div class="col-sm-9">
                            <textarea id="basic-default-message" name="s_description" class="form-control" placeholder="Description strategy"
                                rows="5">{{ $strategy->s_description ?? '' }}</textarea>
                            @error('s_description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Images</label>
                        <div class="col-sm-9">
                            <div id="dropzone-multi" style="border: 2px dashed #ccc; padding: 30px; text-align: center;">
                                Drag & drop files here or <input type="file" name="images[]" id="fileInput" multiple>
                            </div>
                            <div class="preview-container" id="previewContainer"></div>
                        </div>
                    </div>
                    @isset($strategy)
                    <div class="row mb-3">
                     <label class="col-sm-3 col-form-label" for="basic-default-message">Images</label>
                        <style>
                            .close-ic {
                                position: absolute;
                                top: 10px;
                                left: 10px;
                                z-index: 10;
                            }

                            .close-ic i {
                                color: white;
                                background-color: red;
                                height: 28px;
                                width: 28px;
                                border-radius: 50%;
                                text-align: center;
                                line-height: 28px;
                                font-size: 16px;
                                cursor: pointer;
                            }
                        </style>
                        <div class="col-md-9">
                            <div class="row">
                                @if (isset($strategy) && $strategy->resources)
                                    @php
                                        $prev_resources = $strategy
                                            ->resources()
                                            ->where('e_status', 'not_destroyer')
                                            ->get();
                                    @endphp
                                    @foreach ($prev_resources as $resource)
                                        <div id="resource-{{ $resource->getKey() }}" class="col-md-3">
                                            <figure class="position-relative">
                                                <a onclick="deleteResource({{ $resource->getKey() }})" class="close-ic">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                @if ($resource->e_type == 'IMAGE')
                                                    <img class="img-thumbnail" src="{{ asset($resource->s_filename) }}" />
                                                @else
                                                    <video width="320" height="240" controls>
                                                        <source src="{{ asset($resource->s_filename) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                                            </figure>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    @endisset
                    <div class="pt-4 mb-3">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('admin.strategies.index') }}" type="reset"
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
        const dropzone = document.getElementById('dropzone-multi');
        const fileInput = document.getElementById('fileInput');
        const previewContainer = document.getElementById('previewContainer');
        const maxFileSize = 5 * 1024 * 1024; // 5MB

        function createPreview(file) {
            if (file.size > maxFileSize) {
                alert(`File ${file.name} is too large.`);
                return;
            }

            const reader = new FileReader();
            const preview = document.createElement('div');
            preview.classList.add('dz-preview');

            preview.innerHTML = `
            <button class="dz-remove">&times;</button>
            <img src="" alt="${file.name}">
            <div class="dz-filename">${file.name}</div>
            <div class="dz-size">${(file.size / 1024).toFixed(2)} KB</div>
            <div class="dz-progress"><div class="dz-progress-bar"></div></div>
            `;

            const img = preview.querySelector('img');
            const progressBar = preview.querySelector('.dz-progress-bar');

            reader.onload = function(e) {
                img.src = e.target.result;
            };
            reader.readAsDataURL(file);

            // Fake progress bar
            let progress = 0;
            const interval = setInterval(() => {
                progress += 10;
                progressBar.style.width = `${progress}%`;
                if (progress >= 100) clearInterval(interval);
            }, 100);

            // Remove button
            preview.querySelector('.dz-remove').onclick = () => preview.remove();

            previewContainer.appendChild(preview);
        }

        function handleFiles(files) {
            [...files].forEach(createPreview);
        }

        dropzone.addEventListener('drop', function(e) {
            e.preventDefault();
            handleFiles(e.dataTransfer.files);
        });

        dropzone.addEventListener('dragover', function(e) {
            e.preventDefault();
        });

        fileInput.addEventListener('change', function() {
            handleFiles(fileInput.files);
        });
        function deleteResource(id) {
            if (confirm("@lang('alerts.you_sure')")) {
                $.ajax({
                    url: '/admin/resources/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                        if (result.success) {
                            $('#resource-' + id).remove();
                        }
                    }
                });
            }
        }
    </script>
@endpush
