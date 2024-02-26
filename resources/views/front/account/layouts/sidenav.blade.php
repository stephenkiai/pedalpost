

<!-- Sidebar-->
<aside class="col-lg-4 pe-xl-5">
    <!-- Account menu toggler (hidden on screens larger 992px)-->
    <div class="d-block d-lg-none p-4">
        <a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse">
            <i class="ci-menu me-2"></i>Dashboard
        </a>
    </div>

    <!-- Actual menu-->
    <div class="h-100 border-end mb-2">
      <div class="d-lg-block collapse" id="account-menu">

        <div class="bg-secondary p-4">
            <!--make 'admin' dynamic depending on logged user-->
          <h3 class="fs-sm mb-0 text-muted">Admin Dashboard</h3>
        </div>

        <ul class="list-unstyled mb-0">
            <li class="border-bottom mb-0">
                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('all-users') }}">
                    <i class="ci-dollar opacity-60 me-2"></i>All Users
                </a>
            </li>

            <li class="border-bottom mb-0">
                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('post') }}">
                    <i class="ci-dollar opacity-60 me-2"></i>My Posts
                </a>
            </li>

            <li class="border-bottom mb-0">
                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('category') }}">
                    <i class="ci-dollar opacity-60 me-2"></i>Categories
                </a>
            </li>

            <li class="border-bottom mb-0">
                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('new-category') }}">
                    <i class="ci-package opacity-60 me-2"></i>Add New Category
                </a>
            </li>

            <li class="border-bottom mb-0">
                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('new-post') }}">
                    <i class="ci-cloud-upload opacity-60 me-2"></i>Add New Post
                </a>
            </li>

            <li class="mb-0">
                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html">
                    <i class="ci-sign-out opacity-60 me-2"></i>Sign out
                </a>
            </li>

        </ul>
        <hr>
      </div>
    </div>
  </aside>
