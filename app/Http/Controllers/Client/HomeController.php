<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function index() 
    {
        return view('user.index');
    }

    public function about() 
    {
        return view('user.about');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function blog_single()
    {
        $post = Post::where('user_id', 7)->orderBy('created_at', 'desc')->first();
        return view('user.blog-single', compact('post'));
    }
}
