<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
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
        return view('posts', ['posts' => Post::all()]);
    }

    public function view(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}