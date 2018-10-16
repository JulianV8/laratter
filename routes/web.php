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

Route::get('/', 'PagesController@home');

Route::get('/messege/{messege}', 'MessegesController@show');

Route::post('/messages/create', 'MessegesController@create')
->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/{username}/follows', 'UserController@follows');
Route::post('/{username}/follow', 'UserController@follow');
Route::get('/{username}', 'UserController@show');

