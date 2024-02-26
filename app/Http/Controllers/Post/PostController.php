<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.account.post_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(['id', 'category_name']);
        //dd($categories);
        return view('front.account.new_post')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'post_title' => 'required|string',
            'post_content' => 'required',
            'post_slug' => 'required|string|unique:posts',
            'category_id' => 'required|exists:categories,id',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Create a new Post instance with the validated data
        $post = new Post();
        $post->post_title = $request->post_title;
        $post->post_content = $request->post_content;
        $post->post_slug = $request->post_slug;
        $post->category_id = $request->category_id;


        // Handle featured image upload if provided
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('images/post');
            $post->featured_image = $imagePath;
        }

        $post->save();

        // Redirect
        return redirect()->route('post.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('front.account.post{post-id}');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('front.account.edit{post-id}');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
