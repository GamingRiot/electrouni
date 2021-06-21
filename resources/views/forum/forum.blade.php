@extends('layout.home')
@section('title')
    Forum
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

                        {{-- <div class="form-group col col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12">
                                <button type="submit" class="btn btn-purple btn-lg full-width">Create
                                    Forum</button>
                            </div> --}}
                        <div class="form-group col col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <a href="/forum/create"><button class="btn btn-purple btn-lg full-width">
                                    Create New Topic
                                </button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="ui-block">

            <table class="forums-table">
                <thead>
                    <tr>
                        <th class="forum">
                            Forum
                        </th>
                        <th class="topics">
                            Topics
                        </th>
                        <th class="posts">
                            Posts
                        </th>
                        <th class="freshness">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($forums as $forum)
                        <tr>
                            <td class="forum">
                                <div class="forum-item">
                                    <img loading="lazy" src="{{ asset('assets/img/forum1.png') }}" alt="forum" width="46"
                                        height="42">
                                    <div class="content">
                                        <a href="/forum/{{ $forum->slug }}" class="h6 title">{{ $forum->title }}</a>
                                        <p class="text">{{ $forum->description }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">
                                <a href="#" class="h6 count">3</a>
                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">10</a>
                            </td>
                            <td class="freshness">
                                {{-- <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img loading="lazy" src="{{ asset('assets/img/avatar10-sm.jpg') }}" alt="author"
                                            width="36" height="36">
                                    </div>
                                    <a href="#" class="h6 title">Elaine Dreyfuss</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">13 hours, 58 minutes
                                        ago</time>
                                </div> --}}
                            </td>
                        </tr>
                    @empty
                        <td>
                            <div class="text-none">
                                <h5>There are no Forums yet!</h5>
                            </div>
                        </td>

                    @endforelse


                    {{-- <tr>
                        <td class="forum">
                            <div class="forum-item">
                                <img loading="lazy" src="{{ asset('assets/img/forum6.png') }}" alt="forum" width="38"
                                    height="38">
                                <div class="content">
                                    <a href="#" class="h6 title"></a>
                                    <p class="text">Start topics in your native language and have fun!</p>
                                </div>
                            </div>
                        </td>
                        <td class="topics">
                            <a href="#" class="h6 count">12</a>
                        </td>
                        <td class="posts">
                            <a href="#" class="h6 count">18</a>
                        </td>
                        <td class="freshness">
                            <div class="author-freshness">
                                <div class="author-thumb">
                                    <img loading="lazy" src="{{ asset('assets/img/avatar40-sm.jpg') }}" alt="author"
                                        width="36" height="36">
                                </div>
                                <a href="#" class="h6 title">Mathilda Brinker</a>
                                <time class="entry-date updated" datetime="2017-06-24T18:18">4 months, 12 hours
                                    ago</time>
                            </div>
                        </td>
                    </tr> 
                    
                    <tr>
                        <td class="forum">
                            <div class="forum-item">
                                <img loading="lazy" src="{{ asset('assets/img/forum2.png') }}" alt="forum" width="40"
                                    height="34">
                                <div class="content">
                                    <a href="#" class="h6 title">Video Tutorials Suggestion</a>
                                    <p class="text">All related to Video tutorials about various courses</p>
                                </div>
                            </div>
                        </td>
                        <td class="topics">
                            <a href="#" class="h6 count">14</a>
                        </td>
                        <td class="posts">
                            <a href="#" class="h6 count">68</a>
                        </td>
                        <td class="freshness">
                            <div class="author-freshness">
                                <div class="author-thumb">
                                    <img loading="lazy" src="{{ asset('assets/img/avatar51-sm.jpg') }}" alt="author"
                                        width="28" height="28">
                                </div>
                                <a href="#" class="h6 title">Nicholas Grissom</a>
                                <time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 7 minutes
                                    ago</time>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="forum">
                            <div class="forum-item">
                                <img loading="lazy" src="{{ asset('assets/img/forum3.png') }}" alt="forum" width="38"
                                    height="48">
                                <div class="content">
                                    <a href="#" class="h6 title">Placement Related Discussion</a>
                                    <p class="text">All about Plaacement tips and tricks</p>

                                </div>
                            </div>
                        </td>
                        <td class="topics">
                            <a href="#" class="h6 count">58</a>
                        </td>
                        <td class="posts">
                            <a href="#" class="h6 count">107</a>
                        </td>
                        <td class="freshness">
                            <div class="author-freshness">
                                <div class="author-thumb">
                                    <img loading="lazy" src="{{ asset('assets/img/avatar48-sm.jpg') }}" alt="author"
                                        width="28" height="28">
                                </div>
                                <a href="#" class="h6 title">Marina Valentine</a>
                                <time class="entry-date updated" datetime="2017-06-24T18:18">42 minutes ago</time>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="forum">
                            <div class="forum-item">
                                <img loading="lazy" src="{{ asset('assets/img/forum4.png') }}" alt="forum" width="34"
                                    height="38">
                                <div class="content">
                                    <a href="#" class="h6 title">Project Ideas</a>
                                    <p class="text">Discuss About Latest and unique project ideas</p>
                                </div>
                            </div>
                        </td>
                        <td class="topics">
                            <a href="#" class="h6 count">32</a>
                        </td>
                        <td class="posts">
                            <a href="#" class="h6 count">49</a>
                        </td>
                        <td class="freshness">
                            <div class="author-freshness">
                                <div class="author-thumb">
                                    <img loading="lazy" src="{{ asset('assets/img/avatar39-sm.jpg') }}" alt="author"
                                        width="36" height="36">
                                </div>
                                <a href="#" class="h6 title">Chris Greyson</a>
                                <time class="entry-date updated" datetime="2017-06-24T18:18">1 hour, 20 minutes
                                    ago</time>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="forum">
                            <div class="forum-item">
                                <img loading="lazy" src="{{ asset('assets/img/forum5.png') }}" alt="forum" width="40"
                                    height="40">
                                <div class="content">
                                    <a href="#" class="h6 title">Last year Papers,Notes and Files</a>
                                    <p class="text">Ask others for last year papers, notes and every available resource</p>
                                </div>
                            </div>
                        </td>
                        <td class="topics">
                            <a href="#" class="h6 count">60</a>
                        </td>
                        <td class="posts">
                            <a href="#" class="h6 count">129</a>
                        </td>
                        <td class="freshness">
                            <div class="author-freshness">
                                <div class="author-thumb">
                                    <img loading="lazy" src="{{ asset('assets/img/avatar52-sm.jpg') }}" alt="author"
                                        width="28" height="28">
                                </div>
                                <a href="#" class="h6 title">Green Goo Rock</a>
                                <time class="entry-date updated" datetime="2017-06-24T18:18">5 minutes ago</time>
                            </div>
                        </td>
                    </tr> --}}

                </tbody>
            </table>

        </div>
    </div>
@endsection
@section('sidebar.right')
<div class="col col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Featured Topics</h6>
        </div>
        <div class="ui-block-content">

            <ul class="widget w-featured-topics">
                <li>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-full') }}"></use>
                    </svg>
                    <div class="content">
                        <a href="#" class="h6 title">The new Goddess of War trailer was launched at E3!</a>
                        <time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 16 minutes
                            ago</time>
                    </div>
                </li>
                <li>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-full') }}">
                        </use>
                    </svg>
                    <div class="content">
                        <a href="#" class="h6 title">This year’s ComixCon will have the best presentations</a>
                        <time class="entry-date updated" datetime="2017-06-24T18:18">14 hours, 36 minutes
                            ago</time>
                    </div>
                </li>
                <li>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-full') }}"></use>
                    </svg>
                    <div class="content">
                        <a href="#" class="h6 title">Here are the behind-the-scenes photos of “Vilords”</a>
                        <time class="entry-date updated" datetime="2017-06-24T18:18">9 hours, 8 minutes
                            ago</time>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Recent Topics</h6>
        </div>
        <div class="ui-block-content">

            <ul class="widget w-featured-topics">
                <li>
                    <div class="content">
                        <a href="#" class="h6 title">Summer is Coming! Picnic in the east boulevard park</a>
                        <time class="entry-date updated" datetime="2017-06-24T18:18">26 minutes ago</time>
                        <div class="forums">The Community</div>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <a href="#" class="h6 title">Kung Fighters released a new video, check it out here!</a>
                        <time class="entry-date updated" datetime="2017-06-24T18:18">44 minutes ago</time>
                        <div class="forums">The Boombox</div>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <a href="#" class="h6 title">What’s your favourite season?</a>
                        <time class="entry-date updated" datetime="2017-06-24T18:18">59 minutes ago</time>
                        <div class="forums">The Community</div>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <a href="#" class="h6 title">Who had the best presentation at this year’s E3? Rate
                            them!</a>
                        <time class="entry-date updated" datetime="2017-06-24T18:18">1 hour, 3 minutes
                            ago</time>
                        <div class="forums">Arcade Planet</div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
@endsection
