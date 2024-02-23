<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.home');
    }

    /**
     * Show the About-Us resource.
     */
    public function about()
    {
        return view('front.pages.about');
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
