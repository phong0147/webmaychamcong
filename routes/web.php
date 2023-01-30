<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home','HomeController@test');
Route::get('/list_user','UsersController@list_user');
Route::get('/user_id','UsersController@user_id');
Route::get('/old','HomeController@index');