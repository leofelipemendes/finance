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
Route::post('teste','AuthController@teste');
Route::post('register','AuthController@register');
Route::post('login','AuthController@login');
Route::middleware('jwt.refresh')->get('token/refresh','AuthController@refresh');
Route::group(['middleware'=>'jwt.auth'],function(){
    Route::get('auth/user','AuthController@user');
    Route::post('auth/logout','AuthController@logout');
});
