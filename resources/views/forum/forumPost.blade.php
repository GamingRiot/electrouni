@extends('layout.home')
@section('title')
    Forums
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">{{ $forumposts->forumtopics->title }}</div>
                        <form class="w-search">
                            <div class="form-group with-button">
                                <input class="form-control" type="text" placeholder="Search the forums...">
                                <button>
                                    <svg class="olymp-magnifying-glass-icon">
                                        <use xlink:href="#olymp-magnifying-glass-icon"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 " style="margin:0 auto;">
        <div class="ui-block responsive-flex">
            <div class="ui-block-title">
                <svg class="icon c-yellow" width="14" height="14">
                    <use xlink:href="#olymp-star-full"></use>
                </svg>
                {{-- <div class="h5 title">{{ strtoupper($forum->title) }}</div>
                        <p class="text">{{ $forum->forumtopics->description }}</p> --}}
                <div class="content">
                    <div class="h5 title">{{ strtoupper($forumposts->title) }}</div>
                    <p class="text">{{ $forumposts->description }}</p>
                </div>
            </div>
            <ul class="comments-list">
                @include('errors')
                <li class="comment-item">
                    <form class="comment-form inline-items" method="post">
                        @include('errors')
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @csrf
                        <div class="post__author author vcard inline-items">
                            {{-- <img loading="lazy" src="/{{ auth()->user()->about->profile_photo }}" width="36"
                                        height="36" alt="author"> --}}
                            @if (auth()->user()->about->profile_photo === null)
                                <img style="width:37px;" src="{{ asset('assets/img/user.jpg') }}" alt="author">
                            @else
                                <img style="width:37px;" src="/{{ auth()->user()->about->profile_photo }}" alt="author">
                            @endif
                            <div class="form-group with-icon-right ">
                                <textarea class="form-control" name="data" id="data"
                                    placeholder="Enter your Reply"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-md-2 btn-primary" type="submit">Post Comment</button>
                    </form>
                </li>
                <table class="open-topic-table">
                    <thead>
                        <tr>
                            <th class="author">
                                Author
                            </th>
                            <th class="posts">
                                Post
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($forumposts->forumcomments->reverse() as $comment)
                            <tr>
                                <td class="topic-date" colspan="2">
                                    {{ $comment->updated_at->diffForHumans() }}
                                </td>
                            </tr>
                            <tr>
                                <td class="author">

                                    <div class="author-thumb">
                                        @if ($comment->user->about->profile_photo === null)
                                            <img width="36" height="36" src="{{ asset('assets/img/user.jpg') }}"
                                                alt="author">
                                        @else
                                            <img width="36" height="36" src="/{{ $comment->user->about->profile_photo }}"
                                                alt="author">
                                        @endif
                                    </div>
                                    <div class="author-content">
                                        <a href="02-ProfilePage.html"
                                            class="h6 author-name">{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</a>

                                    </div>

                                </td>
                                <td class="posts">
                                    <p style="color:black;">{{ $comment->data }}
                                    </p>

                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
        </div>
    @endsection
