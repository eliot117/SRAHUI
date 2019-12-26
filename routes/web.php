<?php

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('crops', 'CropsController');
Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');