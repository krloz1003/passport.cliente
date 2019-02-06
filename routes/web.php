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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Obtiene el token por primera vez, pantalla acceso API
Route::get('/get-tokens-first-time', 'Api\AuthenticationController@getTokensFirstTime');

//Aquí somos redirigidos al tomar los tokens, guardamos los datos en la tabla app
Route::get('/callback', 'Api\AuthenticationController@callback');
