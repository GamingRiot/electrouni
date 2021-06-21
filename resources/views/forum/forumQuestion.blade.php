@extends('layout.home')

@section('title')
    Forum Questions
@endsection
@section('header')
    <div style="height:70px"></div>
    <div class="main-header">
        <div class="content-bg-wrap bg-group"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Welcome to the Electro Forums!</h1>
                        <p>Welcome all to the Electro Forums. Talk to each other and discuss in various forum sections
                            according to your wish.Maintain a friendly environment at the forums and help your fellow mates.
                            Do not spread any false information here.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img loading="lazy" class="img-bottom" src="{{ asset('assets/img/group-bottom.jpg') }}" alt="friends" width="1087"
            height="148">
    </div>

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">Electro Forums</div>
                        <div class="align-right">
                            <a href="/forum/{{ $forum->slug }}/create" class="btn btn-blue btn-md">Create New Topic</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">

                    <table class="forums-table">
                        <thead>
                            <tr>
                                <th class="forum">
                                    Forum
                                </th>
                                <th class="topics">

                                </th>
                                <th class="posts">

                                </th>
                                <th class="freshness">
                                    Freshness
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($questions as $question)
                                <tr>
                                    <td class="forum">
                                        <div class="forum-item">
                                            <img loading="lazy" src="{{ asset('assets/img/forum7.png') }}" alt="forum"
                                                width="36" height="45">
                                            <div class="content">
                                                <a href="/forum/{{ $forum->slug }}/{{ $question->id }}"
                                                    class="h5 title">{{ strtoupper($question->title) }}</a>
                                                <p class="text">{{ $question->description }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="topics">

                                    </td>
                                    <td class="posts">

                                    </td>
                                    <td class="freshness">
                                        <div class="author-freshness">
                                            <div class="author-thumb">

                                                @if ($question->user->about->profile_photo === null)
                                                    <img alt="author" src="{{ asset('assets/img/user.jpg') }}"
                                                        class="avatar" style="width:30px;">
                                                @else
                                                    <img src="/{{ $question->user->about->profile_photo }}" alt="author"
                                                        style="width:30px;">
                                                @endif
                                            </div>
                                            <a href="#" class="h6 title">Mathilda Brinker</a>
                                            <time class="entry-date updated"
                                                datetime="2017-06-24T18:18">{{ $question->updated_at->diffForHumans() }}</time>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td>
                                    <div class="text-none">
                                        <h5>There are no Questions yet! Feel Free To Ask!</h5>
                                    </div>
                                </td>
                            @endforelse


                        </tbody>
                    </table>

                </div>
            @endsection
