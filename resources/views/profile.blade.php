@extends('layout.home')

@section('title')
    Electrouni
@endsection





<!-- Top Header-Profile -->

@section('content')
    <div class="container">
        <div class="row">

            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="top-header">
                        <div class="top-header-thumb">

                            @if ($about->cover_photo === null)
                                <img src="{{ asset('assets/img/top-header4.png') }}" alt="electrocover"
                                    style="width:1920px;height:400px;">
                            @else
                                <img src="/{{ $about->cover_photo }}" alt="nature" style="width:1920px;height:400px;">
                            @endif


                        </div>
                        <div class="profile-section">
                            <div class="row">
                                <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="02-ProfilePage.html" class="active">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="05-ProfilePage-About.html">About</a>
                                        </li>
                                        <li>
                                            <a href="06-ProfilePage.html">Friends</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="07-ProfilePage-Photos.html">Photos</a>
                                        </li>
                                        <li>
                                            <a href="09-ProfilePage-Videos.html">Videos</a>
                                        </li>
                                        <li>
                                            <div class="more">
                                                <svg class="olymp-three-dots-icon">
                                                    <use
                                                        xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}">
                                                    </use>
                                                </svg>
                                                <ul class="more-dropdown more-with-triangle">
                                                    <li>
                                                        <a href="#">Report Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Block Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class="top-header-author">
                            <a href="02-ProfilePage.html" class="author-thumb">


                                @if ($about->profile_photo === null)
                                    <img style="width: 124px; height:124px;" src="{{ asset('assets/img/user.jpg') }}"
                                        alt="author">
                                @else
                                    <img style="width: 124px; height:124px;" src="/{{ $about->profile_photo }}"
                                        alt="author">
                                @endif
                            </a>
                            <div class="author-content">
                                <a href="02-ProfilePage.html" class="h4 author-name">{{ auth()->user()->user_name }}</a>

                                <div class="country">{{ $education->title }}</div>



                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- ... end Top Header-Profile -->
    <div class="container">
        <div class="row">


            <!-- Main Content -->

            <div class="col col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                @forelse ($posts as $post)
                    <x-post :post="$post" />
                @empty
                    <div class="text-none">
                        <h5>There are no recent posts!</h5>
                    </div>
                @endforelse


            </div>


            <!-- ... end Main Content -->

        @endsection
        <!-- Left Sidebar -->
    @section('sidebar.left')
        <div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">

            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Profile Intro</h6>
                </div>
                <div class="ui-block-content">

                    <!-- W-Personal-Info -->

                    <ul class="widget w-personal-info item-block">
                        <li>
                            <span class="title">About Me:</span>

                            <span class="text">{{ $about->description }}</span>
                        </li>
                        <li>
                            <span class="title">Hobbies</span>
                            <span class="text">{{ $about->hobby }}</span>

                        </li>
                        <li>
                            <span class="title">Skills</span>
                            <span class="text">{{ $about->skills }}</span>

                        </li>
                    </ul>

                    <!-- .. end W-Personal-Info -->
                    <!-- W-Socials -->

                    <div class="widget w-socials">
                        <h6 class="title">Social Links:</h6>
                        <a href="{{ $about->facebook }}" class="social-item bg-facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            Facebook
                        </a>
                        <a href="{{ $about->twitter }}" class="social-item bg-twitter">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            Twitter
                        </a>
                        <a href="{{ $about->linkedin }}" class="social-item bg-dribbble">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                            Linkedin
                        </a>
                    </div>


                    <!-- ... end W-Socials -->
                </div>
            </div>

            {{-- <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">James’s Badges</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Badges -->

                        <ul class="widget w-badges">
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge1.png') }}" alt="author">
                                    <div class="label-avatar bg-primary">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge4.png') }}" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge3.png') }}" alt="author">
                                    <div class="label-avatar bg-blue">4</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge6.png') }}" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge11.png') }}" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge8.png') }}" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge10.png') }}" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge13.png') }}" alt="author">
                                    <div class="label-avatar bg-breez">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge7.png') }}" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="{{ asset('assets/img/badge12.png') }}" alt="author">
                                </a>
                            </li>
                        </ul>

                        <!--.. end W-Badges -->
                    </div>
                </div> --}}














        </div>
    @endsection
    <!-- ... end Left Sidebar -->


    <!-- Window-popup Update Header Photo -->
    @section('modals')
        <div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog"
            aria-labelledby="update-header-photo" aria-hidden="true">
            <div class="modal-dialog window-popup update-header-photo" role="document">
                <div class="modal-content">
                    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                            </use>
                        </svg>
                    </a>

                    <div class="modal-header">
                        <h6 class="title">Update Header Photo</h6>
                    </div>

                    <div class="modal-body">
                        <a href="#" class="upload-photo-item">
                            <svg class="olymp-computer-icon">
                                <use
                                    xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-computer-icon') }}">
                                </use>
                            </svg>

                            <h6>Upload Photo</h6>
                            <span>Browse your computer.</span>
                        </a>

                        <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                            <svg class="olymp-photos-icon">
                                <use
                                    xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') }}">
                                </use>
                            </svg>

                            <h6>Choose from My Photos</h6>
                            <span>Choose from your uploaded photos</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- ... end Window-popup Update Header Photo -->

        <!-- Window-popup Choose from my Photo -->

        <div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog"
            aria-labelledby="choose-from-my-photo" aria-hidden="true">
            <div class="modal-dialog window-popup choose-from-my-photo" role="document">

                <div class="modal-content">
                    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon">
                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                            </use>
                        </svg>
                    </a>
                    <div class="modal-header">
                        <h6 class="title">Choose from My Photos</h6>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab"
                                    aria-expanded="true">
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
                                            <img src="{{ asset('assets/img/choose-photo1.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo2.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo3.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo4.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo5.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo6.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo7.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo8.jpg') }}" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="{{ asset('assets/img/choose-photo9.jpg') }}" alt="photo">
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
                                        <img src="{{ asset('assets/img/choose-photo10.jpg') }}" alt="photo">
                                        <figcaption>
                                            <a href="#">South America Vacations</a>
                                            <span>Last Added: 2 hours ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="{{ asset('assets/img/choose-photo11.jpg') }}" alt="photo">
                                        <figcaption>
                                            <a href="#">Photoshoot Summer 2016</a>
                                            <span>Last Added: 5 weeks ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="{{ asset('assets/img/choose-photo12.jpg') }}" alt="photo">
                                        <figcaption>
                                            <a href="#">Amazing Street Food</a>
                                            <span>Last Added: 6 mins ago</span>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="{{ asset('assets/img/choose-photo13.jpg') }}" alt="photo">
                                        <figcaption>
                                            <a href="#">Graffity & Street Art</a>
                                            <span>Last Added: 16 hours ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="{{ asset('assets/img/choose-photo14.jpg') }}" alt="photo">
                                        <figcaption>
                                            <a href="#">Amazing Landscapes</a>
                                            <span>Last Added: 13 mins ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="{{ asset('assets/img/choose-photo15.jpg') }}" alt="photo">
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

        <!-- Playlist Popup -->

        <div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup"
            aria-hidden="true">

            <a href="" class="icon-close js-close-popup">
                <svg class="olymp-close-icon">
                    <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use>
                </svg>
            </a>

            <div class="mCustomScrollbar">
                <table class="playlist-popup-table">

                    <thead>

                        <tr>

                            <th class="play">
                                PLAY
                            </th>

                            <th class="cover">
                                COVER
                            </th>

                            <th class="song-artist">
                                SONG AND ARTIST
                            </th>

                            <th class="album">
                                ALBUM
                            </th>

                            <th class="released">
                                RELEASED
                            </th>

                            <th class="duration">
                                DURATION
                            </th>

                            <th class="spotify">
                                GET IT ON SPOTIFY
                            </th>

                            <th class="remove">
                                REMOVE
                            </th>
                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td class="play">
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                            <td class="cover">
                                <div class="playlist-thumb">
                                    <img src="{{ asset('assets/img/playlist19.jpg') }}" alt="thumb-composition">
                                </div>
                            </td>
                            <td class="song-artist">
                                <div class="composition">
                                    <a href="#" class="composition-name">We Can Be Heroes</a>
                                    <a href="#" class="composition-author">Jason Bowie</a>
                                </div>
                            </td>
                            <td class="album">
                                <a href="#" class="album-composition">Ziggy Firedust</a>
                            </td>
                            <td class="released">
                                <div class="release-year">2014</div>
                            </td>
                            <td class="duration">
                                <div class="composition-time">
                                    <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                </div>
                            </td>
                            <td class="spotify">
                                <i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
                            </td>
                            <td class="remove">
                                <a href="#" class="remove-icon">
                                    <svg class="olymp-close-icon">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="play">
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                            <td class="cover">
                                <div class="playlist-thumb">
                                    <img src="img/playlist6.jpg" alt="thumb-composition">
                                </div>
                            </td>
                            <td class="song-artist">
                                <div class="composition">
                                    <a href="#" class="composition-name">The Past Starts Slow and Ends</a>
                                    <a href="#" class="composition-author">System of a Revenge</a>
                                </div>
                            </td>
                            <td class="album">
                                <a href="#" class="album-composition">Wonderize</a>
                            </td>
                            <td class="released">
                                <div class="release-year">2014</div>
                            </td>
                            <td class="duration">
                                <div class="composition-time">
                                    <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                </div>
                            </td>
                            <td class="spotify">
                                <i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
                            </td>
                            <td class="remove">
                                <a href="#" class="remove-icon">
                                    <svg class="olymp-close-icon">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="play">
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                            <td class="cover">
                                <div class="playlist-thumb">
                                    <img src="img/playlist7.jpg" alt="thumb-composition">
                                </div>
                            </td>
                            <td class="song-artist">
                                <div class="composition">
                                    <a href="#" class="composition-name">The Pretender</a>
                                    <a href="#" class="composition-author">Kung Fighters</a>
                                </div>
                            </td>
                            <td class="album">
                                <a href="#" class="album-composition">Warping Lights</a>
                            </td>
                            <td class="released">
                                <div class="release-year">2014</div>
                            </td>
                            <td class="duration">
                                <div class="composition-time">
                                    <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                </div>
                            </td>
                            <td class="spotify">
                                <i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
                            </td>
                            <td class="remove">
                                <a href="#" class="remove-icon">
                                    <svg class="olymp-close-icon">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="play">
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                            <td class="cover">
                                <div class="playlist-thumb">
                                    <img src="img/playlist8.jpg" alt="thumb-composition">
                                </div>
                            </td>
                            <td class="song-artist">
                                <div class="composition">
                                    <a href="#" class="composition-name">Seven Nation Army</a>
                                    <a href="#" class="composition-author">The Black Stripes</a>
                                </div>
                            </td>
                            <td class="album">
                                <a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
                            </td>
                            <td class="released">
                                <div class="release-year">2014</div>
                            </td>
                            <td class="duration">
                                <div class="composition-time">
                                    <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                </div>
                            </td>
                            <td class="spotify">
                                <i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
                            </td>
                            <td class="remove">
                                <a href="#" class="remove-icon">
                                    <svg class="olymp-close-icon">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="play">
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                            <td class="cover">
                                <div class="playlist-thumb">
                                    <img src="img/playlist9.jpg" alt="thumb-composition">
                                </div>
                            </td>
                            <td class="song-artist">
                                <div class="composition">
                                    <a href="#" class="composition-name">Leap of Faith</a>
                                    <a href="#" class="composition-author">Eden Artifact</a>
                                </div>
                            </td>
                            <td class="album">
                                <a href="#" class="album-composition">The Assassins’s Soundtrack</a>
                            </td>
                            <td class="released">
                                <div class="release-year">2014</div>
                            </td>
                            <td class="duration">
                                <div class="composition-time">
                                    <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                </div>
                            </td>
                            <td class="spotify">
                                <i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
                            </td>
                            <td class="remove">
                                <a href="#" class="remove-icon">
                                    <svg class="olymp-close-icon">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="play">
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                            <td class="cover">
                                <div class="playlist-thumb">
                                    <img src="{{ asset('assets/img/playlist10.jpg') }}" alt="thumb-composition">
                                </div>
                            </td>
                            <td class="song-artist">
                                <div class="composition">
                                    <a href="#" class="composition-name">Killer Queen</a>
                                    <a href="#" class="composition-author">Archiduke</a>
                                </div>
                            </td>
                            <td class="album">
                                <a href="#" class="album-composition ">News of the Universe</a>
                            </td>
                            <td class="released">
                                <div class="release-year">2014</div>
                            </td>
                            <td class="duration">
                                <div class="composition-time">
                                    <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                </div>
                            </td>
                            <td class="spotify">
                                <i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
                            </td>
                            <td class="remove">
                                <a href="#" class="remove-icon">
                                    <svg class="olymp-close-icon">
                                        <use
                                            xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}">
                                        </use>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <audio id="mediaplayer" data-showplaylist="true">
                <source src="{{ asset('assets/mp3/Twice.mp3') }}" title="Track 1" data-poster="track1.png"
                    type="audio/mpeg">
                <source src="{{ asset('assets/mp3/Twice.mp3') }}" title="Track 2" data-poster="track2.png"
                    type="audio/mpeg">
                <source src="{{ asset('assets/mp3/Twice.mp3') }}" title="Track 3" data-poster="track3.png"
                    type="audio/mpeg">
                <source src="{{ asset('assets/mp3/Twice.mp3') }}" title="Track 4" data-poster="track4.png"
                    type="audio/mpeg">
            </audio>

        </div>

        <!-- ... end Playlist Popup -->

    @endsection
