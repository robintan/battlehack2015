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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/merchants', 'MerchantController@showAll');
Route::get('/merchants/{id}', 'MerchantController@show');
Route::get('/queues', 'QueueController@showMerchantQueue');
Route::get('/queues/{id}', 'QueueController@show');

Route::post('/queues', 'QueueController@create');

Route::put('/merchants/{id}', 'MerchantController@update');
Route::put('/queues/{id}', 'QueueController@update');