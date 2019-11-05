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
    return view('vistas.home');
});

Route::get('/jose-carlos-marrufo', 'PracticaController@JoseCarlosMarrufoVazquez');
Route::get('/VeronicaHuizar', 'PracticaController@VeronicaHuizar');
Route::get('/Luis_Montes', 'PracticaController@LuisMontesMartinez');
Route::get('/RicardoMartinez', 'PracticaController@RicardoMartinez');
Route::get('/MiguelDuenez', 'PracticaController@MiguelDuenez');
Route::get('/login', 'PracticaController@login');
Route::get('/jerseys', 'PracticaController@jersey');
Route::get('/ninos', 'PracticaController@ninos');
Route::get('/jersey', 'PracticaController@jersey');
Route::get('/Hombre', 'PracticaController@Hombre');
