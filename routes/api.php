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
Route::get('/productos/{id}/create','indexController@vcat');
//Route::get('/cart/{id}','cartController@pcart');
Route::get('/{id}/cart','cartController@grabado');
Route::get('/{id}/cartt','cartController@idcarrito');