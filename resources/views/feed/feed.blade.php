@extends('layout.home')
@section('title')
    Electrouni
@endsection
@section('content')

    <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

        <div class="ui-block">

            <!-- News Feed Form  -->

            <div class="news-feed-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab"
                            aria-expanded="true">

                            <svg class="olymp-status-icon">
                                <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-status-icon') }}">
                                </use>
                            </svg>

                            <span>Status</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                {{-- posts --}}
                <div class="tab-content">
                    <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
                        <div class="px-3">
                            @include('errors')
                            @if (session()->has('success'))
                                <div class="alert alert-success mt-4">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="author-thumb">
                                {{-- <img src="/{{ auth()->user()->about->profile_photo }}" alt="author" style="width:37px;"> --}}
                                @if (auth()->user()->about->profile_photo === null)
                                    <img style="width:37px;" src="{{ asset('assets/img/user.jpg') }}" alt="author">
                                @else
                                    <img style="width:37px;" src="/{{ auth()->user()->about->profile_photo }}"
                                        alt="author">
                                @endif

                            </div>
                            <div class="form-group with-icon label-floating is-empty ">
                                <label class="control-label" for="body">Share what you are thinking here...</label>
                                <textarea class="form-control" name="body" id="body" type="textarea"></textarea>

                                <div class="px-3 mt-4">
                                    <img id="output" style="width:400px;border-radius:5px;" />
                                </div>
                            </div>
                            <div class="add-options-message">
                                <div class="form-group">

                                    {{-- <label for="picture">Upload Pictures </label>
                                    <input type="file" name="picture" id="picture" class="form-control" /> --}}
                                    <label for="picture" style="cursor: pointer;">
                                        <input type="file" name="picture" accept="image/*" onchange="loadFile(event)"
                                            id="picture" style="display:none;" /><svg class="olymp-camera-icon"
                                            data-toggle="modal" data-target="#update-header-photo">
                                            <use
                                                xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-camera-icon') }}">
                                            </use>
                                        </svg>
                                    </label>
                                    <button type="submit" class="btn btn-primary btn-md-2">Post Status</button>
                                </div>
                                <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };

                                </script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ... end News Feed Form  -->
        </div>
        @if (session()->has('update'))
            <div class="alert alert-success">
                {{ session()->get('update') }}
            </div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif
        @forelse ($posts as $post)
            <x-post :post="$post" />
        @empty
            <div class="text-none">
                <h5>There are no recent posts!</h5>
            </div>
        @endforelse




    </main>


@endsection

@section('sidebar.left')

