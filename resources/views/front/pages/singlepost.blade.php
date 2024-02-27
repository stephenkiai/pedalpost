@extends('front.layouts.app')

@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'View post')
@section('content')
<main class="page-wrapper">

    <!-- Blog Title -->
    <div class="page-title-overlap bg-accent pt-4">
        <div class="container">
            <div class="text-center my-5">

                <h1 class="fw-bolder text-white">Welcome To PedalPost!</h1>

                <p class="lead mb-0 text-white">View Post.</p>

            </div>
        </div>
    </div>

<div class="container pb-5">
    <div class="row justify-content-center pt-5 mt-md-2">
      <div class="col-lg-9">
        <!-- Post meta-->
        <div class="d-flex flex-wrap justify-content-between align-items-center pb-4 mt-n1">
          <div class="d-flex align-items-center fs-sm mb-2"><a class="blog-entry-meta-link" href="#">
              <div class="blog-entry-author-ava"><img src="img/blog/meta/02.jpg" alt="Cynthia Gomez"></div>Cynthia Gomez</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jul 17</a></div>
          <div class="fs-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="#comments" data-scroll><i class="ci-message"></i>3</a></div>
        </div>
        <!-- Gallery-->
        <div class="gallery row pb-2">
          <div class="col-sm-8"><a class="gallery-item rounded-3 mb-grid-gutter" href="img/blog/single/01.jpg" data-bs-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;Gallery image caption #1&lt;/h6&gt;"><img src="img/blog/single/th01.jpg" alt="Gallery image"><span class="gallery-item-caption">Gallery image caption #1</span></a></div>
          <div class="col-sm-4"><a class="gallery-item rounded-3 mb-grid-gutter" href="img/blog/single/02.jpg" data-bs-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;Gallery image caption #2&lt;/h6&gt;"><img src="img/blog/single/th02.jpg" alt="Gallery image"><span class="gallery-item-caption">Gallery image caption #2</span></a><a class="gallery-item rounded-3 mb-grid-gutter" href="img/blog/single/03.jpg" data-bs-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;Gallery image caption #3&lt;/h6&gt;"><img src="img/blog/single/th03.jpg" alt="Gallery image"><span class="gallery-item-caption">Gallery image caption #3</span></a></div>
        </div>
        <!-- Post content-->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minima veniam, quis nostrum exercitationem occaecat cupidatat non proident.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <blockquote class="testimonial my-4 pt-4 pb-2">
          <div class="card border-0 shadow-sm"><span class="testimonial-mark"></span>
            <div class="card-body fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
          </div>
          <footer class="d-flex align-items-center justify-content-center pt-4"><img class="rounded" src="img/testimonials/01.jpg" width="50" alt="Mary Grant">
            <div class="ps-3">
              <h6 class="fs-sm mb-n1">Mary Alice Grant</h6><span class="fs-ms text-muted">Shopoholic</span>
            </div>
          </footer>
        </blockquote>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
        <!-- Post tags + sharing-->
        <div class="d-flex flex-wrap justify-content-between pt-2 pb-4 mb-1">
          <div class="mt-3 me-3"><a class="btn-tag me-2 mb-2" href="#">#merchandise</a><a class="btn-tag mb-2" href="#">#printed tshirts</a></div>
          <div class="mt-3"><span class="d-inline-block align-middle text-muted fs-sm me-3 mt-1 mb-2">Share post:</span><a class="btn-social bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a></div>
        </div>
        <!-- Post navigation-->
        <nav class="entry-navigation" aria-label="Post navigation"><a class="entry-navigation-link" href="#" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex align-items-center&quot;&gt;&lt;img src=_img/blog/navigation/01.html width=&quot;60&quot; class=&quot;rounded&quot; alt=&quot;Post thumb&quot;&gt;&lt;div class=&quot;ps-3&quot;&gt;&lt;h6 class=&quot;fs-sm fw-semibold mb-0&quot;&gt;How to choose perfect shoes for running&lt;/h6&gt;&lt;span class=&quot;d-block fs-xs text-muted&quot;&gt;by Susan Mayer&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"><i class="ci-arrow-left me-2"></i><span class="d-none d-sm-inline">Prev post</span></a><a class="entry-navigation-link" href="blog-list.html"><i class="ci-view-list me-2"></i><span class="d-none d-sm-inline">All posts</span></a><a class="entry-navigation-link" href="#" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex align-items-center&quot;&gt;&lt;img src=_img/blog/navigation/02.html width=&quot;60&quot; class=&quot;rounded&quot; alt=&quot;Post thumb&quot;&gt;&lt;div class=&quot;ps-3&quot;&gt;&lt;h6  class=&quot;fs-sm fw-semibold mb-0&quot;&gt;Factors behind smart watches popularity&lt;/h6&gt;&lt;span class=&quot;d-block fs-xs text-muted&quot;&gt;by Logan Coleman&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"><span class="d-none d-sm-inline">Next post</span><i class="ci-arrow-right ms-2"></i></a></nav>


      </div>
    </div>
  </div>
</main>
@endsection
