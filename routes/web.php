<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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
    echo env('APP'); echo "<br />";
    echo env('USER'); echo "<br />";
    echo env('PASS'); echo "<br />";
    echo env('LANG'); echo "<br />";
    
    return view('home');
});

Route::resource('user', 'UserController');

Route::post("user-login", [UserAuth::class, 'userLogin']);
Route::view("profile", 'profile');

Route::get('/login', function () {
    if (session()->has('username')) {
        return redirect('profile');
    }
    return view('login');
});

Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->pull('username');
    }
    return redirect('login');
});
