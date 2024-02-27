@extends('front.account.layouts.app')

@section('content')
<section class="col-lg-8 pt-lg-4 pb-4 mb-4">
    <!-- Title-->
    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom mb-4">
            <h2 class="h3 py-2 me-2 text-center text-sm-start">All Posts</h2>

        </div>
    </div>

    <!-- Show posts -->
<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Owner</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->post_title }}</td>
                    <td>{{ $post->post_slug }}</td>
                    <td>{{ $post->category->category_name }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>

                        <!-- Delete Button -->
                        <form method="POST" action="{{ route('post.delete', $post->id) }}" style="display: inline;">
                            @csrf
                            @method('HEAD')
                            <button class="btn bg-faded-danger btn-icon" type="submit" data-bs-toggle="tooltip" title="Delete">
                                <i class="ci-trash text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



</section>
@endsection
