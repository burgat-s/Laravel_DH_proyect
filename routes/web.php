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

Route::get('/','HomeController@index')->middleware("userdeleted");
// function () {return view('homer');});

Route::get('/home', 'HomerController@destacados')->name('wellcome')->middleware("userdeleted");


Route::get('/preguntas_frecuentes', function () { return view('static.faq');});

Auth::routes();

Route::get('/logout', 'UserController@loguot');

Route::get('/relojes', 'Watchcontroller@show');


Route::get('/altaProductos', 'Watchcontroller@create')->middleware("validaradmin");
Route::post('/altaProductos', 'Watchcontroller@store');

Route::get('/editarProductos/{algo}', 'Watchcontroller@edit')->middleware("validaradmin")->middleware("userlog");
Route::post('/editarProductos/{algo}', 'Watchcontroller@update')->middleware("userlog");

Route::get('/listarProductos', 'Watchcontroller@index')->middleware("validaradmin");
Route::get('/reloj/mujeres', 'Watchcontroller@mujeres')->middleware("validaradmin");
Route::get('/reloj/hombres', 'Watchcontroller@hombres')->middleware("validaradmin");
Route::get('/eliminarProductos/{algo}', 'Watchcontroller@destroy')->middleware("validaradmin");

Route::get('/usuario', 'UserController@view');
Route::get('/usuario/destroy/{algo}', 'UserController@destroy')->middleware("userlog");
Route::get('/usuario/edit', 'UserController@edit')->middleware("userlog");

Route::get('/direccion/create', 'DirectionController@create')->middleware("userlog");
Route::post('/direccion/create', 'DirectionController@store')->middleware("userlog");

Route::get('/direccion/destroy/{algo}', 'DirectionController@destroy')->middleware("userlog");


Route::get('/carrito/agregar/{algo}/{algo2}', 'CartController@store')->middleware("userlog");
Route::get('/carrito/agregarcarrito/{algo}/{algo2}', 'CartController@agregarcarrito')->middleware("userlog");
Route::get('/carrito/sacarcarrito/{algo}/{algo2}', 'CartController@sacarcarrito')->middleware("userlog");
Route::get('/carro','CartController@show' )->middleware("userlog");
Route::get('/carro/removerItem/{algo}','CartController@borraritem' )->middleware("userlog");

Route::get('/venta','SaleController@show' );
