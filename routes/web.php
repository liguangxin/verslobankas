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

// TODO: autentifikacija
Route::get('/mano-paieskos', 'MySearchesController@index')->name('my-search.index');
Route::get('/mano-paieskos/{id}', 'MySearchesController@edit')->name('my-search.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
