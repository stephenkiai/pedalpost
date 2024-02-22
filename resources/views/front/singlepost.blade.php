@extends('front.main')

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
        <!-- Comments-->
        <div class="pt-2 mt-5" id="comments">
          <h2 class="h4">Comments<span class="badge bg-secondary fs-sm text-body align-middle ms-2">3</span></h2>
          <!-- comment-->
          <div class="d-flex align-items-start py-4 border-bottom"><img class="rounded-circle" src="img/testimonials/04.jpg" width="50" alt="Laura Willson">
            <div class="ps-3">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="fs-md mb-0">Laura Willson</h6><a class="nav-link-style fs-sm fw-medium" href="#"><i class="ci-reply me-2"></i>Reply</a>
              </div>
              <p class="fs-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 7, 2019</span>
              <!-- comment reply-->
              <div class="d-flex align-items-start border-top pt-4 mt-4"><img class="rounded-circle" src="img/testimonials/03.jpg" width="50" alt="Michael Davis">
                <div class="ps-3">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="fs-md mb-0">Michael Davis</h6>
                  </div>
                  <p class="fs-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 13, 2019</span>
                </div>
              </div>
            </div>
          </div>
          <!-- comment-->
          <div class="d-flex align-items-start py-4"><img class="rounded-circle" src="img/testimonials/02.jpg" width="50" alt="Benjamin Miller">
            <div class="ps-3">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="fs-md mb-0">Benjamin Miller</h6><a class="nav-link-style fs-sm fw-medium" href="#"><i class="ci-reply me-2"></i>Reply</a>
              </div>
              <p class="fs-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Aug 15, 2019</span>
            </div>
          </div>
          <!-- Post comment form-->
          <div class="card border-0 shadow mt-2 mb-4">
            <div class="card-body">
              <div class="d-flex align-items-start"><img class="rounded-circle" src="img/testimonials/01.jpg" width="50" alt="Mary Alice">
                <form class="w-100 needs-validation ms-3" novalidate>
                  <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Write comment..." required></textarea>
                    <div class="invalid-feedback">Please write your comment.</div>
                  </div>
                  <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related posts-->
  <div class="bg-secondary py-5">
    <div class="container py-3">
      <h2 class="h4 text-center pb-4">You may also like</h2>
      <div class="tns-carousel">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
          <!-- article-->
          <article><a class="blog-entry-thumb mb-3" href="#"><img src="img/blog/03.jpg" alt="Post"></a>
            <div class="d-flex align-items-center fs-sm mb-2"><a class="blog-entry-meta-link" href="#">by Rafael Marquez</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Sep 16</a></div>
            <h3 class="h6 blog-entry-title"><a href="#">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h3>
          </article>
          <!-- article-->
          <article><a class="blog-entry-thumb mb-3" href="#"><img src="img/blog/04.jpg" alt="Post"></a>
            <div class="d-flex align-items-center fs-sm mb-2"><a class="blog-entry-meta-link" href="#">by Emma Gallaher</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Sep 5</a></div>
            <h3 class="h6 blog-entry-title"><a href="#">Payments Made Easy. How New Technology will Affect E-Commerce Industry Worldwide?</a></h3>
          </article>
          <!-- article-->
          <article><a class="blog-entry-thumb mb-3" href="#"><img src="img/blog/02.jpg" alt="Post"></a>
            <div class="d-flex align-items-center fs-sm mb-2"><a class="blog-entry-meta-link" href="#">by Emma Gallaher</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 28</a></div>
            <h3 class="h6 blog-entry-title"><a href="#">Shopping Tips. Complete Guide of Places Where to Buy Cheap and Get Cashback</a></h3>
          </article>
          <!-- article-->
          <article><a class="blog-entry-thumb mb-3" href="#"><img src="img/blog/01.jpg" alt="Post"></a>
            <div class="d-flex align-items-center fs-sm mb-2"><a class="blog-entry-meta-link" href="#">by Emma Gallaher</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 28</a></div>
            <h3 class="h6 blog-entry-title"><a href="#">Top 10 New Trends in Suburban High Fashion</a></h3>
          </article>
        </div>
      </div>
    </div>
  </div>

