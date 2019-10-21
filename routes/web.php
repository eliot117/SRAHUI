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
Route::get('notas','NotasController@index');
Route::get('notas/crear','NotasController@crear')->middleware('permiso:crear-notas');
Route::group(['middleware' =>['permiso:eliminar-notas']], function(){
    Route::get('notas/{id}/eliminar','NotasController@eliminar')->name('notas.eliminar');
});
