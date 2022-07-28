<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/', 'HomeController@index');

Route::get('/artists', 'HomeController@artists');
Route::get('/news', 'HomeController@news');



Route::group(['middleware'=>['auth']], function (){
    Route::get('/user/profile/close-account', 'User\ProfileController@delete');
    Route::resource('/user/profile', 'User\ProfileController', ['except'=>['show', 'store', 'create']]);
});

