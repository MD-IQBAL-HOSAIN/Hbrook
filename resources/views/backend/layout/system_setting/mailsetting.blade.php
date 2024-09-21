@extends('backend.app')

@section('title', 'Dashboard')

@push('style')
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Mail Setting</h4>
                        <p class="card-description">Setup your system mail, please <code>provide your valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" action="{{route('system.mail.update')}}" method="POST">
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">MAIL MAILER</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_mailer') is-invalid @enderror"
                                            placeholder="MAIL MAILER" name="mail_mailer" value="{{ env('MAIL_MAILER') }}"
                                            required>
                                        @error('mail_mailer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-lable">MAIL HOST</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_host') is-invalid @enderror"
                                            placeholder="MAIL HOST" name="mail_host" value="{{ env('MAIL_HOST') }}"
                                            required>
                                        @error('mail_host')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">MAIL PORT</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_port') is-invalid @enderror"
                                            placeholder="MAIL PORT" name="mail_port" value="{{ env('MAIL_PORT') }}"
                                            required>
                                        @error('mail_port')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-lable">MAIL USERNAME</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_username') is-invalid @enderror"
                                            placeholder="MAIL USERNAME" name="mail_username"
                                            value="{{ env('MAIL_USERNAME') }}" required>
                                        @error('mail_username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col">
                                        <label class="form-lable">MAIL PASSWORD</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_password') is-invalid @enderror"
                                            placeholder="MAIL PASSWORD" name="mail_password"
                                            value="{{ env('MAIL_PASSWORD') }}" required>
                                        @error('mail_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-lable">MAIL ENCRYPTION</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_encryption') is-invalid @enderror"
                                            placeholder="MAIL ENCRYPTION" name="mail_encryption"
                                            value="{{ env('MAIL_ENCRYPTION') }}" required>
                                        @error('mail_encryption')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-6">
                                        <label class="form-lable">MAIL FROM ADDRESS</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_from_address') is-invalid @enderror"
                                            placeholder="MAIL FROM ADDRESS" name="mail_from_address"
                                            value="{{ env('MAIL_FROM_ADDRESS') }}" required>
                                        @error('mail_from_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/41.3.1/ckeditor.min.js"
        integrity="sha512-Qhh+VfoTh+a2tbFw+u86fMKfvyNyHR4aTVbivQAIkFQPcXFa1S0ZlTcib0HXiT4XBVS0a/FtSGamQ9YfXIaPRg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
