<?php

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['permiso:crear-cultivo']], function () {
    Route::resource('crops', 'CropsController');
});