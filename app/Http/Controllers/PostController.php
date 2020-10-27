<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Fungsi untuk menampilkan post dan komentar
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
     * Fungsi untuk menampilkan halaman tambah post
     *
     * @return void
     */
    public function addPostPage()
    {
        return view('instaapp.post.tambah-post');
    }

    /**
     * Untuk menyimpan gambar dan postingan
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
            ->route('user.profile', \Auth::user()->username)
            ->with('success', 'Berhasil menambahkan postingan baru');
    }

    /**
     * Fungsi untuk menampilkan halaman untuk update
     *
     * @param [type] $username
     * @param [type] $id
     * @return void
     */
    public function editPost($username, $id)
    {
        // Mengambil berdasarkan username profil dan id post
        $post = Post::whereHas('users', function($query) use ($username) {
            return $query->where('username', '=', $username);
        })->where('id', '=', $id)
            ->get()->first();

        // pengguna
        $user = User::where('username', '=', $username)->first();

        // Cek apakah postingnn yang diupdate adalah post user atau tidak
        if (\Auth::user()->username == $user['username']) {
            return view('instaapp.post.update', compact('post', 'user'));

        } else {
            abort(404);
        }
    }

    /**
     * Fungsi untuk mengupdate postingan pengguna
     *
     * @param Request $request
     * @return void
     */
    public function updatePost(Request $request, $username, $id)
    {
        $post = Post::findOrFail($id);

        $post->content = $request->get('caption');
        
        $image = $request->file('photo');

        if ($image) {
            if ($post->image != "" && file_exists(storage_path('app/public/' . $post->image))) {
                Storage::delete('public/' . $post->image);
            }

            $cover_path = uploadOriginalImage($image, $username, 'posts');
            $post->image = $cover_path;
        }

        $post->save();

        return redirect()
            ->route('user.profile', $username)
            ->with('success', 'Postingan berhasil diupdate');
        // dd($request->all(), $username, $id);
    }

    /**
     * Fungsi untuk menghapus 
     *
     * @param [type] $id
     * @return void
     */
    public function deletePost($username, $id)
    {
        $post = Post::findOrFail($id);

        if (\Auth::user()->username == $username) {
            // Menghapus gambar
            if ($post->image != "" && file_exists(storage_path('app/public/' . $post->image))) {
                Storage::delete('public/' . $post->image);
            }

            $post->delete();

            return redirect()
                ->route('user.profile', $username)
                ->with('success', 'Postingan berhasil dihapus');
        
        } else {
            abort(404);
        }

    }

    /**
     * Fungsi untuk menambahkan komentar
     *
     * @param Request $request
     * @return void
     */
    public function addComment(Request $request)
    {
        $comment = new Comment();

        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $request->get('post_id');

        // Ini digunakan dikarenakan pada dashboard post pengguna ditampilkan semua
        // Jadi harus ada pembeda untuk menambahkan komentar
        if ($request->get('status')) {
            $comment->comment = $request->get('comment' . $request->get('post_id'));

        } else {
            // Ini untuk post yang ditampilkan spesifik
            $comment->comment = $request->get('comment');
        }

        $comment->save();

        return redirect()->back();
    }

    /**
     * Fungsi untuk menghapus komentar
     *
     * @param [type] $id
     * @return void
     */
    public function deleteComment($id)
    {
        $comment = Comment::findOrFail($id);

        // dd($comment);
        $comment->delete();

        return redirect()->back();
    }

    /**
     * Untuk menambahkan komentar
     *
     * @param Request $request
     * @return void
     */
    public function addLike(Request $request) {

        $post = Post::find($request->id);
        $response = \Auth::user()->toggleLike($post);

        return response()->json(['success' => $response]);
    }
}
