<?php

use App\Models\Post;
use App\Models\User;
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
    return view('welcome');
});

Route::get('/posts', function () {
    /** @var \App\Models\Post $post */
    $post = Post::first();
    $post->image()->create([
        'url' => 'http://placehold.it/120x120&text=image1'
    ]);
});

Route::get('/users', function () {
    /** @var \App\Models\User $user */
    $user = User::first();
    $user->image()->create([
        'url' => 'http://placehold.it/120x120&text=image1'
    ]);
});

