@extends('backend.app')

@section('title', 'Media')

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Media Section</h4>
                        <div class="mt-4">
                            <form action="{{ route('cms.landing-page.media.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="5">

                                {{-- <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Title</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ $data[4]->title }}">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Sub Title</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('sub_title') is-invalid @enderror"
                                            placeholder="Sub Title" name="sub_title" value="{{ $data[4]->sub_title }}">
                                        @error('sub_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ $data[4]->description }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Button Text</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('button_text') is-invalid @enderror"
                                            placeholder="Button Text" name="button_text"
                                            value="{{ $data[4]->button_text }}">
                                        @error('button_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Button Link</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('link_url') is-invalid @enderror"
                                            placeholder="Button Link" name="link_url" value="{{ $data[4]->link_url }}">
                                        @error('link_url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
