<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::all()->sortBy('name');
        return view('home', compact('articles'))->with([
            'message_success' => Session::get('message_success')
        ]);
    }

    public function greeting()
    {
        return view('greeting');
    }
        
}
