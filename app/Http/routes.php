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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::group([
    'prefix' => 'audio',
    'namespace' => 'Audio',
    'middleware' => 'auth'], function (){
//        Route::resource('album','AlbumController');
//        Route::resource('track','AlbumController');
});
Route::resource('album','Audio\AlbumController');
Route::resource('track','Audio\TrackController',['except' => ['index','show']]);


Route::auth();

Route::get('/home', 'HomeController@index');

