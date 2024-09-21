@extends('backend.app')

@section('title', 'Dashboard')

@push('style')
    <style>
        .drop-custom {
            border: 1px solid;
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
            padding: 10px;
            border-color: #DEE2E6;
            background: white;
            color: #000;
        }

    </style>
@endpush
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Social Media Setting</h4>
                        <p class="card-description">Setup your Social Media, please provide your<code>provide your valid
                                data</code>.</p>
                        <div class="mt-2">
                            <form action="{{ route('socialmedia.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3" style="display: flex;justify-content: end;">
                                    <button class="btn btn-outline-secondary" type="button" onclick="addSocialField()"
                                        style="font-weight: 900">Add</button>
                                </div>
                                <div id="social_media_container">

                                    @foreach ($social_link as $index => $link)
                                        <div class="social_media input-group mb-3 dropdown">
                                            <input type="hidden" name="social_media_id[]" value="{{ $link->id }}">
                                            <select class="dropdown-toggle drop-custom" name="social_media[]"
                                                value="@isset($social_link){{ $link->social_media }}@endisset">
                                                <option class="dropdown-item">Select Social</option>
                                                <option class="dropdown-item" value="facebook"
                                                    {{ $link->social_media == 'facebook' ? 'selected' : '' }}>Facebook
                                                </option>
                                                <option class="dropdown-item" value="youtube"
                                                    {{ $link->social_media == 'youtube' ? 'selected' : '' }}>YouTube
                                                </option>
                                                <option class="dropdown-item" value="spotify"
                                                    {{ $link->social_media == 'spotify' ? 'selected' : '' }}>Spotify
                                                </option>
                                                <option class="dropdown-item" value="apple"
                                                    {{ $link->social_media == 'apple' ? 'selected' : '' }}>Apple
                                                </option>
                                            </select>
                                            <input type="url"
                                                class="form-control" aria-label="Text input with dropdown button"
                                                name="profile_link[]" value="@isset($social_link){{ $link->profile_link }}@endisset">
                                            <button class="btn btn-outline-secondary removeSocialBtn" type="button"
                                                onclick="removeSocialField(this)" style="font-weight: 900"
                                                data-id="{{ $link->id }}">Remove</button>
                                        </div>
                                    @endforeach
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
    <script>
        var socialFieldsCount = $('#social_media_container .social_media').length;

        function addSocialField() {
            var socialFieldsContainer = document.getElementById("social_media_container");

            if (socialFieldsCount < 6) {
                var newSocialField = document.createElement("div");
                newSocialField.className = "social_media input-group mb-3";
                newSocialField.innerHTML =
                    `
        <select class="dropdown-toggle drop-custom" name="social_media[]">
            <option class="dropdown-item">Select Social</option>
            <option class="dropdown-item" value="facebook">Facebook</option>
            <option class="dropdown-item" value="youtube">YouTube</option>
            <option class="dropdown-item" value="spotify">Spotify</option>
            <option class="dropdown-item" value="apple">Apple</option>
        </select>
        <input type="url" class="form-control" aria-label="Text input with dropdown button" name="profile_link[]">
        <button class="btn btn-outline-secondary" type="button" onclick="removeSocialField(this)" style="font-weight: 900">Remove</button>`;

                socialFieldsContainer.appendChild(newSocialField);
                socialFieldsCount++;
                document.querySelectorAll('select[name="social_media[]"]').forEach(selectElement => {
                    selectElement.removeEventListener('change',
                        checkForDuplicateSocialMedia);
                    selectElement.addEventListener('change', checkForDuplicateSocialMedia);
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "You can only add Six social links fields!",
                });
            }
        }


        function removeSocialField(button) {
            var socialField = button.parentElement;
            socialField.remove();
            socialFieldsCount--;
            checkForDuplicateSocialMedia();
        }

        function checkForDuplicateSocialMedia() {
            var allSelections = document.querySelectorAll('select[name="social_media[]"]');
            var allValues = Array.from(allSelections).map(select => select.value);
            var hasDuplicate = allValues.some((value, index) => allValues.indexOf(value) !== index && value !==
                "Select Social");

            if (hasDuplicate) {
                swal.fire("You cannot add the same social media platform more than once.");
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "You cannot add the same social media platform more than once.",
                });
                allSelections.forEach(selectElement => {
                    if (allValues.filter(value => value === selectElement.value).length > 1) {
                        selectElement.value = "Select Social";
                    }
                });
            }
        }

        window.removeSocialField = function(button) {
            var socialLinkId = $(button).data('id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'DELETE',
                url: '{{ route('socialmedia.delete', '') }}/' + socialLinkId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $(button).closest('.social_media').remove();
                    socialFieldsCount--;
                    if (response.success === true) {

                        toastr.success(response.message);
                    } else if (response.errors) {
                        toastr.error(response.errors[0]);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        };;
    </script>
@endpush