<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
    {{-- <div class="ui-block">

        <!-- W-Weather -->

        <div class="widget w-wethear">
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use
                        xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}">
                    </use>
                </svg></a>

            <div class="wethear-now inline-items">
                <div class="temperature-sensor">64°</div>
                <div class="max-min-temperature">
                    <span>58°</span>
                    <span>76°</span>
                </div>

                <svg class="olymp-weather-partly-sunny-icon">
                    <use
                        xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunn') }}y-icon">
                    </use>
                </svg>
            </div>

            <div class="wethear-now-description">
                <div class="climate">Partly Sunny</div>
                <span>Real Feel: <span>67°</span></span>
                <span>Chance of Rain: <span>49%</span></span>
            </div>

            <ul class="weekly-forecast">

                <li>
                    <div class="day">sun</div>
                    <svg class="olymp-weather-sunny-icon">
                        <use
                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-sunn') }}y-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">60°</div>
                </li>

                <li>
                    <div class="day">mon</div>
                    <svg class="olymp-weather-partly-sunny-icon">
                        <use
                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunn') }}y-icon">
                        </use>
                    </svg>
                    <div class="temperature-sensor-day">58°</div>
                </li>

                <li>
                    <div class="day">tue</div>
                    <svg class="olymp-weather-cloudy-icon">
                        <use
                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-cloud') }}y-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">67°</div>
                </li>

                <li>
                    <div class="day">wed</div>
                    <svg class="olymp-weather-rain-icon">
                        <use
                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-rain-icon') }}">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">70°</div>
                </li>

                <li>
                    <div class="day">thu</div>
                    <svg class="olymp-weather-storm-icon">
                        <use
                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-stor') }}m-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">58°</div>
                </li>

                <li>
                    <div class="day">fri</div>
                    <svg class="olymp-weather-snow-icon">
                        <use
                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-snow-icon') }}">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">68°</div>
                </li>

                <li>
                    <div class="day">sat</div>

                    <svg class="olymp-weather-wind-icon-header">
                        <use
                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-weather.svg#olymp-weather-wind-icon-') }}header">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">65°</div>
                </li>

            </ul>

            <div class="date-and-place">
                <h5 class="date">Saturday, March 26th</h5>
                <div class="place">San Francisco, CA</div>
            </div>

        </div>

        <!-- W-Weather -->
    </div> --}}

    {{-- <div class="ui-block">

        <!-- W-Calendar -->

        <div class="w-calendar">
            <div class="calendar">
                <header>
                    <h6 class="month">May</h6>
                </header>
                <table>
                    <thead>
                        <tr>
                            <td>Mon</td>
                            <td>Tue</td>
                            <td>Wed</td>
                            <td>Thu</td>
                            <td>Fri</td>
                            <td>Sat</td>
                            <td>San</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-month="12" data-day="1">1</td>
                            <td data-month="12" data-day="2">
                                2
                            </td>
                            <td data-month="12" data-day="3">3</td>
                            <td data-month="12" data-day="4">4</td>
                            <td data-month="12" data-day="5">5</td>
                            <td data-month="12" data-day="6">6</td>
                            <td data-month="12" data-day="7">7</td>
                        </tr>
                        <tr>
                            <td data-month="12" data-day="8">8</td>
                            <td data-month="12" data-day="9">9</td>
                            <td data-month="12" data-day="10">10</td>
                            <td data-month="12" data-day="11">11</td>
                            <td data-month="12" data-day="12">12</td>
                            <td data-month="12" data-day="13">13</td>
                            <td data-month="12" data-day="14">14</td>
                        </tr>
                        <tr>
                            <td data-month="12" data-day="15">15</td>
                            <td data-month="12" data-day="16">16</td>
                            <td data-month="12" data-day="17">17</td>
                            <td data-month="12" data-day="18">18</td>
                            <td data-month="12" data-day="19">19</td>
                            <td data-month="12" data-day="20">20</td>
                            <td data-month="12" data-day="21">21</td>
                        </tr>
                        <tr>
                            <td data-month="12" data-day="22">22</td>
                            <td data-month="12" data-day="23">23</td>
                            <td data-month="12" data-day="24">24</td>
                            <td data-month="12" data-day="25">25</td>
                            <td data-month="12" data-day="26">26</td>
                            <td data-month="12" data-day="27">27</td>
                            <td data-month="12" data-day="28">28</td>
                        </tr>
                        <tr>
                            <td data-month="12" data-day="29">29</td>
                            <td data-month="12" data-day="30">30</td>
                            <td data-month="12" data-day="31">31</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- ... end W-Calendar -->
    </div> --}}

    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Pages You May Like</h6>
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}">
                    </use>
                </svg></a>
        </div>

        <!-- W-Friend-Pages-Added -->

        <ul class="widget w-friend-pages-added notification-list friend-requests">
            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar41-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">The Marina Bar</a>
                    <span class="chat-message-item">Restaurant / Bar</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                    data-original-title="ADD TO YOUR FAVS">
                    <a href="#">
                        <svg class="olymp-star-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-icon') }}">
                            </use>
                        </svg>
                    </a>
                </span>

            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar42-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Tapronus Rock</a>
                    <span class="chat-message-item">Rock Band</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                    data-original-title="ADD TO YOUR FAVS">
                    <a href="#">
                        <svg class="olymp-star-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-icon') }}">
                            </use>
                        </svg>
                    </a>
                </span>

            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar43-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Pixel Digital Design</a>
                    <span class="chat-message-item">Company</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                    data-original-title="ADD TO YOUR FAVS">
                    <a href="#">
                        <svg class="olymp-star-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-icon') }}">
                            </use>
                        </svg>
                    </a>
                </span>
            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar44-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
                    <span class="chat-message-item">Clothing Store</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                    data-original-title="ADD TO YOUR FAVS">
                    <a href="#">
                        <svg class="olymp-star-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-icon') }}">
                            </use>
                        </svg>
                    </a>
                </span>

            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar45-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Crimson Agency</a>
                    <span class="chat-message-item">Company</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                    data-original-title="ADD TO YOUR FAVS">
                    <a href="#">
                        <svg class="olymp-star-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-icon') }}">
                            </use>
                        </svg>
                    </a>
                </span>
            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar46-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Mannequin Angel</a>
                    <span class="chat-message-item">Clothing Store</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                    data-original-title="ADD TO YOUR FAVS">
                    <a href="#">
                        <svg class="olymp-star-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-star-icon') }}">
                            </use>
                        </svg>
                    </a>
                </span>
            </li>
        </ul>

        <!-- .. end W-Friend-Pages-Added -->
    </div>
</aside>

@endsection

@section('sidebar.right')

