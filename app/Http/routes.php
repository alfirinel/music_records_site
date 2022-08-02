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

Route::get('/', function () {
    return view('news');
});



Route::group([
    'prefix' => 'audio',
    'namespace' => 'Audio',
    'middleware' => 'auth'], function () {
//        Route::resource('album','AlbumController');
//        Route::resource('track','AlbumController');
});
Route::auth();

Route::resource('album','Audio\AlbumController');
Route::resource('track','Audio\TrackController',['except' => ['index','show']]);


Route::get('/news', 'HomeController@news');


Route::group(['middleware'=>['auth']], function (){
    Route::get('/user/profile/close-account', 'User\ProfileController@delete');
    Route::get('/user/album', 'HomeController@index');
    Route::resource('/user/profile', 'User\ProfileController', ['except'=>['show', 'store', 'create']]);
});

Route::resource('/artists', 'ArtistController', ['except'=>['destroy', 'store', 'create', 'update', 'edit']]);