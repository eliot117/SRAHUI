<?php

Auth::routes();

Route::get('/', function () { return view('welcome'); });

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('crop', 'CropController');

Route::group(['middleware' => ['permiso:user_create']], function () {
    Route::resource('users', 'UserController');
});
Route::group(['middleware' => ['permiso:user_edit']], function () {
    Route::resource('users', 'UserController');
});
Route::group(['middleware' => ['permiso:user_show']], function () {
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => ['permiso:user_delete']], function () {
    Route::resource('users', 'UserController');
});

//Route::resource('users', 'UserController');

Route::resource('datausers', 'DataUsersController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');
