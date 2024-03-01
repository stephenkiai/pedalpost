@extends('front.account.layouts.app')

@section('content')
<!-- Content-->
    <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
        <!-- Title-->
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
                <h2 class="h3 py-2 me-2 text-center text-sm-start">My Posts</h2>
                <div class="py-2">
                    <div class="d-flex flex-nowrap align-items-center pb-3">
                        <label class="form-label fw-normal text-nowrap mb-0 me-2" for="sorting">Sort by:</label>
                        <select class="form-select form-select-sm me-2" id="sorting">
                        <option>Recent</option>
                        <option>Old</option>
                        <option>Most-viewed</option>
                        </select>
                        <button class="btn btn-outline-secondary btn-sm px-2" type="button"><i class="ci-arrow-up"></i></button>
                    </div>
                </div>
            </div>

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


            @php
            // Retrieve posts created by the current user with pagination
            $userPosts = Auth::user()->posts()->paginate(5);
            @endphp

            <!-- Pagination -->
            <nav class="d-md-flex justify-content-between align-items-center text-center text-md-start mt-4" aria-label="Page navigation">
                <div class="d-md-flex align-items-center w-100">
                    <span class="fs-sm text-muted me-md-3">Showing {{ $userPosts->count() }} of {{ $userPosts->total() }} posts</span>
                    <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                        <!--avoid division by zero when user has no posts-->
                        <div class="progress-bar" role="progressbar"
                            style="width: {{ $userPosts->count() > 0 ? ($userPosts->count() / $userPosts->total()) * 100 : 0 }}%;"
                            aria-valuenow="{{ $userPosts->count() > 0 ? ($userPosts->count() / $userPosts->total()) * 100 : 0 }}"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div>
                    @if ($userPosts->previousPageUrl())
                        <a href="{{ $userPosts->previousPageUrl() }}" class="btn btn-outline-primary btn-sm me-2">Previous</a>
                    @endif
                    @if ($userPosts->nextPageUrl())
                        <a href="{{ $userPosts->nextPageUrl() }}" class="btn btn-outline-primary btn-sm">Next</a>
                    @endif
                </div>
            </nav>

            <!-- Loop through user's posts -->
            @foreach ($userPosts as $post)
                <div class="d-block d-sm-flex align-items-center py-4 border-bottom">
                    <a class="d-block mb-3 mb-sm-0 me-sm-4 ms-sm-0 mx-auto" href="{{ route('post.show', $post->id) }}" style="width: 12.5rem;">
                        <img class="rounded-3 bg-accent" src="{{ $post->featured_image }}" alt="post image">
                    </a>
                    <div class="text-center text-sm-start">
                        <h3 class="h6 product-title mb-2"><a href="{{ route('post.show', $post->id) }}">{{ $post->post_title }}</a></h3>
                        <p>{!! substr($post->post_content, 0, 100) !!}...</p>
                        <!-- Buttons for actions Edit, Delete) -->
                        <a href="{{ route('post.edit', $post->id) }}" class="btn bg-faded-info btn-icon me-2" type="button" data-bs-toggle="tooltip" title="Edit">
                            <i class="ci-edit text-info"></i>
                        </a>
                        <form method="POST" action="{{ route('post.delete', $post->id) }}" style="display: inline;">
                            @csrf
                            @method('HEAD')
                            <button class="btn bg-faded-danger btn-icon" type="submit" data-bs-toggle="tooltip" title="Delete">
                                <i class="ci-trash text-danger"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach


            <!-- Pagination -->
            <nav class="d-md-flex justify-content-between align-items-center text-center text-md-start mt-4" aria-label="Page navigation">
                <div class="d-md-flex align-items-center w-100">
                    <span class="fs-sm text-muted me-md-3">Showing {{ $userPosts->count() }} of {{ $userPosts->total() }} posts</span>
                    <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                        <!--avoid division by zero when user has no posts-->
                        <div class="progress-bar" role="progressbar"
                            style="width: {{ $userPosts->count() > 0 ? ($userPosts->count() / $userPosts->total()) * 100 : 0 }}%;"
                            aria-valuenow="{{ $userPosts->count() > 0 ? ($userPosts->count() / $userPosts->total()) * 100 : 0 }}"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div>
                    @if ($userPosts->previousPageUrl())
                        <a href="{{ $userPosts->previousPageUrl() }}" class="btn btn-outline-primary btn-sm me-2">Previous</a>
                    @endif
                    @if ($userPosts->nextPageUrl())
                        <a href="{{ $userPosts->nextPageUrl() }}" class="btn btn-outline-primary btn-sm">Next</a>
                    @endif
                </div>
            </nav>

    </section>
@endsection
