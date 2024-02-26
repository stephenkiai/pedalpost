@extends('front.account.layouts.app')

@section('content')
<section class="col-lg-8 pt-lg-4 pb-4 mb-4">
    <!-- Title-->
    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom mb-4">
            <h2 class="h3 py-2 me-2 text-center text-sm-start">Category List</h2>

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

    <!--show categories-->
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Number of Posts</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->posts_count }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</section>
@endsection
