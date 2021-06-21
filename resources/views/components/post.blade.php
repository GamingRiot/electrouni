<div id="newsfeed-items-grid">
    <div class="ui-block">
        <article class="hentry post video">
            <div class="post__author author vcard inline-items">
                {{-- /{{ $post->user->profile }} --}}
                {{-- <img src="/{{ $post->user->about->profile_photo }}" alt=""> --}}
                @if ($post->user->about->profile_photo === null)
                    <img style="width:38px;" src="{{ asset('assets/img/user.jpg') }}" alt="author">
                @else
                    <img style="width:38px;" src="/{{ $post->user->about->profile_photo }}" alt="author">
                @endif

                <div class="author-date">
                    <a class="h6 post__author-name fn"
                        href="#">{{ $post->user->first_name . ' ' . $post->user->last_name }}</a> shared a <a
                        href="#">post</a>
                    <div class="post__date">
                        <time class="published" datetime="2004-07-24T18:18">
                            {{ $post->updated_at->diffForHumans() }}
                        </time>
                    </div>
                </div>
                @if ($post->user_id == auth()->user()->id)
                    <div class="more"><svg class="olymp-three-dots-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}">
                            </use>
                        </svg>
                        <ul class="more-dropdown">
                            <li>
                                <a href="{{ route('edit', ['post' => $post->id]) }}">Edit Post</a>
                            </li>
                            <li>
                                <a href="{{ route('delete', ['post' => $post->id]) }}">Delete Post</a>
                            </li>

                        </ul>
                    </div>
                @endif
            </div>

            <p style="color:black;">{{ $post->body }}</p>
            @if ($post->picture)
                <div class="post-thumbnail">
                    <div class="post-thumb">
                        <img loading="lazy" src="/{{ $post->picture }}" alt="photo" width="518" height="762">
                    </div>
                </div>
            @endif
            <div class="post-additional-info inline-items">
                <a href="{{ route('like', ['post' => $post->id]) }}"
                    class="post-add-icon inline-items button-like button-like-{{ $post->id }}">
                    <svg class="olymp-heart-icon">
                        <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') }}">
                        </use>
                    </svg>
                    <span class="like-counter like-counter-{{ $post->id }}">{{ $post->likes->count() }}</span>
                </a>



                @if ($post->likes->count() > 3)
                    <div class=" names-people-likes">
                        @php $ctr = 0; @endphp
                        @foreach ($post->likes as $like)
                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/friend-harmonic9.jpg') }}" alt=" ">
                                    </a>
                                </li>
                            </ul>
                            {{ $like->user->name }},
                            @php
                                $ctr++;
                                if ($ctr >= 2) {
                                    break;
                                }
                            @endphp
                        @endforeach and {{ $post->likes->count() - 2 }} other liked the
                        post.
                    </div>
                @endif

                <div class="comments-shared">
                    <a href="{{ route('comment', ['post' => $post->id]) }}" class="post-add-icon inline-items">
                        <svg class="olymp-speech-balloon-icon">
                            <use
                                xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-speech-balloo') }}n-icon">
                            </use>
                        </svg>
                        <span>
                            {{ $post->comments->count() }}
                        </span>
                    </a>
                </div>
            </div>
        </article>
    </div>
</div>



@push('scripts')
    <script>
        $(document).ready(function() {
            $('.button-like-{{ $post->id }}').on('click', (event) => {
                event.preventDefault();
                const likeURL = '{{ route('like', ['post' => $post->id]) }}';
                $.get(likeURL, response => {
                    $('.like-counter-{{ $post->id }}').html(response);
                });
            })
        });

    </script>

@endpush
