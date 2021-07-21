<?php

use App\Postcard;
use App\PostcardSendingService;
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

Route::get('postcards', function () {
    $postcardService = new PostcardSendingService('eg', 4, 6);
    $postcardService->hello('Hello from Kareem EG!', 'kareem.khalfalla.dev@gmail.com');
});

Route::get('facades', function () {
    Postcard::hello('Hello from FACADES!', 'kareem.khalfalla.dev@gmail.com');
});