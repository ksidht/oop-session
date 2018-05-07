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
    return view('welcome');
});

Route::get('form', function () {
	return view('form');
});


Route::auth();


Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/test', 'HomeController@test');

Route::group(['middleware' => 'auth'], function() {
	Route::resource('country', 'CountryController');
	Route::resource('state', 'StateController');
});
