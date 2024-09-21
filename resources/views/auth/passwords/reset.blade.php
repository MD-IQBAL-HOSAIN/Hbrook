@extends('frontend.app')

@push('style')
@endpush

@section('content')
    <main>
        <section class="signup-section-area">
            <div class="container">
                <div class="sign-up-content-wrapper row">
                    <div class="col-md-6">
                        <h2 class="signup-heading">Change password</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p class="signup-para signup-para-1">
                            Input your new desired password in the input fields below to create a new password. We strongly
                            advise you to store it safely.
                        </p>
                        <div class="signup-input-field">
                            <form id="passwordForm" action="{{ route('password.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <input type="hidden" name="email" value="{{ $email }}">
                                <div class="form-group new-password">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" id="password"
                                        placeholder="New Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="password-strength" id="password-strength">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="form-group confirm-password">
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" required autocomplete="new-password"
                                        id="confirmPassword" placeholder="Confirm Password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="change-pwd-div">
                                    <button type="submit" class="password-change-btn">Request Password Change</button>
                                </div>
                            </form>
                        </div>
                        <div class="already-member d-flex gap-4 flex-column">
                            <p class="need-help-para">
                                Do you need help?
                            </p>
                            <p class="already-member-para">Customer Support</p>
                        </div>
                    </div>
                    <div class="col-md-6 signup-col-2">
                        <img src="{{ asset('frontend/images/signup-img-1.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
