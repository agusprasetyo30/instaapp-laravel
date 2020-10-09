<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        return view('instaapp.post.index');
    }

    public function addPost()
    {
        return view('instaapp.post.tambah-post');
    }
}
