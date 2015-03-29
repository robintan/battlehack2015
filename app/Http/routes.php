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


Route::get('/api/merchants', 		'MerchantController@showAll');
Route::get('/api/merchants/{id}', 		'MerchantController@show');
Route::get('/merchants/{id}', 		'MerchantController@showMerhcantPage');
Route::get('/api/queues', 			'QueueController@showMerchantQueue');
Route::get('/api/queues/{id}', 		'QueueController@show');
Route::get('/api/items/{id}', 		'ItemController@show');
Route::get('/api/items', 			'ItemController@showMerchantItems');

Route::post('/api/queues', 			'QueueController@create');
Route::post('/api/items', 			'ItemController@create');

Route::put('/api/merchants/{id}', 	'MerchantController@update');
Route::put('/api/queues/{id}', 		'QueueController@update');

Route::delete('/api/items/{id}', 	'ItemController@delete');


Route::post('/api/get_nonce', 'PaymentController@get_nonce');
Route::post('/api/sendsms', 'NotificationController@sendSMS');
