<form class="" wire:submit="{{ $method }}">
    @csrf
    <div style="background: #fff8f3 !important; border: none !important; margin-top: 25px;">
        <div class="custom-comment-form">
            {{-- <div class="user--comment--avater">
                <img src="{{asset(auth()->user()->avatar ?? "https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=")}}"
                    alt="user-image">
            </div> --}}
            <textarea id="{{ $inputId }}" rows="6" class=" @error($state . '.body') @enderror"
                placeholder="Add a comment" wire:model.live="{{ $state }}.body" oninput="adjustTextareaHeight(this)">
            </textarea>
            <button wire:loading.attr="disabled" type="submit" class="">
                <div wire:loading wire:target="{{ $method }}">
                    @include('commentify::livewire.partials.loader')
                </div>
                {{ $button }}
            </button>
        </div>

        @if (!empty($users) && $users->count() > 0)
            @include('commentify::livewire.partials.dropdowns.users')
        @endif
        @error($state . '.body')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror
    </div>
</form>
