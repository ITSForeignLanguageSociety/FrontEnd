<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index() {
        $response = Http::get('https://rimen.herokuapp.com/api/blog');
        $blogs = $response->json();

        return view('blog', compact('blogs'));
    }

    public function show(Request $request, $slug)
    {
        $response = Http::get('https://rimen.herokuapp.com/api/post/' . $slug);
        $post = $response->json();

        return view('post', compact('post'));
    }
}
