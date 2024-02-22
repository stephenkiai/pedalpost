<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

    <!-- SEO Meta Tags-->
    <meta name="description" content="PedalPost-Explore the latest cycling gear, training tips, and
    adventures. Find top-quality bikes, apparel, and accessories for cyclists of all levels.">
    <meta name="keywords" content="cycling,biking,cyclists">
    <meta name="author" content="Wamoni">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="vendor/lightgallery/css/lightgallery-bundle.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <link rel="stylesheet" media="screen" href="css/style.css">


  </head>

  <!-- header section -->
  <header class="shadow-sm">
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <div class="navbar-sticky bg-light">
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand d-none d-sm-block flex-shrink-0" href="index-2.html">
                        <img src="img/logo-dark.png" width="142" alt="Cartzilla">
                    </a>
                    <a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index-2.html">
                        <img src="img/logo-icon.png" width="74" alt="Cartzilla">
                    </a>

                    <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-tool navbar-stuck-toggler" href="#">
                            <span class="navbar-tool-tooltip">Expand menu</span>

                            <div class="navbar-tool-icon-box">
                                <i class="navbar-tool-icon ci-heart"></i>
                            </div>
                        </a>
                        <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2">
                            <div class="navbar-tool-icon-box">
                                <i class="navbar-tool-icon ci-user"></i>
                            </div>
                            <div class="navbar-tool-text ms-n3"><small>
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </small>username here</div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
  <!-- Body-->
  @include('front.body')



  @include('front.footer')
</html>
