<div>
    @if ($isEditing)
        @include('commentify::livewire.partials.comment-form', [
            'method' => 'editComment',
            'state' => 'editState',
            'inputId' => 'reply-comment',
            'inputLabel' => 'Your Reply',
            'button' => 'Edit Comment',
        ])
    @else
        <article class="text--article">
            <footer style="background: #fff8f3">
                <div style="background: #fff8f3 !important; display: flex; align-items: center; gap: 20px;">
                    <p class="">
                        <img dark:bg-gray-900 py-8 lg:py-16 class="" src="{{ $comment->user->avatar() }}"
                            alt="{{ $comment->user->name }}">
                    <p style="font-weight: 500;font-size: 20px;letter-spacing: 1px;">
                        {{ Str::ucfirst($comment->user->name) }}
                    </p>
                    <div style="display: flex; text-transform: capitalize; font-size: 12px;color: #6A6A6A;">
                         &nbsp;-&nbsp;
                        <time pubdate datetime="{{ $comment->presenter()->relativeCreatedAt() }}"
                            title="{{ $comment->presenter()->relativeCreatedAt() }}">
                            {{ $comment->presenter()->relativeCreatedAt() }}
                        </time>
                    </div>
                    </p>

                    <p class="text-sm text-gray-600 dark:text-gray-400">

                    </p>
                </div>
                {{-- <div class="relative">
                    <button wire:click="$toggle('showOptions')"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400  rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button" style="padding: 0px !important;">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                            </path>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    @if ($showOptions)
                        <div class="absolute z-10 top-full right-0 mt-1 w-36  rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                            style="background: #fff8f3 !important;">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                @can('update', $comment)
                                    <li>
                                        <button wire:click="$toggle('isEditing')" type="button"
                                            class="block w-full text-left py-2 px-4 hover:bg-gray-100
                                           dark:hover:bg-gray-600
                                           dark:hover:text-white">Edit
                                        </button>
                                    </li>
                                @endcan
                                @can('destroy', $comment)
                                    <li>

                                        <button x-on:click="confirmCommentDeletion" x-data="{
                                            confirmCommentDeletion() {
                                                if (window.confirm('You sure to delete this comment?')) {
                                                    @this.call('deleteComment')
                                                }
                                            }
                                        }"
                                            class="block w-full text-left py-2 px-4 hover:bg-gray-100
                                            dark:hover:bg-gray-600 dark:hover:text-white">
                                            Delete
                                        </button>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    @endif
                </div> --}}
            </footer>
            <div class="comment--user">
                <p style="background: #fff8f3 !important;">
                    {!! $comment->presenter()->replaceUserMentions($comment->presenter()->markdownBody()) !!}
                </p>
            </div>

            <div class="comment--rec">
                {{-- <livewire:like :$comment :key="$comment->id" /> --}}
                @include('commentify::livewire.partials.comment-reply')
            </div>

        </article>
    @endif

    @if ($isReplying)
        @include('commentify::livewire.partials.comment-form', [
            'method' => 'postReply',
            'state' => 'replyState',
            'inputId' => 'reply-comment',
            'inputLabel' => 'Your Reply',
            'button' => 'Post Reply',
        ])
    @endif

    @if ($hasReplies)
        <article style="display: flex; justify-content:center;">
            @foreach ($comment->children as $child)
                <livewire:comment :comment="$child" :key="$child->id" />
            @endforeach
        </article>
    @endif

    <script>
        function detectAtSymbol() {
            const textarea = document.getElementById('reply-comment');
            if (!textarea) {
                return;
            }

            const cursorPosition = textarea.selectionStart;
            const textBeforeCursor = textarea.value.substring(0, cursorPosition);
            const atSymbolPosition = textBeforeCursor.lastIndexOf('@');

            if (atSymbolPosition !== -1) {
                const searchTerm = textBeforeCursor.substring(atSymbolPosition + 1);
                if (searchTerm.trim().length > 0) {
                    @this.dispatch('getUsers', {
                        searchTerm: searchTerm
                    });
                }
            }
        }
    </script>
</div>
