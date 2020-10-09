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

// Authentification
Auth::routes([
    'login'     => true,
    'logout'    => true,
    'register'  => true,
    'reset'     => false,
    'confirm'   => false,
    'verity'    => false,
]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@indexDashboard')->name('dashboard');
    
    Route::get('/profil', 'ProfilController@index')->name('profile');

    Route::get('/pengaturan', 'ProfilController@pengaturan')->name('pengaturan');
    Route::put('/pengaturan','ProfilController@updateProfil')->name('pengaturan.update');

    Route::put('/ubah-password','ProfilController@changePassword')->name('pengaturan.ubah-password');


    Route::get('/post', 'PostController@post')->name('post');
    Route::get('/add-post', 'PostController@addPost')->name('add-post');
});


