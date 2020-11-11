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
Route::get('/persona', 'PersonasController@index')->name('index');
Route::get('/trabajo1', 'PersonasController@trabajo1')->name('index');
Route::get('/punto2', 'PersonasController@punto2')->name('index');
Route::get('/punto3', 'PersonasController@punto3')->name('index');
Route::get('/punto4', 'PersonasController@punto4')->name('index');
Route::get('/punto5', 'PersonasController@punto5')->name('index');
Route::post('/persona/guardar', 'PersonasController@store')->name('guardar');
Route::put('/persona/actualizar', 'PersonasController@update')->name('actualizar');
Route::delete('/persona/eliminar', 'PersonasController@destroy')->name('eliminar');

