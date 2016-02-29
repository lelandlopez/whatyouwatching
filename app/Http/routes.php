<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

	Route::get('/', function () {
		return view('home'); 
	});


	Route::get('/findashow', function () {
		return view('findashow'); 
	});


	Route::get('/getShow', function () {
		return "asdf";
	});

	Route::get('/login', function () {
		return view('login');
	});

    Route::post('/login', 'auth\AuthController@postLogin');
    Route::get('/logout', 'auth\AuthController@getLogout');
    Route::get('/register', 'WhatYouWatchingController@getRegister');
    Route::post('/register', 'WhatYouWatchingController@postRegister');

    Route::get('/profile', 'WhatYouWatchingController@getProfile');
    Route::get('/addnewshowdate', 'WhatYouWatchingController@getAddNewShowDate');

});
