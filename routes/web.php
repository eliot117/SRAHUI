<?php

Auth::routes();

Route::get('/', function () { return view('welcome'); });

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['permiso:crop_show']], function () {
    Route::resource('crops', 'CropController');
});

Route::group(['middleware' => ['permiso:user_show']], function () {
    Route::resource('users', 'UserController');
});

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');