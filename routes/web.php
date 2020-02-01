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
Route::get('/mano-paieskos', 'MySearchesController@index')->name('mano-paieskos');
Route::get('/pardavejo-skelbimai', function(){
    return view('pardavejo-skelbimai');
});
Route::get('/mano-skelbimai', function(){
    return view('mano-skelbimai');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
