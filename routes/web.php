<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Register_controller@index');
Route::get('register','Register_controller@register');
Route::post('signup','Register_controller@signup');
Route::post('signin','Register_controller@signin');
Route::get('dashboard','Register_controller@dashboard');

Route::get('logout','Register_controller@logout');

Route::get('scratch_card','Register_controller@scratch_card');
Route::get('scratch_card_detail','Register_controller@scratch_card_detail');
Route::post('create_scratch_card','Register_controller@create_scratch_card');
