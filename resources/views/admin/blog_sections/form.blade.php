@extends('admin.layouts.dashboard')
@push('css')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
 <style>
  #editor {
    min-height: 300px; /* or any height you prefer */
  }
</style>
@endpush
@section('content')

    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                {{ $blog_section ? "Edit blog section" : "Create New blog section" }}
                </h5>

                <form class="card-body" action="{{ route('admin.blog-sections.store') }}" method="post" enctype="multipart/form-data">
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
                    @isset($blog_section)
                        <input type="hidden" name="pk_i_id" value="{{ $blog_section->getKey() }}" />
                    @endisset

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">section title</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $blog_section->s_title ?? '' }}" placeholder="title section">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                      <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">select blog</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="fk_i_blog_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Choose blog</option>
                                @foreach($blogs as $blog)
                                     <option @selected($blog_section && $blog_section->fk_i_blog_id == $blog->pk_i_id  ) value="{{ $blog->pk_i_id }}">{{ $blog->s_title }}</option>
                                @endforeach


                            </select>
                             @error('e_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-message">Description </label>
                        <div class="col-sm-9">
                            <textarea id="summernote" name="s_description" class="form-control" placeholder="description blog_section"
                                rows="5">{{ $blog_section->s_description ?? '' }}</textarea>
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
                                <a href="{{ route('admin.blog-sections.index') }}" type="reset"
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
    </script>
@endpush
