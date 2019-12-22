<?php

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['permiso:crear-cultivo']], function () {
    Route::resource('crops', 'CropsController');
});

Route::group(['middleware' => ['permiso:editar-cultivo']], function () {
    Route::resource('crops', 'CropsController');
});

Route::group(['middleware' => ['permiso:eliminar-cultivo']], function () {
    Route::resource('crops', 'CropsController');
});

Route::group(['middleware' => ['permiso:ver-cultivo']], function () {
    Route::resource('crops', 'CropsController');
});

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');