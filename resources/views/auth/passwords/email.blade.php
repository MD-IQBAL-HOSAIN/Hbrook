@extends('frontend.app')

@push('style')

<style>
      #google_translate_element .goog-te-combo {
            display: none;
        }
</style>

@endpush

@section('content')

    <main>
        <section class="bi-login-container">
            <div class="login-container-left">
                <div class="form-container">
                    <h1>Forgot
                        password?</h1>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Don't worry we can help you out! if you still remember your email address you can quickly reset your
                        password. Just input that information in the fields below and click on the button. This will send
                        you a new email that will link you to the password change website. </p>
                    <hr />
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="bi-login-input-wrapper">
                            <input type="email" class="@error('email') is-invalid @enderror" placeholder="Your Email"
                                name="email" id="email" required autocomplete="email" autofocus />
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.1"
                                    d="M12 0C15.315 0 18 2.685 18 6C18 9.315 15.315 12 12 12C8.685 12 6 9.315 6 6C6 2.685 8.685 0 12 0ZM12 24C12 24 24 24 24 21C24 17.4 18.15 13.5 12 13.5C5.85 13.5 0 17.4 0 21C0 24 12 24 12 24Z"
                                    fill="black" />
                            </svg>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr />

                        <div class="bi-login-input-wrapper ">
                            <button type="submit" value="" name="submit" id="submit">Request Password
                                Change</button>
                        </div>
                    </form>
                </div>
                <div class="redirect-container">
                    <p>Do you need help?</p>
                    <a href="registration.html">Customer Support</a>
                </div>
            </div>
            <div class="login-container-right">
                <img class="" src="{{ asset('frontend/images/cuate.png') }}" alt="" srcset="">
            </div>
        </section>
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
