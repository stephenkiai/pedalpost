<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //retrieve posts for featured post section
        $featuredPosts = Post::inRandomOrder()->limit(3)->get();
        //dd($featuredPosts);

        // Paginate posts.all
        $posts = Post::paginate(10);

        return view('front.home')->with('featuredPosts', $featuredPosts)->with('posts', $posts);
    }

    /**
     * Show the About-Us resource.
     */
    public function single_post()
    {
        return view('front.pages.singlepost');
    }

    /**
     * Show the gallery resource.
     */
    public function gallery()
    {
        return view('front.pages.gallery');
    }

    /**
     * Show the contact-us resource.
     */
    public function contact()
    {
        return view('front.pages.contact');
    }


}
