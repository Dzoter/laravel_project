<?php

use Illuminate\Support\Facades\Auth;
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

//user
Route::get('/', function () {
    if (Auth::check()) {
        return redirect(\route('posts-main'));
    }

    return view('user.login');
})->name('login');

Route::get('/registration', function () {
    if (Auth::check()) {
        return redirect(\route('posts-main'));
    }

    return view('user.registration');
})->name('registration');


Route::get('/logout', function () {
    Auth::logout();

    return redirect('/');
})->name('logout');

Route::post('/login/submit', [\App\Http\Controllers\UserController::class, 'login'])->name('login-form');
Route::post('/registration/submit', [\App\Http\Controllers\UserController::class, 'registration'])->name(
    'registration-form'
);





//posts

Route::get('/posts', [\App\Http\Controllers\PostsController::class,'getAllPosts'])->middleware('auth')->name('posts-main');
Route::get('/add-post',function (){
    return view('posts.post-add');
})->middleware('auth')->name('post-add');

Route::post('create-post/submit',[\App\Http\Controllers\PostsController::class,'createPost'])->name('create-post');


Route::get('/post-edit/{postId}', [\App\Http\Controllers\PostsController::class,'editPost'])->middleware('auth')->name
('edit-post');

