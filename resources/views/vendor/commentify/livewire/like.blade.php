<span class="like--button">
    <button wire:click="like"class="{{ $comment->isLiked() ? 'color:blue;' : 'color:blue;' }}">
        <i class="fa-solid fa-thumbs-up"></i>
        <span>{{ abs((int) $count) }}</span>
        <span>likes</span>
    </button>
</span>
