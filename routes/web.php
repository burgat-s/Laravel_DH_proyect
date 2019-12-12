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
})->name('wellcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/preguntas_frecuentes', function () {
    return view('partials.faq');
});
//  Route::get('/register', function () {
//     return view('auth/passwords/register');
// });
  Route::get('/carro', function () {
    return view('partials.carro');
 });

 Route::get('/relojes', function () {
   return view('partials.relojes');
});

Route::get('/logout', function()
	{
		Auth::logout();
	Session::flush();
		return Redirect::to('/home');
	});

  Route::get('/relojes', function () {
    return view('partials.relojes');

 });
 Route::get('/altaProductos', function () {
   return view('partials.altaProductos');
});
Route::get('/usuario', function () {
  return view('partials.PPU');
});
