<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::resource('users', UserController::class)->middleware('auth');

Route::get('contact', [ContactFormController::class, 'create'])->middleware('test')->name('contact.create');
Route::post('contact', [ContactFormController::class, 'store'])->name('contact.store');
