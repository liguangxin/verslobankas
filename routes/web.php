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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/mano-paieskos', function () {
    return view('my-search');
})->name('my-search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
