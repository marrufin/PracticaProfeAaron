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
use App\Mail\MessageMail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('home');
});
Route::get('/home', function () {
    return view('vistas.home');
})->name('home');

Route::get('/auth', function(){
    return view('vistas.auth');
})->middleware('auth');

Route::match(['get','post'], 'logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::put('email', function(\Request $request){
    \Mail::send(new MessageMail($request->email));
    return response()->json(["message" => 'Hola']);
});

Route::match(['GET', 'POST', 'PUT'],'/login', 'UserController@main')->name('login');

Route::get('/jose-carlos-marrufo', 'PracticaController@JoseCarlosMarrufoVazquez');
Route::get('/VeronicaHuizar', 'PracticaController@VeronicaHuizar');
Route::get('/Luis_Montes', 'PracticaController@LuisMontesMartinez');
Route::get('/RicardoMartinez', 'PracticaController@RicardoMartinez');
Route::get('/MiguelDuenez', 'PracticaController@MiguelDuenez');
Route::get('/login', 'PracticaController@login');
Route::get('/jersey', 'PracticaController@jersey');
Route::get('/outlet', 'PracticaController@outlet');
Route::get('/deportes', 'PracticaController@deportes');
Route::get('/jerseys', 'PracticaController@jersey');
Route::get('/ninos', 'PracticaController@ninos');
Route::get('/jersey', 'PracticaController@jersey');
Route::get('/Hombre', 'PracticaController@Hombre');
Route::get('/ninas', 'PracticaController@ninas');
Route::get('/mujeres', 'PracticaController@mujeres');
Route::get('/Uniformes', 'PracticaController@uniformes');