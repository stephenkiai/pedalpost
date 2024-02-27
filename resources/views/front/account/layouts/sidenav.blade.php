

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
                <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
            </div>
            <div>
                <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('dashboard1') }}">
                                <i class="ci-dollar opacity-60 me-2"></i>Home
                            </a>
                        </li>


                    <!-- link for admin only-->
                    @if(auth()->user()->role === 'admin')
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('') }}">
                                <i class="ci-dollar opacity-60 me-2"></i>All Users
                            </a>
                        </li>
                    @endif

                    <!-- links for admin and editor only -->
                    @if(auth()->user()->role === 'admin' || auth()->user()->role === 'editor')
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('post.all') }}">
                                <i class="ci-dollar opacity-60 me-2"></i>All Posts
                            </a>
                        </li>

                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('category.index') }}">
                                <i class="ci-dollar opacity-60 me-2"></i>Categories
                            </a>
                        </li>

                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('category.create') }}">
                                <i class="ci-package opacity-60 me-2"></i>Add New Category
                            </a>
                        </li>
                    @endif

                        <!--links for the rest of the gang -->
                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('post.index') }}">
                                <i class="ci-dollar opacity-60 me-2"></i>My Posts
                            </a>
                        </li>

                        <li class="border-bottom mb-0">
                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('post.create') }}">
                                <i class="ci-cloud-upload opacity-60 me-2"></i>Add New Post
                            </a>
                        </li>

                    </ul>
                <hr>
            </div>
        </div>
</aside>
