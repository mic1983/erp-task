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

Route::get('/giphy', 'GiphyController@giphy');

Route::get('/gif-detail/{id}', 'GiphyController@giphydetail');

Route::get('/', 'GiphyController@giphy');


Route::get('/example', 'AppController@getData');