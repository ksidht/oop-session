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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');



Route::prefix('admin')->middleware('test')->namespace('Admin')->group(function() {
	Route::get('about', 'HomeController@about');
	Route::get('contact', 'HomeController@contact');
});


// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::resource('home', 'HomeController');

// Route::match(['get', 'post'], '/students', 'StudentController@index');
// Route::any('/students', 'StudentController@index');
// Route::redirect('/students', '/teacher', 301);

// Route::view('/students', 'welcome');


Auth::routes();

Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');