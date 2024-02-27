

<!-- Dashboard header-->
<div class="page-title-overlap bg-accent pt-4">
    <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
      <div class="d-flex align-items-center pb-3">
        <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem;">
            <img class="rounded-circle" src="{{ url('img/blog/logo.png') }}" alt="{{ Auth::user()->name }}"></div>
        <div class="ps-3">
          <h3 class="text-light fs-lg mb-0">{{ Auth::user()->name }}</h3>
          <!--show account sign-up date or email-->
            @if(Auth::user()->created_at)
                <span class="d-block text-light fs-ms opacity-60 py-1">Member since {{ Auth::user()->created_at->format('F Y') }}</span>
            @else
                <span class="d-block text-light fs-ms opacity-60 py-1">{{ Auth::user()->email }}</span>
            @endif

        </div>
      </div>

    @php
        // Retrieve posts created by the current user
        $userPostsCount = Auth::user()->posts()->count();
    @endphp

      <div class="d-flex">
        <div class="text-sm-end me-5">
          <div class="text-light fs-base">Total Post</div>
          <h3 class="text-light">{{ $userPostsCount }}</h3>
        </div>
        <div class="text-sm-end">
          <div class="text-light fs-base">Posts Impact</div>
          <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i>
            <i class="star-rating-icon ci-star-filled active"></i>
            <i class="star-rating-icon ci-star-filled active"></i>
            <i class="star-rating-icon ci-star-filled active"></i>
            <i class="star-rating-icon ci-star"></i>
          </div>
          <div class="text-light opacity-60 fs-xs">Read 77 times</div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
