<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve posts belonging to the logged-in user
        $posts = Post::where('user_id', auth()->id())->paginate(5);
        //dd($posts);

        return view('front.account.post_list')->with('posts', $posts)->with('user', $user);
    }

    /**
     * Display all posts to home page
     */
    public function all()
    {
        // Retrieve all posts from the database
        $posts = Post::all();

        return view('front.account.post_all')->with('posts', $posts);
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

        // Set the user_id to the authenticated user's id
        $post->user_id = Auth::id();

        // Handle featured image upload if provided
        if ($request->hasFile('featured_image')) {
            $imageFile = $request->file('featured_image');
            $originalFileName = $imageFile->getClientOriginalName();
            $extension = $imageFile->getClientOriginalExtension();
            $storagePath = 'public/images';
            $fileName = $originalFileName;
            $imagePath = $imageFile->storeAs($storagePath, $fileName);
            $post->featured_image = Storage::url($imagePath);
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
        return view('front.pages.singlepost');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //retrieve all categories
        $categories = Category::all(['id', 'category_name']);

        //dd($post);
        return view('front.account.post_edit')->with('post', $post)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
{
    // Validate the request data
    $validatedData = $request->validate([
        'post_title' => 'required|string|max:255',
        'post_content' => 'required|string',
        'post_slug' => 'required|string|unique:posts,post_slug,' . $post->id,
        'category_id' => 'required|exists:categories,id',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

    ]);

    // Update the post with the validated data
    $post->update([
        'post_title' => $validatedData['post_title'],
        'post_content' => $validatedData['post_content'],
        'post_slug' => $validatedData['post_slug'],
        'category_id' => $validatedData['category_id'],

    ]);

    // Handle featured image upload
    if ($request->hasFile('featured_image')) {
        $imageFile = $request->file('featured_image');
        $originalFileName = $imageFile->getClientOriginalName();
        $extension = $imageFile->getClientOriginalExtension();
        $storagePath = 'public/images';
        $fileName = $originalFileName;
        $imagePath = $imageFile->storeAs($storagePath, $fileName);
        $post->featured_image = Storage::url($imagePath);
    }

    return redirect()->route('post.index')->with('success', 'Post updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Post $post)
    {
        //dd($post);
        //$this->authorize('delete', $post);

        // Delete the post
        $post->delete();

        return redirect()->route('post.index')->with('success', 'Post deleted successfully.');
    }
}
