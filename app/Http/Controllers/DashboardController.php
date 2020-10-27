<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexDashboard()
    {
        $posts = Post::with(['users', 'comments'])->orderBy('created_at', 'DESC')->get();

        // dd($posts);
        return view('instaapp.index', compact('posts'));
    }
}
