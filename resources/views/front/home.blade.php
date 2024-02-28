@extends('front.layouts.app')

@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'PedalPost-Home')
@section('content')

<main class="page-wrapper">

    <!-- Blog Title -->
    <div class="page-title-overlap bg-accent pt-4">
        <div class="container">
            <div class="text-center my-5">

                <h1 class="fw-bolder text-white">Welcome To PedalPost!</h1>
                <p class="lead mb-0 text-white">"Discover The Inspiration Behind Every Adventure"</p>
                <p class="lead mb-0 text-white">For Cyclist,By Cyclist.</p>

            </div>
        </div>
    </div>



    <!-- Featured posts carousel-->
    <div class="container pb-5 mb-2 mb-md-4">
    <div class="featured-posts-carousel tns-carousel pt-5">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;700&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;991&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 30}}}">
            @foreach($featuredPosts as $post)

        <article>
            <a class="blog-entry-thumb mb-3" href="{{ route('home.single', $post->id) }}">
                <span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>{{ $post->created_at->format('M d') }}</span>
                <img src="{{ asset($post->featured_image) }}" alt="post image">
            </a>
            <div class="d-flex justify-content-between mb-2 pt-1">
                <h2 class="h5 blog-entry-title mb-0"><a href="{{ route('home.single', $post->id) }}">{{ $post->post_title }}</a></h2>
                <a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="{{ route('post.show', $post->id) }}#comments"><i class="ci-message"></i></a>
            </div>
            <div class="d-flex align-items-center fs-sm">
                <a class="blog-entry-meta-link" href="#">
                    <div class="blog-entry-author-ava"><img src="" alt="pic"></div>{{ $post->user->name }}
                </a>
                <span class="blog-entry-meta-divider"></span>
                <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>{{ $post->category->category_name }}</a></div>
            </div>
        </article>
        @endforeach
        </div>
    </div>
    <hr class="mt-5">

    <div class="row pt-5 mt-md-2">

        <!-- Entries grid-->
        <section class="col-lg-8">
            <div class="masonry-grid" data-columns="2">
                <!-- Entry-->
                @foreach($posts as $post)
                <article class="masonry-grid-item">
                    <div class="card">
                        <a class="blog-entry-thumb" href="{{ route('home.single', $post->id) }}">
                            <img class="card-img-top" src="{{ asset($post->featured_image) }}" alt="post image">
                        </a>
                        <div class="card-body">
                            <h2 class="h6 blog-entry-title">
                                <a href="{{ route('home.single', $post->id) }}">{{ $post->post_title }}</a>
                            </h2>
                            <p class="fs-sm">{!! substr($post->post_content, 100, 200) !!}</p>

                                <a class="btn-tag me-2 mb-2" href="#">{{ $post->category->category_name }}</a>

                        </div>
                        <div class="card-footer d-flex align-items-center fs-xs">
                            <a class="blog-entry-meta-link" href="#">
                                <div class="blog-entry-author-ava">
                                    <img src="" alt="pic">
                                </div>
                                {{ $post->user->name }}
                            </a>
                            <div class="ms-auto text-nowrap">
                                <a class="blog-entry-meta-link text-nowrap" href="#">{{ $post->created_at->format('M d') }}</a>
                                <span class="blog-entry-meta-divider mx-2"></span>
                                <a class="blog-entry-meta-link text-nowrap" href="{{ route('home.single', $post->id) }}#comments">
                                    <i class="ci-message"></i>56
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
            </div>
            <hr class="mb-4">

            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="{{ $posts->previousPageUrl() }}"><i class="ci-arrow-left me-2"></i>Prev</a>
                    </li>
                </ul>
                <ul class="pagination">
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">{{ $posts->currentPage() }} / {{ $posts->lastPage() }}</span></li>
                    @foreach(range(1, $posts->lastPage()) as $page)
                        <li class="page-item {{ $page == $posts->currentPage() ? 'active' : '' }} d-none d-sm-block" aria-current="page">
                            <a class="page-link" href="{{ $posts->url($page) }}">{{ $page }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="{{ $posts->nextPageUrl() }}" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </section>
        <aside class="col-lg-4">


            @php
                // Retrieve 6 categories randomly
                $randomCategories = \App\Models\Category::inRandomOrder()->limit(6)->get();

                // Retrieve trending posts randomly
                $trendingPosts = \App\Models\Post::inRandomOrder()->limit(3)->get();
            @endphp

            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse offcanvas-end border-start ms-lg-auto" id="blog-sidebar" style="max-width: 22rem;">
                <div class="offcanvas-header align-items-center shadow-sm">
                    <h2 class="h5 mb-0">Sidebar</h2>
                    <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body py-grid-gutter py-lg-1 px-lg-4" data-simplebar data-simplebar-auto-hide="true">
                    <!-- Categories-->
                    <div class="widget widget-links mb-grid-gutter pb-grid-gutter border-bottom mx-lg-2">
                        <h3 class="widget-title">Blog categories</h3>
                        <ul class="widget-list">
                            @foreach($randomCategories as $category)
                                <li class="widget-list-item">
                                    <a class="widget-list-link d-flex justify-content-between align-items-center" href="#">
                                        <span>{{ $category->category_name }}</span>
                                        <span class="fs-xs text-muted ms-3">{{ $category->posts()->count() }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Trending posts-->
                    <div class="widget mb-grid-gutter pb-grid-gutter border-bottom mx-lg-2">
                        <h3 class="widget-title">Trending posts</h3>
                        @foreach($trendingPosts as $post)
                            <div class="d-flex align-items-center mb-3">
                                <a class="flex-shrink-0" href="{{ route('home.single', $post->id) }}">
                                    <img class="rounded" src="{{ asset($post->featured_image) }}" width="64" alt="Post image">
                                </a>
                                <div class="ps-3">
                                    <h6 class="blog-entry-title fs-sm mb-0">
                                        <a href="{{ route('home.single', $post->id) }}">{{ $post->post_title }}</a>
                                    </h6>
                                    <span class="fs-ms text-muted">by <a href='#' class='blog-entry-meta-link'>{{ $post->user->name }}</a></span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Popular tags-->
                    <div class="widget pb-grid-gutter mx-lg-2">
                        <h3 class="widget-title">Popular tags</h3>
                        <a class="btn-tag me-2 mb-2" href="#">#cyclist</a>
                        <a class="btn-tag me-2 mb-2" href="#">#cycle</a>
                        <a class="btn-tag me-2 mb-2" href="#">#bmx</a>
                        <a class="btn-tag me-2 mb-2" href="#">#shimano</a>
                        <a class="btn-tag me-2 mb-2" href="#">#gravel ride</a>
                        <a class="btn-tag me-2 mb-2" href="#">#fitness</a>
                        <a class="btn-tag me-2 mb-2" href="#">#bike repair</a>
                        <a class="btn-tag me-2 mb-2" href="#">#tips &amp; tricks</a>
                    </div>

                    <!-- Promo banner-->
                    <div class="bg-size-cover bg-position-center rounded-3 py-5 mx-lg-2" style="background-image: url(img/blog/banner-bg.jpg);">
                        <div class="py-5 px-4 text-center">
                            <h5 class="mb-2">Your Ad Banner Here</h5>
                            <p class="fs-sm text-muted">Advertize with Us</p>
                            <p class="fs-sm text-muted">Hurry up to reserve your spot</p>
                            <a class="btn btn-primary btn-shadow btn-sm" href="{{ route('home.contact') }}">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
        </div>
</main>

  @endsection
