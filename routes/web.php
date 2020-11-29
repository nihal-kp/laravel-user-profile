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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {  return view('login');   });
Route::get('/register', function () {  return view('register');   });
Route::post('/register','App\Http\Controllers\UserController@register');
Route::post('/login','App\Http\Controllers\UserController@login');
Route::get('/profile','App\Http\Controllers\ProfileController@profile');
Route::get('/edit', 'App\Http\Controllers\ProfileController@edit');
Route::put('/update', 'App\Http\Controllers\ProfileController@update');
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});
