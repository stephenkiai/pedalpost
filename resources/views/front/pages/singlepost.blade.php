@extends('front.layouts.app')

@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'View post')
@section('content')
    <main class="page-wrapper">

        <!-- Page header Title = to current post title -->
        <div class="page-title-overlap bg-accent pt-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder text-white">{{ $post->post_title }}</h1>
                    <p class="lead mb-0 text-white">Just 7 minutes read ...</p>
                </div>
            </div>
        </div>


        <div class="container pb-5 mb-2 mb-md-4" style="padding-top: 80px;">
            <div class="row pt-5 mt-md-2">
                <section class="col-lg-8">

                    <!--success display -->
                    @if (session('success'))
                        <div id="successMessage" class="alert alert-success">
                            {{ session('success') }}
                        </div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            // animation and set timeout
                            setTimeout(function() {
                                $('#successMessage').fadeOut('slow');
                            }, 4000); // 4 milliseconds
                        </script>
                    @endif

                    <!-- single Post view-->
                    <div class="d-flex flex-wrap justify-content-between align-items-center pb-4 mt-n1">
                        <div class="d-flex align-items-center fs-sm mb-2">
                            <a class="blog-entry-meta-link" href="#">
                                <div class="blog-entry-author-ava">
                                    <img src="{{ asset($post->featured_image) }}" alt="pic">
                                </div>{{ $post->user->name }}</a><span class="blog-entry-meta-divider"></span>
                            <a class="blog-entry-meta-link" href="#">{{ $post->created_at->format('M d') }}</a>
                        </div>

                        <div class="fs-sm mb-2">
                            <a class="blog-entry-meta-link text-nowrap" href="#comments" data-scroll>
                                <i class="ci-message"></i>{{ $totalComments }}
                            </a>
                        </div>
                    </div>

                    <!--current post images-->
                    <div class="gallery row pb-2">
                        <div class="col-sm-8">
                            <a class="gallery-item rounded-3 mb-grid-gutter" href="">
                                <img src="{{ asset($post->featured_image) }}" alt="post image">
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a class="gallery-item rounded-3 mb-grid-gutter" href="">
                                <img src="{{ asset($post->featured_image) }}" alt="Gallery image">
                            </a>
                            <a class="gallery-item rounded-3 mb-grid-gutter" href="">
                                <img src="{{ asset($post->featured_image) }}" alt="Post image">
                            </a>
                        </div>
                    </div>

                    <!--post title-->
                    <h2>{{ $post->post_title }}</h2>
                    <hr>
                    <!-- Post content-->
                    <p>{!! $post->post_content !!}</p>

                    <!-- Post category + sharing-->
                    <div class="d-flex flex-wrap justify-content-between pt-2 pb-4 mb-1">
                        <div class="mt-3 me-3">
                            <a class="btn-tag me-2 mb-2" href="#">{{ $post->category_id }}</a>
                            <a class="btn-tag mb-2" href="#">{{ $post->category->category_name }}</a>
                        </div>
                        <div class="mt-3"><span class="d-inline-block align-middle text-muted fs-sm me-3 mt-1 mb-2">Share post:</span>
                            <a class="btn-social bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a>
                            <a class="btn-social bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a>
                            <a class="btn-social bs-instagram me-2 mb-2" href="#"><i class="ci-instagram"></i></a>
                        </div>
                    </div>

                    <!-- Post navigation-->
                    <nav class="entry-navigation" aria-label="Post navigation">
                        <!-- Link to the previous post -->
                        @if ($previousPost)
                            <a class="entry-navigation-link" href="{{ route('home.single', $previousPost->id) }}">
                                <i class="ci-arrow-left me-2"></i>
                                <span class="d-none d-sm-inline">Prev post</span>
                            </a>
                        @endif

                        <!-- Link to view all posts -->
                        <a class="entry-navigation-link" href="{{ route('home.index') }}">
                            <i class="ci-view-list me-2"></i>
                            <span class="d-none d-sm-inline">All posts</span>
                        </a>

                        <!-- Link to the next post -->
                        @if ($nextPost)
                            <a class="entry-navigation-link" href="{{ route('home.single', $nextPost->id) }}">
                                <span class="d-none d-sm-inline">Next post</span>
                                <i class="ci-arrow-right ms-2"></i>
                            </a>
                        @endif
                    </nav>


                    <!--comments section-->
                    <div class="pt-2 mt-5" id="comments">
                        <h2 class="h4">Comments<span class="badge bg-secondary fs-sm text-body align-middle ms-2">{{ $totalComments }}</span></h2>

                        @foreach($comments as $comment)
                            <!-- Comment -->
                            <div class="d-flex align-items-start py-4 border-bottom">
                                <img class="rounded-circle" src="" width="50" alt="pic">
                                <div class="ps-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fs-md mb-0">{{ $comment->user->name }}</h6>

                                    </div>
                                    <p class="fs-md mb-1">{{ $comment->content }}</p>

                                    <span class="fs-ms text-muted">
                                        <i class="ci-time align-middle me-2"></i>{{ $comment->created_at->format('M d, Y') }}

                                        <!-- Reply link -->
                                        <a class="reply-link nav-link-style fs-sm fw-medium" href="#"><i class="ci-reply me-2"></i>Reply</a>

                                        <!-- Display delete button for the comment -->
                                        <form action="{{ route('comments.delete', $comment->id) }}" method="POST">
                                            @csrf
                                            @method('HEAD')
                                            <button type="submit" class="btn btn-danger btn-sm custom-btn">Delete</button>
                                        </form>
                                    </span>

                                    <!-- Comment Replies -->
                                    @foreach($comment->replies as $reply)
                                        <div class="d-flex align-items-start border-top pt-4 mt-4">
                                            <img class="rounded-circle" src="" width="50" alt="pic">
                                            <div class="ps-3">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="fs-md mb-0">{{ $reply->user->name }}</h6>
                                                </div>
                                                <p class="fs-md mb-1">{{ $reply->content }}</p>
                                                <span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>{{ $reply->created_at->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach

                        <!-- Post comment form -->
                        <div class="card border-0 shadow mt-2 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    @auth <!-- Check if the user is authenticated -->
                                        <img class="rounded-circle" src="" width="50" alt="pic">
                                    @else
                                        <img class="rounded-circle" src="{{ url('img/blog/reshot-bike.svg') }}" width="50" alt="img">
                                    @endauth
                                    <form class="w-100 needs-validation ms-3" action="{{ route('comments.store', ) }}" method="POST" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <input type="hidden" name="parent_comment_id" value="{{ $post->parent_comment_id }}">
                                            <textarea class="form-control" name="content" rows="4" placeholder="Write comment..." required></textarea>
                                            <div class="invalid-feedback">Please write your comment.</div>
                                        </div>
                                        <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>


                <aside class="col-lg-4">


                    @php
                        // Retrieve 6 categories randomly
                        $randomCategories = \App\Models\Category::inRandomOrder()->limit(6)->get();

                        // Retrieve 3 trending posts randomly
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

@section('script')



@endsection
