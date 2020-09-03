<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $tweets=Tweet::latest()->get();
        return view('home',[
//            'tweets'=>$tweets
            'tweets'=>auth()->user()->timeline()
        ]);
    }
}
