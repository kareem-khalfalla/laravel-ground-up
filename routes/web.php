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

Route::get('/test', function () {

    $user = User::factory()->create();

    $user->posts()->create([
        'title' => 'Cool post title',
        'content' => 'Cool post content',
        'user_id' => $user->id

    ]);

    // updated this post
    $user->posts->first()->update([
        'title' => 'Updated title...',
        'content' => 'Updated content...',
    ]);
    return $user->posts;
});
