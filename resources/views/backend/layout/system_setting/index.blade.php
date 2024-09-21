@extends('backend.app')

@section('title', 'Dashboard')

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
                        <h4 class="card-title">System Setting</h4>
                        <p class="card-description">Setup your system, please <code>provide your valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" method="POST" action="{{ route('system.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable" for="basic-default-system_name">System Email:</label>
                                        <input type="email"
                                            class="form-control form-control-md border-left-0 @error('system_name') is-invalid @enderror"
                                            placeholder="Email" id="basic-default-system_name" name="system_name" value="{{ $setting->system_name ?? '' }}">
                                        @error('system_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label>Copy Rights Text:</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('copyright') is-invalid @enderror"
                                            placeholder="Copy Rights" name="copyright"
                                            value="{{ $setting->copyright ?? '' }}">
                                        @error('copyright')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label>Logo:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('logo') is-invalid @enderror"
                                            name="logo"
                                            data-default-file="@isset($setting){{ asset('storage/' . $setting->logo) }}@endisset">
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Favicon:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('favicon') is-invalid @enderror"
                                            name="favicon"
                                            data-default-file="@isset($setting){{ asset('storage/' . $setting->favicon) }}@endisset">
                                        @error('favicon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>About System</label>
                                    <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description">{{ $setting->description ?? '' }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/41.3.1/ckeditor.min.js"></script>

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });

        $('.dropify').dropify();
    </script>
@endpush
