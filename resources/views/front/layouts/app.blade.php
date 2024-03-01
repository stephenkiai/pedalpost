<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageTitle')</title>

        <meta name="author" content="Wamoni">
        <!-- Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Styles-->
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" media="screen" href="{{ url('pedal/simplebar/dist/simplebar.min.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ url('pedal/tiny-slider/dist/tiny-slider.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ url('pedal/lightgallery/css/lightgallery-bundle.min.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ url('css/theme.min.css') }}">
        <link rel="stylesheet" media="screen" href="{{ url('css/style.css') }}">

    </head>
    <body class="handheld-toolbar-enabled">
        <!-- Body-->
        <main class="page-wrapper">
            @include('front.layouts.header')


            @yield('content')



            @include('front.layouts.footer')


            <!-- Back To Top Button-->
            <a class="btn-scroll-top" href="#top" data-scroll>
                <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
                <i class="btn-scroll-top-icon ci-arrow-up">   </i>
            </a>
            <!-- scripts plugins-->
            <script src="{{ url('pedal/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ url('pedal/simplebar/dist/simplebar.min.js') }}"></script>
            <script src="{{ url('pedal/tiny-slider/dist/min/tiny-slider.js') }}"></script>
            <script src="{{ url('pedal/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
            <script src="{{ url('pedal/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
            <script src="{{ url('pedal/shufflejs/dist/shuffle.min.js') }}"></script>
            <script src="{{ url('pedal/lightgallery/lightgallery.min.js') }}"></script>
            <script src="{{ url('pedal/lightgallery/plugins/fullscreen/lg-fullscreen.min.js') }}"></script>
            <script src="{{ url('js/theme.min.js') }}"></script>
        </main>
    </body>
</html>
