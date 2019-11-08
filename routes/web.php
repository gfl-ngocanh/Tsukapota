<?php

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
//     return view('index');
// });

Route::get('/index', 'SalesComment@getSalesComment');

Route::get('/', 'SalesComment@getSalesComment')->name('index-pc');

// Route::get('salescomment', 'SalesComment@getSalesComment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
