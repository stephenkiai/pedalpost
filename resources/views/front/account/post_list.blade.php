@extends('front.account.layouts.app')

@section('content')
<!-- Content-->
<section class="col-lg-8 pt-lg-4 pb-4 mb-3">
    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
      <!-- Title-->
      <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
        <h2 class="h3 py-2 me-2 text-center text-sm-start">Your Posts<span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">5</span></h2>
        <div class="py-2">
          <div class="d-flex flex-nowrap align-items-center pb-3">
            <label class="form-label fw-normal text-nowrap mb-0 me-2" for="sorting">Sort by:</label>
            <select class="form-select form-select-sm me-2" id="sorting">
              <option>Date-Created</option>
              <option>Less-Comments</option>
              <option>Most-Comments</option>
            </select>
            <button class="btn btn-outline-secondary btn-sm px-2" type="button"><i class="ci-arrow-up"></i></button>
          </div>
        </div>
      </div>

      <!--error display-->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach ($errors->all() as $error )
            <li class="list-group-item text-danger">
                {{ $error }}
            </li>

            @endforeach
        </ul>
    </div>
    @endif
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


      <!-- Pagination -->
    <nav class="d-md-flex justify-content-between align-items-center text-center text-md-start mt-4" aria-label="Page navigation">
        <div class="d-md-flex align-items-center w-100">
            <span class="fs-sm text-muted me-md-3">Showing {{ count($posts->items()) }} of {{ $posts->total() }} posts</span>
            <!-- Progress bar example (optional) -->
            <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                <div class="progress-bar" role="progressbar" style="width: {{ $posts->currentPage() / $posts->lastPage() * 100 }}%;" aria-valuenow="{{ $posts->currentPage() / $posts->lastPage() * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!-- Button for loading more posts (optional) -->
        <button class="btn btn-outline-primary btn-sm" type="button">More posts</button>
    </nav>

    <!-- Blog Posts -->
    @foreach ($posts as $post)
    <div class="d-block d-sm-flex align-items-center py-4 border-bottom">
        <a class="d-block mb-3 mb-sm-0 me-sm-4 ms-sm-0 mx-auto" href="{{ route('blog.post.show', $post->id) }}" style="width: 12.5rem;">
            <img class="rounded-3" src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">
        </a>
        <div class="text-center text-sm-start">
            <h3 class="h6 product-title mb-2"><a href="{{ route('blog.post.show', $post->id) }}">{{ $post->title }}</a></h3>
            <!-- Buttons for actions (e.g., View, Edit, Delete) -->
            <button class="btn bg-faded-accent btn-icon me-2" type="button" data-bs-toggle="tooltip" title="View"><i class="ci-download text-accent"></i></button>
            <button class="btn bg-faded-info btn-icon me-2" type="button" data-bs-toggle="tooltip" title="Edit"><i class="ci-edit text-info"></i></button>
            <button class="btn bg-faded-danger btn-icon" type="button" data-bs-toggle="tooltip" title="Delete"><i class="ci-trash text-danger"></i></button>
        </div>
    </div>
    @endforeach

      

    <!-- Pagination-->
    <nav class="d-md-flex justify-content-between align-items-center text-center text-md-start mt-4" aria-label="Page navigation">
        <div class="d-md-flex align-items-center w-100"><span class="fs-sm text-muted me-md-3">Showing 5 of 9 products</span>
          <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
            <div class="progress-bar" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <button class="btn btn-outline-primary btn-sm" type="button">More products</button>
      </nav>

</section>

@endsection
