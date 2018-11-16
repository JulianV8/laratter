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
Auth::routes();

Route::get('/', 'PagesController@home');

Route::get('/messages', 'MessegesController@search');
Route::get('/messege/{messege}', 'MessegesController@show');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function (){
    Route::post('/{username}/dms', 'UserController@sendPrivateMessage');
    Route::get('/conversations/{conversation}', 'UserController@showConversation');
    Route::post('/messages/create', 'MessegesController@create');

    Route::post('/{username}/follow', 'UserController@follow');
    Route::post('/{username}/unfollow', 'UserController@unfollow');

    Route::get('/api/notifications', 'UserController@notifications');
});

Route::get('/api/messages/{messege}/responses', 'MessegesController@responses');

Route::get('/{username}/follows', 'UserController@follows');
Route::get('/{username}/followers', 'UserController@followers');
Route::get('/{username}', 'UserController@show');

