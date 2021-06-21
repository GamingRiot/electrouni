<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title','ElectroUni')</title>

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



    @yield('header')
    <div class="header-spacer"></div>
    <div class="container ">
        <div class="row">

            <!-- Main Content -->

            @yield('content')

            <!-- ... end Main Content -->
            <!-- Left Sidebar -->

            @yield('sidebar.left')
            <!-- ... end Left Sidebar -->


            <!-- Right Sidebar -->
            @yield('sidebar.right')

            <!-- ... end Right Sidebar -->

        </div>
    </div>


    @yield('modals')


    <a class="back-to-top" href="#">
        <img src="{{ asset('assets/svg-icons/back-to-top.svg ') }}" alt="arrow" class=" back-icon">
    </a>




    <!-- Window-popup-CHAT for responsive min-width: 768px -->



    <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

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

    @stack('scripts')

</body>

</html>
