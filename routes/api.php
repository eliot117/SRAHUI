<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('sensors','SensorController@getAll');

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('sensors','SensorController@getAll');
    Route::post('sensors','SensorController@add' );
    Route::get('sensors/{id}','SensorController@get');
    Route::post('sensors/{id}','SensorController@edit');
    Route::get('sensors/delete/{id}','SensorController@delete');
});

Route::post('login','AuthenticateController@authenticate'); 