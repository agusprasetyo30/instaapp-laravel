<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function post()
    {
        return view('instaapp.post.index');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function addPostPage()
    {
        return view('instaapp.post.tambah-post');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function addPost(Request $request)
    {
        $post = new Post();

        $post->content = $request->get('caption');

        $image = $request->file('image');

        if ($image) {
            $cover_path = uploadOriginalImage($image, \Auth::user()->username, 'posts');
            $post->image = $cover_path;
        }

        $post->save();

        return redirect()
            ->route('profile')
            ->with('success', 'Berhasil menambahkan postingan baru');
    }

}
