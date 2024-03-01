<!-- Footer-->
@php
    // Retrieve 5 categories randomly
    $randomCategories = \App\Models\Category::inRandomOrder()->limit(5)->get();
@endphp

<footer class="footer bg-accent pt-5">
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Categories</h3>
                    <ul class="widget-list">
                        <!--display 5 categories randomly-->
                        @foreach($randomCategories as $category)
                            <li class="widget-list-item"><a class="widget-list-link" href="">{{ $category->category_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">About us</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item">
                            <a class="widget-list-link" href="{{ route('home.about') }}">About </a>
                        </li>
                        <li class="widget-list-item">
                            <a class="widget-list-link" href="{{ route('home.team') }}">Our Team</a>
                        </li>
                        <li class="widget-list-item">
                            <a class="widget-list-link" href="{{ route('home.careers') }}">Careers</a>
                        </li>
                        <li class="widget-list-item">
                            <a class="widget-list-link" href="{{ route('home.contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Account</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item">
                            <a class="widget-list-link" href="{{ route('home.policy') }}">User policies</a>
                        </li>
                        <li class="widget-list-item">
                            <a class="widget-list-link" href="{{ route('home.terms') }}">Terms of Use</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-md-6 text-center text-md-end mb-4">
                <div class="mb-3">
                    <a class="btn-social bs-light bs-twitter ms-2 mb-2" href="www.twitter.com"><i class="ci-twitter"></i></a>
                    <a class="btn-social bs-light bs-facebook ms-2 mb-2" href="www.facebook.com"><i class="ci-facebook"></i></a>
                    <a class="btn-social bs-light bs-instagram ms-2 mb-2" href="www.instagram.com"><i class="ci-instagram"></i></a>
                    <a class="btn-social bs-light bs-youtube ms-2 mb-2" href="www.youtube.com"><i class="ci-youtube"></i></a>
                </div>
            </div>

            <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by
                <a class="text-light" href="{{ route('home.index') }}">Wamoni</a>
            </div>
        </div>
    </div>
</footer>

