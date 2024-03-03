<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the posts data.
     */
    public function index()
    {
        //retrieve posts for featured post section
        $featuredPosts = Post::withCount('comments')->inRandomOrder()->limit(3)->get();
        //dd($featuredPosts);

        // Paginate posts.all
        $posts = Post::withCount('comments')->paginate(10);

        //dd($posts);
        return view('front.home', [
            'featuredPosts' => $featuredPosts,
            'posts' => $posts,

        ]);
    }

    /**
     * Show single post.
     */
    public function single_post($id)
    {
        // Retrieve current post
        $post = Post::findOrFail($id);

        // Retrieve previous post
        $previousPost = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();

        // Retrieve next post
        $nextPost = Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first();

        // Retrieve comments for the current post
        $comments = Comment::where('post_id', $post->id)->get();

        // Retrieve total number of comments for the post
        $totalComments = $comments->count();

        // Pass everything to the view
        return view('front.pages.singlepost', [
            'post' => $post,
            'previousPost' => $previousPost,
            'nextPost' => $nextPost,
            'comments' => $comments,
            'totalComments' => $totalComments,
        ]);

        // Retrieve post using the ID
        //$post = Post::findOrFail($id);
        //dd($post);
        //return view('front.pages.singlepost')->with('post', $post);
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return view('front.pages.about');
    }

    /**
     * Show the contact-us page.
     */
    public function contact()
    {
        return view('front.pages.contact');
    }


}
