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

    Route::get('/articles/create', [
    	'as' => 'getCreate',
    	'uses' => 'ArticlesController@getCreate'
	]);

	Route::post('/articles/create', [
    	'as' => 'postCreate',
    	'uses' => 'ArticlesController@postCreate'
	]);

	Route::get('/articles/{id}/edit', [
		'as' => 'getEdit',
		'uses' => 'ArticlesController@getEdit'
	]);

	Route::post('/articles/{id}/edit', [
		'as' => 'postEdit',
		'uses' => 'ArticlesController@postEdit'
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
	return redirect('articles');
});

Route::get('/articles', [
	'as' => 'articles', 
	'uses' => 'ArticlesController@showAll'
]);

Route::get('/articles/{id}', [
	'as' => 'showArticle', 
	'uses' => 'ArticlesController@show'
]);