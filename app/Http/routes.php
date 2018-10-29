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

Route::get('/', 'Admin\UserController@index');

Route::get('/login', ['uses' => 'Admin\UserController@login','as'=>'login']);

Route::post('/dologin', ['uses' => 'Admin\UserController@dologin','as'=>'dologin']);

Route::get('/register', ['uses' => 'Admin\UserController@register','as'=>'register']);

Route::get('/doreg', ['uses' => 'Admin\UserController@doreg','as'=>'doreg']);

Route::get('/controller','Admin\UserController@show');

Route::get('/user/edit/{id}', [
	'middleware' => 'login',
	'uses' => 'UserController@edit'
]);

// Route::controller('goods','GoodsController');


Route::get('/get','UserController@get');



