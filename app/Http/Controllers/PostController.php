<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function post($username, $id)
    {
        // Mengambil berdasarkan username profil dan id post
        $post = Post::whereHas('users', function($query) use ($username) {
            return $query->where('username', '=', $username);
        })->where('id', '=', $id)
            ->get()->first();

        // pengguna
        $user = User::where('username', '=', $username)->first();

        // Komentar
        $comments = Comment::with(['users', 'posts'])
            // ->where('user_id', '=', $user['id'])
            ->where('post_id', '=', $id)
            ->get();

        // dd($comments);

        return view('instaapp.post.index', compact('user', 'post', 'comments'));
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

        $post->user_id = \Auth::user()->id;
        $post->content = $request->get('caption');

        $image = $request->file('image');

        if ($image) {
            $cover_path = uploadOriginalImage($image, \Auth::user()->username, 'posts');
            $post->image = $cover_path;
        }

        $post->save();

        return redirect()
            ->route('profile', \Auth::user()->username)
            ->with('success', 'Berhasil menambahkan postingan baru');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function addComment(Request $request)
    {
        $comment = new Comment();

        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $request->get('post_id');
        $comment->comment = $request->get('comment');

        $comment->save();

        return redirect()->back();
    }

}
