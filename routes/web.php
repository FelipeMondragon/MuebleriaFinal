<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','MueblesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cargainfo', 'MueblesController@carga');
Route::get('/ver-muebles','MueblesController@verMuebles');

Route::get('/eliminar/{id}', 'MueblesController@eliminar');
Route::get('/editar/{id}', 'MueblesController@editar');
Route::put('/edit/{id}', 'MueblesController@edit')->name('edit');

Route::get('/pruebaPDF','MueblesController@PruebaPDF');

Route::post('/guardamueble', 'MueblesController@guardaMueble');

Route::get('mueble_detalle/{id}', 'MueblesController@muebledetalle');

Route::get('/cart', 'MueblesController@carrito');
Route::get('/add-carrito/{mueble}', 'MueblesController@addcart');
Route::get('/eliminar-carrito/{id}', 'MueblesController@eliminarcart')->name('eliminarc');
Route::get('/cambiarcant/{mueble}', 'MueblesController@cambiarcantidad');