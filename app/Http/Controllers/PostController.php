<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostController extends Controller
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

    public function view($slug)
    {
        $validator = Validator::make(['slug' => $slug], [
            'slug' => 'required|alpha_dash'
        ]);
          
        if($validator->fails()){
            abort(404);
        }

        return view('post', ['post' => Post::find($slug)]);
    }
}