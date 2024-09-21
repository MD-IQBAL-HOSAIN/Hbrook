@extends('frontend.app')

@push('style')
    <style>
        .extended--footer .extra--wrapper {
            display: none;
        }

        #google_translate_element .goog-te-combo {
            display: none;
        }
    </style>
@endpush

@section('content')
    <main>
        <!-- sign up section start -->
        <section class="signup-section-area">
            <div class="container">
                <div class="sign-up-content-wrapper row">
                    <div class="col-md-6">
                        <h2 class="signup-heading">Input your information</h2>
                        <p class="signup-para signup-para-1">
                            We need you to help us with some basic information for your account creation. Here are our <a
                                class="signup-terms" href="terms.html">terms and conditions</a>. Please read them carefully.
                            We are GDRP compliiant
                        </p>
                        <div class="signup-input-field">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputname" name="name" value="{{ old('name') }}" placeholder="Your Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" placeholder="Password" name="password" value="{{ old('password') }}"
                                        required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        id="confirmPassword" placeholder="Confirm Password" name="password_confirmation" required>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeTerms" name="agreement" required>
                                    <label class="form-check-label signup-para" for="agreeTerms">I agree with <a
                                            class="signup-terms" href="#">terms and conditions</a> </label>
                                </div>
                                <div class="change-pwd-div">
                                    {{-- <a href="success.html"></a> --}}
                                    <button type="submit" class="sign-up-register">Register</button>
                                </div>
                            </form>
                        </div>
                        <div class="already-member d-flex align-items-center gap-4">
                            <p class="already-member-para">Already a member?</p>
                            <a href="{{ route('login') }}">
                                <img src="{{ asset('frontend/images/profile.png') }}" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 signup-col-2">
                        <img src="{{ asset('frontend/images/signup-img-1.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>

        <!-- sign up section End -->
    </main>
@endsection

@push('script')

  {{-- Google Translate  --}}
  <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,fr',
        }, 'google_translate_element');
        setTimeout(checkInitialLanguage, 1000);;
    }

    function translateLanguage(lang) {
        var translateElement = document.querySelector('.goog-te-combo');
        if (translateElement) {
            translateElement.value = lang;
            translateElement.dispatchEvent(new Event('change'));
        }
        updateFlag(lang);
    }

    function updateFlag(lang) {
        var flagEn = document.getElementById('flag-en');
        var flagFr = document.getElementById('flag-fr');
        if (lang === 'en') {
            flagEn.style.display = 'none';
            flagFr.style.display = 'inline-block';
        } else {
            flagEn.style.display = 'inline-block';
            flagFr.style.display = 'none';
        }
    }

    function checkInitialLanguage() {
        var translateElement = document.querySelector('.goog-te-combo');
        if (translateElement) {
            var currentLang = translateElement.value || 'en';
            updateFlag(currentLang);
        } else {
            // If the translate element is not found, try again after a short delay
            setTimeout(checkInitialLanguage, 500);
        }
    }

    // Listen for changes to the Google Translate select element
    function observeTranslateCombo() {
        var translateElement = document.querySelector('.goog-te-combo');
        if (translateElement) {
            translateElement.addEventListener('change', function() {
                var selectedLang = translateElement.value;
                updateFlag(selectedLang);
            });
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(observeTranslateCombo, 1000); // Delay to ensure Google Translate is initialized
        checkInitialLanguage(); // Check initial language on page load
    });
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

@endpush
