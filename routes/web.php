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
})->name('wellcome')->middleware("userdeleted");


Route::get('/preguntas_frecuentes', function () {
    return view('static.faq');
});

Route::get('/carro', function () {
    return view('Carts.carro');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware("userdeleted");


Route::get('/logout', 'UserController@loguot');

Route::get('/relojes', 'Watchcontroller@show');


Route::get('/altaProductos', 'Watchcontroller@create')->middleware("validaradmin");
Route::post('/altaProductos', 'Watchcontroller@store');

Route::get('/editarProductos/{algo}', 'Watchcontroller@edit')->middleware("validaradmin");
Route::post('/editarProductos/{algo}', 'Watchcontroller@update');

Route::get('/listarProductos', 'Watchcontroller@index')->middleware("validaradmin");

Route::get('/eliminarProductos/{algo}', 'Watchcontroller@destroy')->middleware("validaradmin");

Route::get('/usuario', 'UserController@view');
Route::get('/usuario/destroy/{algo}', 'UserController@destroy');
Route::get('/usuario/edit', 'UserController@edit');

Route::get('/direccion/create', 'DirectionController@create');
Route::post('/direccion/create', 'DirectionController@store');

Route::get('/direccion/destroy/{algo}', 'DirectionController@destroy');
