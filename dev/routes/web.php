<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ThreadController;


Route::get('/threads', [ThreadController::class, 'index']);

Route::get('/', [\App\Http\Controllers\StaticController::class, 'index'])->name('home.index');
//Route::get('/blog', [\App\Http\Controllers\ThreadController::class, 'index'])->name('blog.create');
//Route::get('/topic', [\App\Http\Controllers\ThreadController::class, 'index'])->name('thread.topic');

Route::resource('topic',\App\Http\Controllers\TopicController::class);

Route::resource('blog',\App\Http\Controllers\Postscontroller::class);

// register
Route::group(['middleware' =>'guest'] , function (){

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'registerPost'])->name('register');
// login
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' =>'auth'], function () {
    Route::get('/home', [\App\Http\Controllers\AuthController::class, 'index']);
    Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});




