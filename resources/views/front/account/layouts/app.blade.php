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

       <!-- Toolbar for handheld devices (Marketplace)-->
    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="dashboard-favorites.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Favorites</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="marketplace-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">3</span></span><span class="handheld-toolbar-label">$56.00</span></a></div>
      </div>
      <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
      <!-- Vendor scrits: js libraries and plugins-->
      <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/simplebar/dist/simplebar.min.js"></script>
      <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
      <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
      <script src="vendor/chartist/dist/chartist.min.js"></script>
      <!-- Main theme script-->
      <script src="js/theme.min.js"></script>
</body>

  <!-- Mirrored from cartzilla.createx.studio/dashboard-sales.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 15:50:46 GMT -->
  </html>
