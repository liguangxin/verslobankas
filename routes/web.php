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

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

// TODO: autentifikacija
Route::get('/mano-paieskos', 'MySearchesController@index')->name('mano-paieskos');
Route::get('/pardavejo-skelbimai', function(){
    return view('pardavejo-skelbimai');
});
Route::get('/duk', function(){
    return view('duk');
});

Route::get('skelbimai', 'AdsController@index');
Route::get('skelbimai/{slug}', 'AdsController@get_ad');

Route::get('perziureti-skelbimai-nera', function() {
    return view('perziureti-skelbimai-nera');
});
Route::get('perziureti-skelbimai', function() {
    return view('perziureti-skelbimai');
});

Route::get('prisijungti', function() {
    return view('prisijungti');
})->name('prisijungti');

Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password-reset');
Route::get('login-facebook', 'Auth\LoginController@redirectToProviderFb')->name('login-facebook');
Route::get('facebook-callback', 'Auth\LoginController@handleProviderCallbackFb');

Route::get('prideti-skelbima', function() {
    return view('prideti-skelbima');
});
Route::get('prideti-skelbima/aktyvuoti', function() {
    return view('prideti-skelbima-aktyvuoti');
});

Route::get('privatumo-politika', function() {
    return view('duk');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth:customer,api']], function () {

    Route::get('nustatymai', function() {
        return view('nustatymai');
    })->name('profile-settings');

    Route::post('nustatymai', 'CustomersController@update');

    Route::get('/mano-skelbimai', function(){
        return view('mano-skelbimai');
    });

});
