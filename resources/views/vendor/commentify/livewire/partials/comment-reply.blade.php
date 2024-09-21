@if(config('commentify.comment_nesting') === true)
    @auth
        @if($comment->isParent())
            <button type="button" wire:click="$toggle('isReplying')" class="replay--button">
                {{$comment->children->count()}} Reply
            </button>
            <div wire:loading wire:target="$toggle('isReplying')" >
                @include('commentify::livewire.partials.loader')
            </div>
        @endif
    @endauth
    @if($comment->children->count())
        <button type="button" wire:click="$toggle('hasReplies')" class="hide--button">
            @if(!$hasReplies)
                View all Replies
            @else
                Hide Replies
            @endif
        </button>
        <div wire:loading wire:target="$toggle('hasReplies')">
            @include('commentify::livewire.partials.loader')
        </div>
    @endif
@endif
