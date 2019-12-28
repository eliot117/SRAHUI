<?php

Auth::routes();

Route::get('/', function () { return view('welcome'); });

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('crop', 'CropController');

Route::resource('users', 'UserController');

Route::resource('datausers', 'DataUsersController');

Route::resource('roles', 'RoleController');
