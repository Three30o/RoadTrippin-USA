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

/**********************************************
    User Routes
**********************************************/

// Route::get('auth/register', 'UserController@create');
// Route::post('auth/register', 'UserController@postCreate');
// Route::get('auth/login', 'UserController@login');
// Route::get('auth/logout', 'UserController@logout');
Route::get('user', 'UserController@view');
Route::get('user/delete', 'UserController@delete');
