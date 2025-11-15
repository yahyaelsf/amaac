@extends('admin.layouts.dashboard')
@push('css')

@endpush
@section('content')


    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $user ? 'Edit user' : 'Create New user' }}
                </h5>

                <form class="card-body" action="{{ route('admin.users.store') }}" method="post"
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
                    @isset($user)
                        <input type="hidden" name="pk_i_id" value="{{ $user->getKey() }}" />
                    @endisset
                    <div class="row mb-5">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Cover Image</label>
                        <div class="col-sm-9">
                            <div class="position-relative d-inline-block mx-auto" style="width: 80px; height: 80px;">
                                <label for="coverInput">
                                    <img src="{{ $user ? asset($user->s_cover) : asset('admin/placeholder.jfif') }}"
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
                        <label class="col-sm-3 col-form-label" for="multicol-username">user</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $user->s_title ?? '' }}" placeholder="title user">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">key</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_key" class="form-control"
                                value="{{ $user->s_key ?? '' }}" placeholder="key user">
                            @error('s_key')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Description</label>
                        <div class="col-sm-9">
                            <textarea id="basic-default-message" name="s_description" class="form-control" placeholder="Description user"
                                rows="5">{{ $user->s_description ?? '' }}</textarea>
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
                    @isset($user)
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
                                @if (isset($user) && $user->resources)
                                    @php
                                        $prev_resources = $user
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
                                <a href="{{ route('admin.users.index') }}" type="reset"
                                    class="btn btn-label-secondary waves-effect">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



