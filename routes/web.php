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

Route::group(['middleware' => 'guest'], function() {
	
	Route::get('/', 'PagesController@home');

	Route::post('signin', 'LoginController@login');

	// Password Reset
	Route::get('password/reset/{code}','PasswordResetController@getReset');
	Route::post('password/reset/{code}','PasswordResetController@postReset');
	Route::get('password/reset/','PasswordResetController@getRequest');
	Route::post('password/reset/','PasswordResetController@postRequest');

	//User Activation
	Route::get('activate/{email}/{code}', 'RegistrationController@activateUser');
});

Route::group(['middleware' => 'auth'], function() {

	Route::get('dashboard', 'DashboardController@home');
	Route::get('profile', 'DashboardController@profile');

	Route::post('updateprofile', 'DashboardController@updateProfile');
	
	Route::post('updatepassword', 'DashboardController@updatePassword');

	Route::get('signout', 'LoginController@logout');
	Route::get('signout-all', 'LoginController@logoutAll');

	Route::post('registation-complete', 'RegistrationController@registrationComplete');
});

Route::group(['middleware' => 'user'], function() {

});

Route::group(['middleware' => 'admin'], function() {

	Route::post('create-user','RegistrationController@createUser');
	Route::get('view/{email}', 'DashboardController@viewProfile');
});

//Routes to insert data from devices
Route::post('/insertdata', 'HardwareController@insertData');
Route::post('/toggle-power/{id}', 'HardwareController@deviceOnOff');