<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <meta name="author" content="Wamoni">
        <!-- Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--  Styles-->
        <link rel="stylesheet" media="screen" href="{{ url('pedal/simplebar/dist/simplebar.min.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ url('pedal/tiny-slider/dist/tiny-slider.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ url('pedal/lightgallery/css/lightgallery-bundle.min.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ url('css/theme.min.css') }}">
        <link rel="stylesheet" media="screen" href="{{ url('css/style.css') }}">


        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <!-- Body-->

        <main class="page-wrapper">

            <!--header-->
            @include('front.layouts.header')

            <!-- dashboard header-->
            @include('front.account.layouts.dashboard_header')


            <div class="container mb-5 pb-3">
                <div class="bg-light shadow-lg rounded-3 overflow-hidden">
                    <div class="row">
                        <!-- sidenav-->
                        @include('front.account.layouts.sidenav')

                        @yield('content')
                    </div>
                </div>
            </div>


            <!-- Footer-->
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
            <script src="{{ url('pedal/tiny-slider/dist/min/tiny-slider.js') }}"></script>
            <script src="{{ url('pedal/chartist/dist/chartist.min.js') }}"></script>
            <script src="{{ url('js/theme.min.js') }}"></script>
            <!-- ckeditor cdn-->
            <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

            @yield('scripts')
        </main>
    </body>

</html>
