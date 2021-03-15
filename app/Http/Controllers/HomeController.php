<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function posts()
    {
        return view('pages.posts');
    }

    public function grid()
    {
        return view('pages.grid');
    }

    public function masonry()
    {
        return view('pages.masonry');
    }

    public function post($id)
    {
        return view('pages.post');
    }


//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function home()
    {
        return view('home');
    }
}
