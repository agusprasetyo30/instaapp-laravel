<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('instaapp.index');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentification
Auth::routes([
    'login' => true,
    'logout' => true,
    'register' => true,
    'reset' => false,
    'confirm' => false,
    'verity' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
