@extends('front.account.layouts.app')

@section('content')

    @php
    // Retrieve posts created by the current user
    $userPostsCount = Auth::user()->posts()->count();

    // Retrieve the total number of comments for the latest post by the user
    if (Auth::user()) {
    $lastPost = Auth::user()->posts()->latest()->first(); // Retrieve last post

    if ($lastPost) {
        $totalComments = $lastPost->comments()->count();
    } else {
        $totalComments = 0; //no posts/comments on the last post
    }
    } else {
        //not logged in
        $totalComments = 0;
    }

    @endphp

    <!-- Content-->
    <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <h2 class="h3 py-2 text-center text-sm-start">My Analytics</h2>
            <div class="row mx-n2 pt-2">
                <div class="col-md-4 col-sm-6 px-2 mb-4">
                    <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                        <h3 class="fs-sm text-muted">Posts</h3>
                        <p class="h2 mb-2">{{ $userPostsCount }}</p>
                        <p class="fs-ms text-muted mb-0">Since {{ Auth::user()->created_at }}</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 px-2 mb-4">
                    <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                        <h3 class="fs-sm text-muted">Drafts</h3>
                        <p class="h2 mb-2">20</p>
                        <p class="fs-ms text-muted mb-0">view button</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 px-2 mb-4">
                    <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                        <h3 class="fs-sm text-muted">Comments</h3>
                        <p class="h2 mb-2">{{ $totalComments }}</p>
                        <p class="fs-ms text-muted mb-0">For your last Post</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection



