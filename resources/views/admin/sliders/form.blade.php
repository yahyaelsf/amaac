@extends('admin.layouts.dashboard')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
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
                    {{ $slider ? 'Edit Slider' : 'Create New Slider' }}
                </h5>

                <form class="card-body" action="{{ route('admin.sliders.store') }}" method="post"
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
                    @isset($slider)
                        <input type="hidden" name="pk_i_id" value="{{ $slider->getKey() }}" />
                    @endisset
                    <div class="row mb-5">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Background Image</label>
                        <div class="col-sm-9">
                            <div class="position-relative d-inline-block mx-auto" style="width: 80px; height: 80px;">
                                <label for="innerCoverInput">
                                    <img src="{{ $slider ? asset($slider->s_cover) : asset('admin/placeholder.jfif') }}"
                                        alt="Cover Image" class="img-fluid w-100 h-100 object-fit-cover rounded shadow"
                                        id="innerCoverPreview" style="cursor: pointer;" />
                                </label>
                                <label for="innerCoverInput"
                                    class="position-absolute top-0 end-0 translate-middle bg-white p-2 rounded-circle shadow"
                                    style="cursor: pointer;">
                                    <i class="bi bi-pencil-fill text-primary"></i> <!-- Bootstrap icon -->
                                </label>
                                <input type="file" name="s_cover" id="innerCoverInput" accept="image/*" class="d-none"
                                    onchange="previewCover(event,'innerCoverPreview')">

                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">slider title</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $slider->s_title ?? '' }}" placeholder="title slider">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">sub title </label>
                        <div class="col-sm-9">
                            <textarea id="basic-default-message" name="s_sub_title" class="form-control" placeholder="description slider"
                                rows="5">{{ $slider->s_sub_title ?? '' }}</textarea>
                            @error('s_sub_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Description </label>
                        <div class="col-sm-9">
                            <textarea id="basic-default-message" name="s_description" class="form-control" placeholder="description slider"
                                rows="5">{{ $slider->s_description ?? '' }}</textarea>
                            @error('s_description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Show Buttons </label>
                        <div class="col-sm-9">
                            <label class="switch switch-primary">
                                <input type="checkbox" class="switch-input js-switch" name="b_show_buttons"
                                    @if($slider &&  $slider->b_show_buttons == 1)
                                        checked
                                    @endif
                                >
                    <span class="switch-toggle-slider">
                        <span class="switch-on"><i class="ti ti-check"></i></span>
                        <span class="switch-off"><i class="ti ti-x"></i></span>
                    </span>
                    <span class="switch-label"></span>
                </label>
                            </div>
                        </div>

                        <div class="pt-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <button type="submit"
                                        class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                    <a href="{{ route('admin.sliders.index') }}" type="reset"
                                        class="btn btn-label-secondary waves-effect">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection


@push(' js') <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
                                <script>
                                    function previewCover(event, previewId) {
                                        const file = event.target.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = e => {
                                                document.getElementById(previewId).src = e.target.result;
                                            };
                                            reader.readAsDataURL(file);
                                        }
                                    }
                                    $(document).ready(function() {
                                        $('.select2').select2({
                                            placeholder: "Select category",
                                            width: '100%'
                                        });
                                    });
                                </script>
                            @endpush
