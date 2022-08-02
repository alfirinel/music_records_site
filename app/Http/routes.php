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

Route::post('/user/profile/language', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@index',
));

//Route::group(['middleware'=>['LanguageSwitcher']], function(){
//    Route::post('/user/profile/language', 'LanguageController@index');
//});

Route::group(['middleware'=>['auth']], function (){
    Route::get('/user/profile/close-account', 'User\ProfileController@delete');
    Route::resource('/user/profile', 'User\ProfileController', ['except'=>['show', 'create']]);
});


Route::group([
    'prefix' => 'audio',
    'namespace' => 'Audio',
    'middleware' => 'auth'], function (){
});
Route::resource('album','Audio\AlbumController');
Route::resource('track','Audio\TrackController',['except' => ['index','show']]);


Route::auth();

Route::resource('/artists', 'ArtistController', ['except'=>['destroy', 'store', 'create', 'update', 'edit']]);