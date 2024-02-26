@extends('front.account.layouts.app')

@section('content')
<section class="col-lg-8 pt-lg-4 pb-4 mb-4">
    <!-- Title-->
    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom mb-4">
            <h2 class="h3 py-2 me-2 text-center text-sm-start">Edit Category</h2>

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

    <!--edit categories-->
    <form action="{{ route('category.update', $category->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body">
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
                <!-- Include success message -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                    <div class="col-md-9">
                        <div class="mb-3">
                            <label class="form-label">New Category name</label>
                            <input type="text" class="form-control" name="category_name" placeholder="{{ $category->category_name }}">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-accent">Save Changes</button>

            </div>
        </div>

    </form>




</section>
@endsection
