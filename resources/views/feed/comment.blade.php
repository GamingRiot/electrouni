@extends('layout.home')
@section('title')
    Electrouni
@endsection

@section('content')
    <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12" style="margin: 0 auto;">
        <div id="newsfeed-items-grid">
            <div class="ui-block">
                <article class="hentry post video">
                    <div class="post__author author vcard inline-items">
                        {{-- /{{ $post->user->profile }} --}}
                        @if ($post->user->about->profile_photo === null)
                            <img width="36" height="36" src="{{ asset('assets/img/user.jpg') }}" alt="author">
                        @else
                            <img width="36" height="36" src="/{{ $post->user->about->profile_photo }}" alt="author">
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
                            <span
                                class="like-counter like-counter-{{ $post->id }}">{{ $post->likes->count() }}</span>
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
                            <a href="#" class="post-add-icon inline-items">
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
                <ul class="comments-list">
                    @include('errors')
                    <li class="comment-item">
                        <form class="comment-form inline-items" method="post">
                            @csrf
                            <div class="post__author author vcard inline-items">
                                {{-- <img loading="lazy" src="/{{ auth()->user()->about->profile_photo }}" width="36"
                                    height="36" alt="author"> --}}
                                @if (auth()->user()->about->profile_photo === null)
                                    <img style="width:37px;" src="{{ asset('assets/img/user.jpg') }}" alt="author">
                                @else
                                    <img style="width:37px;" src="/{{ auth()->user()->about->profile_photo }}"
                                        alt="author">
                                @endif
                                <div class="form-group with-icon-right ">
                                    <textarea class="form-control" name="data" id="data" placeholder=""></textarea>
                                </div>
                            </div>
                            <button class="btn btn-md-2 btn-primary" type="submit">Post Comment</button>
                        </form>
                    </li>
                    <h5 class="px-4 mt-2" style="text-align: center;">Comments</h5>
                    @foreach ($post->comments->reverse() as $comment)

                        <li class="comment-item">
                            <div class="post__author author vcard inline-items">
                                @if ($comment->user_id == auth()->user()->id)
                                    <div class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}">
                                            </use>
                                        </svg>
                                        <ul class="more-dropdown">
                                            <li>
                                                <a
                                                    href="{{ route('deleteCom', ['post' => $post->id, 'comment' => $comment->id]) }}">Delete
                                                    Comment</a>
                                            </li>

                                        </ul>
                                    </div>
                                @endif
                                {{-- <img loading="lazy" src="/{{ $comment->user->about->profile_photo }}" width="36"
                                    height="36" alt="author"> --}}
                                @if ($comment->user->about->profile_photo === null)
                                    <img width="36" height="36" src="{{ asset('assets/img/user.jpg') }}" alt="author">
                                @else
                                    <img width="36" height="36" src="/{{ $comment->user->about->profile_photo }}"
                                        alt="author">
                                @endif
                                <div class="author-date">
                                    <a class="h6 post__author-name fn"
                                        href="02-ProfilePage.html">{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2004-07-24T18:18">
                                            {{ $comment->created_at->diffForHumans() }}
                                        </time>
                                    </div>
                                </div>

                            </div>
                            <p>{{ $comment->data }}
                            </p>
                            {{-- <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon">
                                <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') }}">
                                </use>
                            </svg>
                            <span>3</span>
                        </a> --}}

                        </li>
                    @endforeach


                </ul>

            </div>
        </div>
    </main>
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

@endsection
