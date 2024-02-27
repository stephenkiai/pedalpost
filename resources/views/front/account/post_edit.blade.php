@extends('front.account.layouts.app')

@section('content')
<section class="col-lg-8 pt-lg-4 pb-4 mb-4">
    <!-- Title-->
    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom mb-4">
            <h2 class="h3 py-2 me-2 text-center text-sm-start">Edit Post</h2>

        </div>
    </div>

    <form action="{{ route('post.update', $post->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body">
                <div class="col-md-9">
                    <div class="mb-3">
                        <label class="form-label">Edit Post title</label>
                        <input type="text" class="form-control" name="post_title" placeholder="Enter post title" value="{{ $post->post_title }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Edit Post slug</label>
                        <input type="text" class="form-control" name="post_slug" placeholder="Enter post slug" value="{{ $post->post_slug }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Edit Post content</label>
                        <textarea class="form-control" name="post_content" rows="6" placeholder="Post content">{{ $post->post_content }}</textarea>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="form-label">Edit Post category</div>
                        <select class="form-select" name="post_category" id="post_category">
                            <option value="Not selected"></option>
                            <!-- Loop over all categories -->
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected @endif>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category ID(select category to autofill)</label>
                        <input class="form-control" name="category_id" id="category_id" placeholder="Category ID" value="{{ $post->category_id }}">
                    </div>

                    <div class="mb-3">
                        <div class="form-label"> Change Featured image</div>
                        <input type="file" class="form-control" name="featured_image" id="featured_image_input" accept="image/*">
                    </div>

                    <div class="image_holder mb-2 bg-primary" style="max-width: 250px">
                        <img src="{{ $post->featured_image }}" alt="{{ substr($post->post_title, 0, 5) }}" class="img-thumbnail" id="image_preview">
                    </div>
                    <button type="submit" class="btn btn-accent">Save changes</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        // Get select element
        const postCategorySelect = document.getElementById('post_category');
        // Get input element
        const categoryIdInput = document.getElementById('category_id');

        // Event listener to the select element
        postCategorySelect.addEventListener('change', function() {
            // Set value of input element to the selected category ID
            categoryIdInput.value = this.value;
        });

        // Image preview
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('featured_image_input');
            const imagePreview = document.getElementById('image_preview');

            if (fileInput && imagePreview) {
                fileInput.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            imagePreview.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    } else {
                        imagePreview.src = '';
                    }
                });
            } else {
                console.error('File input or image preview element not found.');
            }
        });
    </script>



</section>
@endsection
