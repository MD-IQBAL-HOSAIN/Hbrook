<section class="comments--section--body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="comments--count">
                    <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Add Comment </h2>
                </div>

                @include('commentify::livewire.partials.comment-form', [
                    'method' => 'postComment',
                    'state' => 'newCommentState',
                    'inputId' => 'comment',
                    'inputLabel' => 'Your comment',
                    'button' => 'Add Comment',
                ])

                @if ($comments->count())
                    @foreach ($comments as $comment)
                        <livewire:comment :$comment :key="$comment->id" />
                    @endforeach
                    {{ $comments->links() }}

                @endif
            </div>
        </div>
    </div>
</section>
