@extends('backend.app')

@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Profile Setting</h4>
                        <p class="card-description">Setup your profile, please <code>provide your valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" method="POST" action="{{ route('update.profile') }}">
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-12">
                                        <label class="form-lable">User Name:</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('name') is-invalid @enderror"
                                            placeholder="Name" name="name" value="{{ Auth::user()->name }}" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-12">
                                        <label class="form-lable">Email:</label>
                                        <input type="email"
                                            class="form-control form-control-md border-left-0 @error('email') is-invalid @enderror"
                                            placeholder="Email" name="email" value="{{ Auth::user()->email }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </form>


                            <h4 class="card-title mt-4">Update your password</h4>
                            <form class="forms-sample mt-4" method="POST" action="{{ route('update.Password') }}">
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-12">
                                        <label class="form-lable">Current Password:</label>
                                        <input type="password"
                                            class="form-control form-control-md border-left-0 @error('old_password') is-invalid @enderror"
                                            placeholder="Current Password" name="old_password" required>
                                        @error('old_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-12">
                                        <label class="form-lable">New Password:</label>
                                        <input type="password"
                                            class="form-control form-control-md border-left-0 @error('password') is-invalid @enderror"
                                            placeholder="New Password" name="password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-12">
                                        <label class="form-lable">Confirm Password:</label>
                                        <input type="password"
                                            class="form-control form-control-md border-left-0 @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Confirm Password" name="password_confirmation" required>
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('homepage') }}" class="btn btn-danger me-2">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
