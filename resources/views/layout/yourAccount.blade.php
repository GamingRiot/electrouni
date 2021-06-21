<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title','Electrouni')</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Main Font -->
    <script src="{{ asset('assets/js/libs/webfontloader.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });

    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Bootstrap/dist/css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Bootstrap/dist/css/bootstrap-grid.css') }}">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.min.css') }}">


</head>

<body class="page-has-left-panels page-has-right-panels">


    <!--responsive profile settings-->
    <div class="profile-settings-responsive">

        <a href="#" class="js-profile-settings-open profile-settings-open">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <div class="mCustomScrollbar" data-mcs-theme="dark">
            <div class="ui-block">
                <div class="your-profile">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Your PROFILE</h6>
                    </div>

                    <div id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne-1">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Profile Settings
                                        <svg class="olymp-dropdown-arrow-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                            </use>
                                        </svg>
                                    </a>
                                </h6>
                            </div>

                            <div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <ul class="your-profile-menu">
                                    <li>
                                        <a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
                                    </li>
                                    <li>
                                        <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                                    </li>
                                    <li>
                                        <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
                                    </li>
                                    <li>
                                        <a href="32-YourAccount-EducationAndEmployement.html">Education and
                                            Employement</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- end responsive profile settings-->

    <!-- Preloader -->

    <x-preloader />

    <!-- ... end Preloader -->


    <!-- Fixed Sidebar Left -->

    <x-sidebar-left />
    <!-- ... end Fixed Sidebar Left -->


    <!-- Fixed Sidebar Right -->
    <!-- Fixed Sidebar Right-Responsive -->

    <x-sidebar-right />

    <!-- ... end Fixed Sidebar Right -->
    <!-- ... end Fixed Sidebar Right-Responsive -->

    <!-- Header-BP -->
    <!-- Responsive Header-BP -->
    <x-navbar />
    <!-- ... end Header-BP -->
    <!-- ... end Responsive Header-BP -->
    <div class="main-header">

        <div class="content-bg-wrap bg-account"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Your Account Dashboard</h1>
                        <p>Welcome to your account dashboard! Here you’ll find everything you need to change your
                            profile
                            information, settings, read notifications and requests, view your latest messages, change
                            your pasword and much
                            more! Also you can create or manage your own favourite page, have fun!</p>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-bottom" src="{{ asset('assets/img/group-bottom.jpg') }}" alt="friends">
    </div>


    <div class="container">
        <div class="row">

            <!-- Main Content -->



            <!--left your profile section-->
            <div
                class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
                <div class="ui-block">

                    <!-- Your Profile  -->

                    <div class="your-profile">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Your PROFILE</h6>
                        </div>

                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Profile Settings
                                            <svg class="olymp-dropdown-arrow-icon">
                                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                                </use>
                                            </svg>
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <ul class="your-profile-menu">
                                        <li>
                                            <a href="/about">Personal Information</a>
                                        </li>
                                        <!-- <li>
          <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
         </li> -->
                                        <li>
                                            <a href="/edit-password">Change Password</a>
                                        </li>
                                        <!-- <li>
          <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
         </li> -->
                                        <li>
                                            <a href="/education">Education and Employement</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- ... end Your Profile  -->

                </div>
            </div>
            <!--End left your profile section-->
            @yield('content')

        </div>
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/js/jQuery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assests/js/libs/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/js/libs/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.matchHeight.js') }}"></script>
    <script src="{{ asset('assets/js/libs/svgxuse.js') }}"></script>
    <script src="{{ asset('assets/js/libs/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/libs/Headroom.js') }}"></script>
    <script src="{{ asset('assets/js/libs/velocity.js') }}"></script>
    <script src="{{ asset('assets/js/libs/ScrollMagic.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/libs/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/material.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/js/libs/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/libs/selectize.js') }}"></script>
    <script src="{{ asset('assets/js/libs/swiper.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/libs/moment.js') }}"></script>
    <script src="{{ asset('assets/js/libs/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/libs/fullcalendar.js') }}"></script>
    <script src="{{ asset('assets/js/libs/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/libs/ajax-pagination.js') }}"></script>
    <script src="{{ asset('assets/js/libs/Chart.js') }}"></script>
    <script src="{{ asset('assets/js/libs/chartjs-plugin-deferred.js') }}"></script>
    <script src="{{ asset('assets/js/libs/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/libs/loader.js') }}"></script>
    <script src="{{ asset('assets/js/libs/run-chart.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.gifplayer.js') }}"></script>
    <script src="{{ asset('assets/js/libs/mediaelement-and-player.js') }}"></script>
    <script src="{{ asset('assets/js/libs/mediaelement-playlist-plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/libs/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('assets/js/libs/leaflet.js') }}"></script>
    <script src="{{ asset('assets/js/libs/MarkerClusterGroup.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/libs-init/libs-init.js') }}"></script>
    <script defer src="{{ asset('assets/fonts/fontawesome-all.js') }}"></script>

    <script src="{{ asset('assets/Bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
