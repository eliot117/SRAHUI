<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('crops',['as'=>'crops.index','uses'=> 'CropsController@index']);
Route::get('crops/create',['as'=>'crops.create','uses'=> 'CropsController@create']);
Route::post('crops',['as'=>'crops.store','uses'=> 'CropsController@store']);
Route::get('crops/{id}',['as'=>'crops.show','uses'=> 'CropsController@show']);
Route::get('crops/{id}/edit',['as'=>'crops.edit','uses'=> 'CropsController@edit']);

//Route::resource('crops', 'CropsController');