<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">

    <div class="ui-block">

        <!-- W-Birthsday-Alert -->
        <a href="/forum">
            <div class="widget w-birthday-alert">

                <div class="content">

                    <div class="h4 title">Forums</div>
                    <h5 style="color:rgb(197, 197, 197)">Discuss various topics with Fellow Students</h5>
                </div>
            </div>
        </a>
        <!-- ... end W-Birthsday-Alert -->
    </div>

    {{-- <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Friend Suggestions</h6>
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use
                        xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}">
                    </use>
                </svg></a>
        </div>



        <!-- W-Action -->

        <ul class="widget w-friend-pages-added notification-list friend-requests">
            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar38-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Francine Smith</a>
                    <span class="chat-message-item">8 Friends in Common</span>
                </div>
                <span class="notification-icon">
                    <a href="#" class="accept-request">
                        <span class="icon-add without-text">
                            <svg class="olymp-happy-face-icon">
                                <use
                                    xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') }}">
                                </use>
                            </svg>
                        </span>
                    </a>
                </span>
            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar39-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Hugh Wilson</a>
                    <span class="chat-message-item">6 Friends in Common</span>
                </div>
                <span class="notification-icon">
                    <a href="#" class="accept-request">
                        <span class="icon-add without-text">
                            <svg class="olymp-happy-face-icon">
                                <use
                                    xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') }}">
                                </use>
                            </svg>
                        </span>
                    </a>
                </span>
            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar40-sm.jpg ') }}" alt=" author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Karen Masters</a>
                    <span class="chat-message-item">6 Friends in Common</span>
                </div>
                <span class="notification-icon">
                    <a href="#" class="accept-request">
                        <span class="icon-add without-text">
                            <svg class="olymp-happy-face-icon">
                                <use
                                    xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') }}">
                                </use>
                            </svg>
                        </span>
                    </a>
                </span>
            </li>

        </ul>

        <!-- ... end W-Action -->
    </div> --}}

    {{-- <div class="ui-block">

        <div class="ui-block-title">
            <h6 class="title">Activity Feed</h6>
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use
                        xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}">
                    </use>
                </svg></a>
        </div>


        <!-- W-Activity-Feed -->

        <ul class="widget w-activity-feed notification-list">
            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar49-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s
                    <a href="#" class="notification-link">photo.</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">2 mins
                            ago</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar9-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a
                        href="#" class="notification-link">status update.</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">5 mins
                            ago</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar50-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to
                    her <a href="#" class="notification-link">gallery album.</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">12 mins
                            ago</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar51-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a
                        href="#" class="notification-link">photo</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">1 hour
                            ago</time></span>
                </div>
            </li>
            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar48-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris
                    Greyson’s <a href="#" class="notification-link">status update</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">1 hour
                            ago</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar52-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#"
                        class="notification-link">status update</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">1 hour
                            ago</time></span>
                </div>
            </li>
            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar10-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Elaine Dreyfuss </a> liked your <a href="#"
                        class="notification-link">blog post</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">2 hours
                            ago</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar10-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Elaine Dreyfuss </a> commented on your <a
                        href="#" class="notification-link">blog post</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">2 hours
                            ago</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="{{ asset('assets/img/avatar53-sm.jpg') }}" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#"
                        class="notification-link">profile picture</a>.
                    <span class="notification-date"><time class="entry-date updated"
                            datetime="2004-07-24T18:18">15 hours
                            ago</time></span>
                </div>
            </li>

        </ul>

        <!-- .. end W-Activity-Feed -->
    </div> --}}




</aside>
@endsection

@section('modals')
<!-- Window-popup Update Header Photo -->




<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo"
    aria-hidden="true">
    <div class="modal-dialog window-popup choose-from-my-photo" role="document">

        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use>
                </svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon">
                                <use
                                    xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') }}">
                                </use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon">
                                <use
                                    xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-albums-icon') }}">
                                </use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="modal-body">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo1.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo2.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo3.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo4.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo5.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo6.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo7.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo8.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{ asset('assets/img/choose-photo9.jpg') }}" alt=" photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{ asset('assets/img/choose-photo10.jpg') }}" alt=" photo">
                                <figcaption>
                                    <a href="#">South America Vacations</a>
                                    <span>Last Added: 2 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{ asset('assets/img/choose-photo11.jpg') }}" alt=" photo">
                                <figcaption>
                                    <a href="#">Photoshoot Summer 2016</a>
                                    <span>Last Added: 5 weeks ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{ asset('assets/img/choose-photo12.jpg') }}" alt=" photo">
                                <figcaption>
                                    <a href="#">Amazing Street Food</a>
                                    <span>Last Added: 6 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{ asset('assets/img/choose-photo13.jpg') }}" alt=" photo">
                                <figcaption>
                                    <a href="#">Graffity & Street Art</a>
                                    <span>Last Added: 16 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{ asset('assets/img/choose-photo14.jpg') }}" alt=" photo">
                                <figcaption>
                                    <a href="#">Amazing Landscapes</a>
                                    <span>Last Added: 13 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{ asset('assets/img/choose-photo15.jpg') }}" alt=" photo">
                                <figcaption>
                                    <a href="#">The Majestic Canyon</a>
                                    <span>Last Added: 57 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ... end Window-popup Choose from my Photo -->
@endsection
