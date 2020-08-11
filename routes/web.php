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
//     // return 'Hello laravel';
// })->name('home');

Route::get('about','PageController@homefun')->name('aboutname');

Route::get('/', 'PageController@aboutfun')->name('home');

Route::get('contact','PageController@contactfun')->name('contact');
Route::get('post','PageController@postfun')->name('post');

