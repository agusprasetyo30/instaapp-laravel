<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('instaapp.profil.index');
    }

    public function pengaturan()
    {
        return view('instaapp.profil.pengaturan');
    }
}
