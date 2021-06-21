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

<body class="landing-page">


    <!-- Preloader -->

    <div id="hellopreloader">
        <div class="preloader">
            <svg width="45" height="45" stroke="#fff">
                <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite"
                            values="6;22" />
                        <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite"
                            values="6;22" />
                        <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="8">
                        <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite"
                            values="6;1;2;3;4;5;6" />
                    </circle>
                </g>
            </svg>

            <div class="text">Loading ...</div>
        </div>
    </div>

    <!-- ... end Preloader -->
    <div class="content-bg-wrap"></div>


    <!-- Header Standard Landing  -->

    <div class="header--standard header--standard-landing" id="header--standard">
        <div class="container">
            <div class="header--standard-wrap">

                <a href="#" class="logo">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Olympus">
                        <img src="{{ asset('assets/img/logo-colored-small.png') }}" alt="Olympus"
                            class="logo-colored">
                    </div>
                    <div class="title-block">
                        <h3 class="logo-title" style="font-weight:500;">Electrouni</h3>

                    </div>
                </a>

                <a href="#" class="open-responsive-menu js-open-responsive-menu">
                    <svg class="olymp-menu-icon">
                        <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-menu-icon') }}"></use>
                    </svg>
                </a>


            </div>
        </div>
    </div>

    <!-- ... end Header Standard Landing  -->
    @yield("content")
    <!-- Window-popup Restore Password -->


    <!-- ... end Window-popup Restore Password -->


    <!-- Window Popup Main Search -->

    <div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                    </svg>
                </a>
                <div class="modal-body">
                    <form class="form-inline search-form" method="post">
                        <div class="form-group label-floating">
                            <label class="control-label">What are you looking for?</label>
                            <input class="form-control bg-white" placeholder="" type="text" value="">
                        </div>

                        <button class="btn btn-purple btn-lg">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window Popup Main Search -->

    <!-- JS Scripts -->
    <script src="{{ asset('assets/js/jQuery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.appear.js') }}"></script>
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
    <script src="{{ asset('assets/js/libs/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('assets/js/libs/leaflet.js') }}"></script>
    <script src="{{ asset('assets/js/libs/MarkerClusterGroup.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/libs-init/libs-init.js') }}"></script>
    <script defer src="{{ asset('assets/fonts/fontawesome-all.js') }}"></script>

    <script src="{{ asset('assets/Bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
