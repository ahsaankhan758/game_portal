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

Route::post('login', 'Signup_controller@login');
Route::post('register', 'Signup_controller@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'Signup_controller@details');
});
Route::get('sratch_list','Signup_controller@sratch_list');
