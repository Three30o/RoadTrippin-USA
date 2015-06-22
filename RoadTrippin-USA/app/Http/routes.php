
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

Route::get('auth/register', 'UserController@create');
Route::post('auth/register', 'UserController@postCreate');
Route::get('welcome', 'UserController@login');
Route::get('auth/logout', 'UserController@logout');
Route::get('user', 'UserController@view');
Route::get('user/delete', 'UserController@logout');


/****************************************************************
    Trip_image Routes
*****************************************************************/

Route::post('trip/{trip_id}/gallery', 'TripImageController@addImage');
Route::post('trip/{trip_image_id}/delete', 'TripImageController@delete');

Route::post('trip/{trip_id}/addImage', 'TripImageController@addImage');
Route::post('trip/{trip_id}/editImage', 'TripImageController@editImage');
// Route::post('trip/{trip_id}/postEdit', 'TripImageController@');


/****************************************************************
    Trip Routes
*****************************************************************/

Route::get('all_trips', 'TripController@viewTrips');
Route::get('route', 'TripController@createTrip');
Route::get('trip/{trip_id}/gallery', 'TripController@viewGallery');

// Route::post('route', 'TripController@postCreateTrip');

// Route::get('view', 'TripController@');


