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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', [
	'as' => 'logout',
	'uses' => 'UserController@logout'
    ]);
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [
	'as' => 'getLogin',
	'uses' => 'UserController@getLogin'
    ]);

    Route::post('/login', [
	'as' => 'postLogin',
	'uses' => 'UserController@postLogin'
    ]);
    
    Route::get('/register', [
        'as' => 'getRegister',
        'uses' => 'UserController@getRegister'
    ]);

    Route::post('/register', [
        'as' => 'postRegister',
        'uses' => 'UserController@postRegister'
    ]);
});

Route::get('/', function(){
	return 'Naslovna stranica.';
});