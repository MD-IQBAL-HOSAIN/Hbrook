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
                        <h4 class="card-title">Stripe Setting</h4>
                        <p class="card-description">Setup your Stripe, please <code>provide your valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" action="{{route('stripe.store')}}" method="POST">
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-6">
                                        <label>STRIPE KEY</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_mailer') is-invalid @enderror"
                                            placeholder="STRIPE KEY" name="stripe_key" value="{{ env('STRIPE_KEY') }}" required>
                                        @error('mail_mailer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-6">
                                        <label>STRIPE SECRET</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('mail_port') is-invalid @enderror"
                                            placeholder="STRIPE SECRET" name="stripe_secret" value="{{ env('STRIPE_SECRET') }}"
                                            required>
                                        @error('mail_port')
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
