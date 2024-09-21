@extends('backend.app')

@section('title', 'Feature Album')

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
                        <h4 class="card-title">Feature Album Section</h4>
                        <div class="mt-4">
                            <form action="{{ route('cms.landing-page.feature-album.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="7">

                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Title</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ $data[6]->title }}">
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
                                            placeholder="Sub Title" name="sub_title" value="{{ $data[6]->sub_title }}">
                                        @error('sub_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Audio</label>
                                        <input class="form-control @error('link_url') is-invalid @enderror"
                                            type="file"
                                            data-default-file="{{ $data[6]->link_url ? asset('storage/' . $data[6]->link_url) : asset('backend/images/placeholder/image_placeholder.png') }}"
                                            name="link_url">

                                        @error('link_url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Youtube URL:</label>
                                    <input type="url" class="form-control @error('youtube_url') is-invalid @enderror"
                                        name="youtube_url" value="{{ $data[6]->youtube_url }}">
                                    @error('youtube_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Spotify URL:</label>
                                    <input type="url" class="form-control @error('spotify_url') is-invalid @enderror"
                                        name="spotify_url" value="{{ $data[6]->spotify_url }}">
                                    @error('spotify_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Apple URL:</label>
                                    <input type="url" class="form-control @error('apple_url') is-invalid @enderror"
                                        name="apple_url" value="{{ $data[6]->apple_url }}">
                                    @error('apple_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
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
