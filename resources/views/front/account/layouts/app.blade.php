<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

    <meta name="author" content="Wamoni">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{ url('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ url('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ url('vendor/lightgallery/css/lightgallery-bundle.min.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ url('css/theme.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ url('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
  </head>
  <!-- Body-->

    <main class="page-wrapper">

        <!--header-->
        @include('front.layouts.header')

        <!-- dashboard header-->
        @include('front.account.layouts.dashboard_header')

        <!-- sidenav-->
        @include('front.account.layouts.sidenav')

        @yield('content')

        <!-- Footer-->
        @include('front.layouts.footer')

      <!-- Back To Top Button-->
      <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
      <!-- Vendor scrits: js libraries and plugins-->
      <script src="{{ url('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ url('vendor/simplebar/dist/simplebar.min.js') }}"></script>
      <script src="{{ url('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
      <script src="{{ url('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
      <script src="{{ url('vendor/chartist/dist/chartist.min.js') }}"></script>
      <!-- Main theme script-->
      <script src="{{ url('js/theme.min.js') }}"></script>
</body>

  </html>
