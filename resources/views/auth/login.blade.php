@extends('frontend.app')

@section('title', 'LogIn')

@push('style')

<style>
      #google_translate_element .goog-te-combo {
            display: none;
        }
</style>

@endpush

@section('content')

    <!-- Main Area Starts -->
    <main>
        <section class=" bi-login-container">
            <div class="login-container-left">
                <div class="form-container">
                    <h1>Log In</h1>
                    <p>Please input your information in the fields below to enter your
                        Journey platform. </p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        {{-- <div class="bi-login-input-wrapper">
                            <input type="email" class="@error('email') is-invalid @enderror" id="exampleInputEmail1"
                                placeholder="ENTER YOUR EMAIL" name="email" value="{{ old('email') }}" autocomplete="email"
                                autofocus required />

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.1"
                                    d="M12 0C15.315 0 18 2.685 18 6C18 9.315 15.315 12 12 12C8.685 12 6 9.315 6 6C6 2.685 8.685 0 12 0ZM12 24C12 24 24 24 24 21C24 17.4 18.15 13.5 12 13.5C5.85 13.5 0 17.4 0 21C0 24 12 24 12 24Z"
                                    fill="black" />
                            </svg>
                            @error('email')
                                <span class="invalid-feedback" style="display: block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        <div class="bi-login-input-wrapper">
                            <div class="col">
                                <label for="">Email:</label>
                                <input type="email" class="@error('email') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="ENTER YOUR EMAIL" name="email" value="{{ old('email') }}"
                                    autocomplete="email" autofocus required />

                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.1"
                                    d="M12 0C15.315 0 18 2.685 18 6C18 9.315 15.315 12 12 12C8.685 12 6 9.315 6 6C6 2.685 8.685 0 12 0ZM12 24C12 24 24 24 24 21C24 17.4 18.15 13.5 12 13.5C5.85 13.5 0 17.4 0 21C0 24 12 24 12 24Z"
                                    fill="black" />
                            </svg> --}}

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        </div>


                        <div class="bi-login-input-wrapper mt-4">
                            {{-- <input type="password" placeholder="Password" id="password" name="password" /> --}}
                           <div class="col">

                            <label for="">Password: </label>
                            <input type="password" class="@error('password') is-invalid @enderror"
                                id="exampleInputPassword1" placeholder="ENTER YOUR PASSWORD" name="password" required
                                autocomplete="current-password" />

                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.1"
                                    d="M24 8.25005C24 12.8064 20.3063 16.5 15.75 16.5C15.2241 16.5 14.7098 16.4502 14.2112 16.3561L13.0857 17.6224C12.9801 17.7412 12.8506 17.8362 12.7057 17.9013C12.5608 17.9664 12.4037 18 12.2448 18H10.5V19.875C10.5 20.4963 9.99633 21 9.375 21H7.5V22.875C7.5 23.4963 6.99633 24 6.375 24H1.125C0.503672 24 0 23.4963 0 22.875V19.216C0 18.9176 0.118547 18.6315 0.329484 18.4205L7.91395 10.836C7.64569 10.0225 7.5 9.15333 7.5 8.25C7.5 3.69366 11.1936 4.68755e-05 15.75 4.47777e-10C20.3197 -4.68746e-05 24 3.6802 24 8.25005ZM15.75 6C15.75 7.24266 16.7573 8.25 18 8.25C19.2427 8.25 20.25 7.24266 20.25 6C20.25 4.75734 19.2427 3.75 18 3.75C16.7573 3.75 15.75 4.75734 15.75 6Z"
                                    fill="black" />
                            </svg> --}}
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                           </div>
                        </div>
                        <div class="bi-login-input-wrapper save">
                            <input type="checkbox" name="save" id="save" />
                            <label for="save"><span>Remember Me</span><a href="{{ route('password.request') }}"> Forget
                                    Your Password?</a>
                            </label>
                        </div>
                        <div class="bi-login-input-wrapper ">
                            <button type="submit" name="submit" id="submit">Log In</button>
                        </div>
                    </form>
                </div>
                <div class="redirect-container">
                    <p>Don't have an account yet?</p>
                    <a href="{{ route('register') }}">Register Here</a>
                </div>
            </div>
            <div class="login-container-right">
                <img class="" src="{{ asset('frontend/images/cuate.png') }}" alt="" srcset="">
            </div>
        </section>
    </main>
    <!-- Main Area Ends -->
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
