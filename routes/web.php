<?php

use App\Models\Role;
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
    // User::factory()->create();
    $user = User::first();

    $user->roles()->sync([
        1 => [
            'name' => 'Kareem'
        ],
        2 => [
            'name' => 'Kareem'
        ]
    ]);

    dd($user->roles[0]->pivot->name);

    // $roles = Role::all();

    // $user->roles()->sync($roles);
    // $user->roles()->sync([
    //     1, 3, 5
    // ]);
    // $user->roles()->detach($roles);

    // $role = Role::find(4);

    // $role->users()->sync([1,5]);
});
