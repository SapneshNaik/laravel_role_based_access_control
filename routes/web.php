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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
	echo "Hello Admin";
})->middleware('auth','admin');

Route::get('/agent', function(){
	echo "Hello Agent";
})->middleware('auth','agent');

Route::get('/customer', function(){
	echo "Hello Customer";
})->middleware('auth','customer');
