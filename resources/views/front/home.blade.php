@extends('front.layouts.app')


@section('content')
    <!-- Sign in / sign up modal--
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div> -->


    <main class="page-wrapper">
      <!-- Blog Title -->
      <div class="py-5 bg-dark border-bottom mb-4">
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
                <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Sep 10</span><img src="img/blog/featured/01.jpg" alt="Featured post"></a>
                <div class="d-flex justify-content-between mb-2 pt-1">
                    <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">Healthy Food - New Way of Living</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>13</a>
                </div>
                <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                    <div class="blog-entry-author-ava"><img src="img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes</a><span class="blog-entry-meta-divider"></span>
                    <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Lifestyle</a>, <a href='#' class='blog-entry-meta-link'>Nutrition</a></div>
                </div>
                </article>
                <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Aug 27</span><img src="img/blog/featured/02.jpg" alt="Featured post"></a>
                <div class="d-flex justify-content-between mb-2 pt-1">
                    <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">Online Payment Security Tips for Shoppers</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>9</a>
                </div>
                <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                    <div class="blog-entry-author-ava"><img src="img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez</a><span class="blog-entry-meta-divider"></span>
                    <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Online shpopping</a></div>
                </div>
                </article>
                <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Aug 16</span><img src="img/blog/featured/03.jpg" alt="Featured post"></a>
                <div class="d-flex justify-content-between mb-2 pt-1">
                    <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">We Launched New Store in San Francisco!</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>23</a>
                </div>
                <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                    <div class="blog-entry-author-ava"><img src="img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred</a><span class="blog-entry-meta-divider"></span>
                    <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
                </div>
                </article>
            </div>
            </div>
            <hr class="mt-5">
            <div class="row pt-5 mt-md-2">

            <!-- Entries grid-->
            <section class="col-lg-8">
                <div class="masonry-grid" data-columns="2">
                <!-- Entry-->
                <article class="masonry-grid-item">
                    <div class="card">
                    <div class="card-body">
                        <h2 class="h6 blog-entry-title"><a href="blog-single-sidebar.html">Global Travel and Vacations on a Tight Budget</a></h2>
                        <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p><a class="btn-tag me-2 mb-2" href="#">Travel</a><a class="btn-tag me-2 mb-2" href="#">Personal finance</a>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-xs"><a class="blog-entry-meta-link" href="#">
                        <div class="blog-entry-author-ava"><img src="img/blog/meta/01.jpg" alt="Emma Gallaher"></div>Emma Gallaher</a>
                        <div class="ms-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Aug 15</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>8</a></div>
                    </div>
                    </div>
                </article>
                <!-- Entry-->
                <article class="masonry-grid-item">
                    <div class="card"><a class="blog-entry-thumb" href="blog-single-sidebar.html"><img class="card-img-top" src="img/blog/01.jpg" alt="Post"></a>
                    <div class="card-body">
                        <h2 class="h6 blog-entry-title"><a href="blog-single-sidebar.html">Top New Trends in Suburban High Fashion</a></h2>
                        <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p><a class="btn-tag me-2 mb-2" href="#">Shopping</a><a class="btn-tag me-2 mb-2" href="#">Fashion</a>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-xs"><a class="blog-entry-meta-link" href="#">
                        <div class="blog-entry-author-ava"><img src="img/blog/meta/02.jpg" alt="Cynthia Gomez"></div>Cynthia Gomez</a>
                        <div class="ms-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Jul 23</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>19</a></div>
                    </div>
                    </div>
                </article>
                <!-- Entry-->
                <article class="masonry-grid-item">
                    <div class="card"><a class="blog-entry-thumb" href="blog-single-sidebar.html"><img class="card-img-top" src="img/blog/02.jpg" alt="Post"></a>
                    <div class="card-body">
                        <h2 class="h6 blog-entry-title"><a href="blog-single-sidebar.html">Shopping Tips. Places Where to Buy Cheap</a></h2>
                        <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p><a class="btn-tag me-2 mb-2" href="#">Shopping</a><a class="btn-tag me-2 mb-2" href="#">Personal finance</a>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-xs"><a class="blog-entry-meta-link" href="#">
                        <div class="blog-entry-author-ava"><img src="img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred</a>
                        <div class="ms-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Jul 6</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>15</a></div>
                    </div>
                    </div>
                </article>
                <!-- Entry-->
                <article class="masonry-grid-item">
                    <div class="card">
                    <div class="card-body">
                        <h2 class="h6 blog-entry-title"><a href="blog-single-sidebar.html">Google Pay is Now Available in All Outlets</a></h2>
                        <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p><a class="btn-tag me-2 mb-2" href="#">Cartzilla news</a>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-xs"><a class="blog-entry-meta-link" href="#">
                        <div class="blog-entry-author-ava"><img src="img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes</a>
                        <div class="ms-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Jun 12</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>7</a></div>
                    </div>
                    </div>
                </article>
                <!-- Entry-->
                <article class="masonry-grid-item">
                    <div class="card gallery" data-video="true"><a class="blog-entry-thumb gallery-item video-item" href="https://www.youtube.com/watch?v=mzhvR4wm__M"><span class="blog-entry-meta-label fs-sm"><i class="ci-video"></i><span class="fs-ms">Watch video</span></span><img class="card-img-top" src="img/blog/03.jpg" alt="Post"></a>
                    <div class="card-body">
                        <h2 class="h6 blog-entry-title"><a href="blog-single-sidebar.html">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h2>
                        <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p><a class="btn-tag me-2 mb-2" href="#">Cartzilla news</a>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-xs"><a class="blog-entry-meta-link" href="#">
                        <div class="blog-entry-author-ava"><img src="img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez</a>
                        <div class="ms-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">May 29</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>31</a></div>
                    </div>
                    </div>
                </article>
                <!-- Entry-->
                <article class="masonry-grid-item">
                    <div class="card"><a class="blog-entry-thumb" href="blog-single-sidebar.html"><img class="card-img-top" src="img/blog/04.jpg" alt="Post"></a>
                    <div class="card-body">
                        <h2 class="h6 blog-entry-title"><a href="blog-single-sidebar.html">Payments Made Easy. How New Technology will Affect E-Commerce Industry Worldwide?</a></h2>
                        <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p><a class="btn-tag me-2 mb-2" href="#">Shopping</a><a class="btn-tag me-2 mb-2" href="#">Technology</a>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-xs"><a class="blog-entry-meta-link" href="#">
                        <div class="blog-entry-author-ava"><img src="img/blog/meta/01.jpg" alt="Emma Gallaher"></div>Emma Gallaher</a>
                        <div class="ms-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">May 13</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>28</a></div>
                    </div>
                    </div>
                </article>
                </div>
                <hr class="mb-4">

                <!-- Pagination-->
                <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
                </ul>
                <ul class="pagination">
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                </ul>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
                </ul>
                </nav>
            </section>
            <aside class="col-lg-4">

                <!-- Sidebar-->
                <div class="offcanvas offcanvas-collapse offcanvas-end border-start ms-lg-auto" id="blog-sidebar" style="max-width: 22rem;">
                    <div class="offcanvas-header align-items-center shadow-sm">
                        <h2 class="h5 mb-0">Sidebar</h2>
                        <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close">

                        </button>
                    </div>
                    <div class="offcanvas-body py-grid-gutter py-lg-1 px-lg-4" data-simplebar data-simplebar-auto-hide="true">
                        <!-- Categories-->
                        <div class="widget widget-links mb-grid-gutter pb-grid-gutter border-bottom mx-lg-2">
                            <h3 class="widget-title">Blog categories</h3>
                            <ul class="widget-list">
                                <li class="widget-list-item">
                                    <a class="widget-list-link d-flex justify-content-between align-items-center" href="#">
                                        <span>Online shopping</span>
                                        <span class="fs-xs text-muted ms-3">18</span>
                                    </a>
                                </li>
                                <li class="widget-list-item">
                                    <a class="widget-list-link d-flex justify-content-between align-items-center" href="#">
                                        <span>Fashion</span>
                                        <span class="fs-xs text-muted ms-3">25</span>
                                    </a>
                                </li>
                                <li class="widget-list-item">
                                    <a class="widget-list-link d-flex justify-content-between align-items-center" href="#">
                                        <span>Personal finance</span>
                                        <span class="fs-xs text-muted ms-3">13</span>
                                    </a>
                                </li>
                                <li class="widget-list-item">
                                    <a class="widget-list-link d-flex justify-content-between align-items-center" href="#">
                                        <span>Travel &amp; vacation</span>
                                        <span class="fs-xs text-muted ms-3">7</span>
                                    </a>
                                </li>
                                <li class="widget-list-item">
                                    <a class="widget-list-link d-flex justify-content-between align-items-center" href="#">
                                        <span>Lifestyle</span>
                                        <span class="fs-xs text-muted ms-3">34</span>
                                    </a>
                                </li>
                                <li class="widget-list-item">
                                    <a class="widget-list-link d-flex justify-content-between align-items-center" href="#">
                                        <span>Technology</span>
                                        <span class="fs-xs text-muted ms-3">6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    <!-- Trending posts-->
                    <div class="widget mb-grid-gutter pb-grid-gutter border-bottom mx-lg-2">
                        <h3 class="widget-title">Trending posts</h3>
                        <div class="d-flex align-items-center mb-3">
                            <a class="flex-shrink-0" href="blog-single.html">
                                <img class="rounded" src="img/blog/widget/01.jpg" width="64" alt="Post image">
                            </a>
                            <div class="ps-3">
                                <h6 class="blog-entry-title fs-sm mb-0">
                                    <a href="blog-single.html">Retro Cameras are Trending. Why so Popular?</a>
                                </h6>
                                <span class="fs-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Andy Williams</a></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <a class="flex-shrink-0" href="blog-single.html">
                                <img class="rounded" src="img/blog/widget/02.jpg" width="64" alt="Post image"></a>
                            <div class="ps-3">
                                <h6 class="blog-entry-title fs-sm mb-0">
                                    <a href="blog-single.html">New Trends in Suburban Fashion</a>
                                </h6>
                                <span class="fs-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Susan Mayer</a></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="flex-shrink-0" href="blog-single.html">
                                <img class="rounded" src="img/blog/widget/03.jpg" width="64" alt="Post image">
                            </a>
                            <div class="ps-3">
                                <h6 class="blog-entry-title fs-sm mb-0">
                                    <a href="blog-single.html">Augmented Reality - Game Changing Technology</a>
                                </h6>
                                <span class="fs-ms text-muted">by <a href='#' class='blog-entry-meta-link'>John Doe</a></span>
                            </div>
                        </div>
                    </div>

                    <!-- Popular tags-->
                    <div class="widget pb-grid-gutter mx-lg-2">
                        <h3 class="widget-title">Popular tags</h3>
                        <a class="btn-tag me-2 mb-2" href="#">#fashion</a>
                        <a class="btn-tag me-2 mb-2" href="#">#gadgets</a>
                        <a class="btn-tag me-2 mb-2" href="#">#online shopping</a>
                        <a class="btn-tag me-2 mb-2" href="#">#top brands</a>
                        <a class="btn-tag me-2 mb-2" href="#">#travel</a>
                        <a class="btn-tag me-2 mb-2" href="#">#cartzilla news</a>
                        <a class="btn-tag me-2 mb-2" href="#">#personal finance</a>
                        <a class="btn-tag me-2 mb-2" href="#">#tips &amp; tricks</a>
                    </div>

                    <!-- Promo banner-->
                    <div class="bg-size-cover bg-position-center rounded-3 py-5 mx-lg-2" style="background-image: url(img/blog/banner-bg.jpg);">
                        <div class="py-5 px-4 text-center">
                            <h5 class="mb-2">Your Add Banner Here</h5>
                            <p class="fs-sm text-muted">Hurry up to reserve your spot</p>
                            <a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                        </div>
                    </div>
                </div>
                </div>
            </aside>
            </div>
        </div>
    </main>

  @endsection