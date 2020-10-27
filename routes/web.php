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
    
    Route::get('/{username}/profile', 'ProfilController@index')->name('user.profile');
    
    Route::get('/pengaturan', 'ProfilController@pengaturan')->name('pengaturan');
    Route::put('/pengaturan','ProfilController@updateProfil')->name('pengaturan.update');
    
    Route::put('/ubah-password','ProfilController@changePassword')->name('pengaturan.ubah-password');
    
    Route::get('/add-post', 'PostController@addPostPage')->name('add-post-page');
    Route::post('/add-post', 'PostController@addPost')->name('add-post');
    
    Route::get('/{username}/post/{id}', 'PostController@post')->name('user.post.detail');
    Route::get('/{username}/post/{id}/update', 'PostController@editPost')->name('user.post.edit');
    Route::put('/{username}/post/{id}/update', 'PostController@updatePost')->name('user.post.update');
    Route::get('/{username}/post/{id}/delete', 'PostController@deletePost')->name('user.post.delete');


    Route::post('/add-comment', 'PostController@addComment')->name('add-comment');
    Route::get('/delete-comment/{id}', 'PostController@deleteComment')->name('delete-comment');

    Route::post('/add-like', 'PostController@addLike')->name('add-like');
});


