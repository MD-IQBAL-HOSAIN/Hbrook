@extends('frontend.app')

@section('title')
    Community
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive2.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/nice-select.min.css') }}" />
    <!-- Drophify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <!-- Include Tagify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.27.0/tagify.css"
        integrity="sha512-fg4mbaXioGkhZsVQlBUD7MmEA5zQY4I3aiawILa2nHXUk0e5gBZjlwGoJCeRIAVHqYOdaddDQA7HUXwqx3vVAA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .single-image {
            width: 835px;
        }
        #google_translate_element .goog-te-combo {
            display: none;
        }
    </style>

    <?php
    use App\Models\CommunityPost;
    $posts = CommunityPost::with('user')->latest()->take(10)->get();

    ?>
@endpush
@section('content')
    <main class="container bi-community-page">


        <!-- recent and trending post starts -->
        <div class="bi-recent-post-container">
            {{-- <h1>{{ $single_posts->title }}</h1> --}}
            <div class="bi-trending-and-recent-container">
                <!-- recent container starts -->
                <div class="bi-recent-posts-container">
                    <div class="bi-recent-post">
                        <div class="bi-user-info">
                            <div class="user-image">
                                <img src="{{ asset(Auth::user()->image ?? 'frontend/images/bi-recent-post-user-avatar.png') }}"
                                    alt="" srcset="" />
                            </div>
                            <a href="#">
                                <span class="user-name">{{ $single_posts->user->name ?? 'jon doe' }}</span>
                                <span
                                    class="time">{{ $single_posts->created_at->diffForHumans() ?? '12 hours ago' }}</span>

                            </a>
                        </div>
                        <h3>
                            {{ !empty($single_posts->title) ? $single_posts->title : '' }}
                        </h3>


                        @if (!empty($single_posts->image))
                            <div class="dbi-recent-post-cover">
                                <img class="single-image" src="{{ asset('storage/' . $single_posts->image) }}"
                                    alt="{{ $single_posts->title }}">
                            </div>
                        @else
                            <div class="dbi-recent-post-cover" style="display: none;"></div>
                        @endif

                        <div class="bi-post-tags">
                            @if (!empty($single_posts->tag) && is_array($single_posts->tag))
                                @foreach ($single_posts->tag as $tag)
                                    <a href="#">{{ $tag }}</a>
                                @endforeach
                            @else
                                <p>No tags available</p>
                            @endif
                        </div>
                        <!-- recent post description -->
                        <div class="dbi-recent-post-description">
                            <span>
                                {!! !empty($single_posts->description) ? $single_posts->description : '' !!}

                            </span>

                        </div>

                        <!-- recent post cover if view clicked -->

                        <div class="post-view-like-comments">
                            <span>{{ $single_posts->view_count }} Views</span>

                        </div>

                        {{-- <livewire:comments :model="$posts" /> --}}
                    </div>


                </div>



                <!-- recent container ends -->
                <!-- trending container starts -->
                <div class="bi-trending-post-container">
                    <h1>Recent Post</h1>
                    <ul class="bi-trending-posts-container">
                        @foreach ($posts as $tranding)
                            <li>
                                <a href="#">
                                    <span>{{ !empty($tranding->title) ? $tranding->title : 'Lorem Ipsum is simply dummy text of the printing' }}</span>
                                    <span>{{ !empty($tranding->created_at) ? $tranding->created_at->format('Y-m-d') : '2024-02-02' }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- trending container ends -->
            </div>
        </div>
        <!-- recent and trending post starts -->
    </main>
    <!-- send notes section starts -->

    <!-- send notes section ends -->
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('frontend/js/dropify.min.js') }}"></script>
    <!-- Drophify JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.27.0/tagify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        var input = document.querySelector('input[name=tag]');
        new Tagify(input);
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
        $(document).ready(function() {

            $('.dropify').dropify();
        });
    </script>

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
