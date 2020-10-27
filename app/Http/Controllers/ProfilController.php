<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ProfilController extends Controller
{
    /**
     * Untuk menampilkan profil sesuai profil
     *
     * @return void
     */
    public function index($username)
    {
        $posts = Post::whereHas('users', function($query) use ($username) {
            return $query->where('username', '=', $username);
        })->get();

        $user = User::where('username', '=', $username)->first();
        
        // dd($user);
        return view('instaapp.profil.index', compact('posts', 'user'));
    }

    /**
     * Untuk menampilkan halaman pengaturan
     *
     * @return void
     */
    public function pengaturan()
    {
        return view('instaapp.profil.pengaturan');
    }

    /**
     * Fungsi untuk menampilkan halaman Update Profil
     *
     * @param Request $request
     * @return void
     */
    public function updateProfil(Request $request)
    {
        $user = User::findOrFail(\Auth::user()->id);

        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->bio = $request->get('bio');
        $user->email = $request->get('email');
        $user->telp = $request->get('telp');
        
        $avatar = $request->file('avatar');

        if ($avatar) {
            $cover_path = uploadOriginalImage($avatar, $request->get("username"), 'user');
            $user->avatar = $cover_path;
        }

        $user->save();

        return redirect()
            ->route('user.profile', $request->get('username'))
            ->with('success', 'Ubah profil sukses');

    }

    /**
     * Ubah password pengguna
     *
     * @param Request $request
     * @return void
     */
    public function changePassword(Request $request)
    { 
        $validator = Validator::make($request->all(), array(
            'old_password' => 'required',
            'password' => 'required | string | min:5 | confirmed',
        ));

        if ($validator->fails()) 
        {
            return redirect()
                ->route('setting-account')
                ->with('error.alert', 'Ubah password gagal');
        }

        $old_password = $request->get('old_password');
        $new_password = $request->get('password');

        if (Hash::check($old_password, \Auth::user()->password)) {

            $user = User::findOrFail(\Auth::user()->id);

            $user->password = Hash::make($new_password);
            $user->save();

            return redirect()
                ->route('pengaturan')
                ->with('success', 'Ubah password sukses');
        
        } else {
            
            return redirect()
                ->route('pengaturan')
                ->with('error', 'Ubah password gagal');
        }
    }
}
