@extends('backend.app')

@section('title', 'Create Upcomming Album')

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
                        <h4 class="card-title">Create Upcomming Album </h4>
                        <div class="mt-4">
                            <form class="forms-sample"action="{{ route('upcomming.slider-image.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="form-group mb-3">
                                    <label class="form-lable">Title:</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                {{-- <div class="form-group mb-3">
                                    <label class="form-lable">Sub Title:</label>
                                    <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" name="sub_title" value="{{old('sub_title')}}">
                                    @error('sub_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">City</label>
                                        {{-- <textarea class="form-control @error('location') is-invalid @enderror" name="location" id="description">{{ old('location') }}</textarea> --}}
                                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{old('location')}}">
                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">Image</label>
                                        <input class="form-control dropify @error('image_url') is-invalid @enderror"
                                            type="file"
                                            data-default-file="{{ asset('backend/images/placeholder/image_placeholder.png') }}"
                                            name="image_url">

                                        @error('image_url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-lable">Performance Date:</label>
                                    <input type="date" class="form-control @error('performance_date') is-invalid @enderror" id="performance_date" name="performance_date" value="{{old('performance_date')}}">
                                    @error('performance_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- <div class="form-group mb-3">
                                    <label class="form-lable">Performance Time:</label>
                                    <input type="time" class="form-control @error('performance_time') is-invalid @enderror" id="performance_time" name="performance_time" value="{{old('performance_time')}}">
                                    @error('performance_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('upcomming.slider-image.index') }}" class="btn btn-danger ">Cancel</a>
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
