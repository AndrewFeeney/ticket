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

Route::get('/', 'HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/* 
 * ADMIN ROUTES
 */

// List users
Route::get('/admin/users', [
	'middleware'	=>	['auth', 'admin'],
	'uses'			=> 'Admin\UserController@index',
]);

// View user
Route::get('/admin/users/{id}', [
	'middleware'	=>	['auth', 'admin'],
	'uses'			=> 'Admin\UserController@show',
]);

// Delete user
Route::post('/admin/users/{id}/destroy', [
	'middleware'	=>	['auth', 'admin'],
	'uses'			=> 'Admin\UserController@destroy',
]);

// Edit user
Route::get('/admin/users/{id}/edit', [
	'middleware'	=>	['auth', 'admin'],
	'uses'			=> 'Admin\UserController@edit',
]);

// Update user
Route::post('/admin/users/{id}/update', [
	'middleware'	=>	['auth', 'admin'],
	'uses'			=> 'Admin\UserController@update',
]);

// Add priveleges (ability) to user
Route::post('/admin/users/{id}/{ability}/store', [
	'middleware'	=>	['auth', 'admin'],
	'uses'			=> 'Admin\UserController@storeAbility',
]);

// Remove priveleges (ability) from user
Route::post('/admin/users/{id}/{ability}/destroy', [
	'middleware'	=>	['auth', 'admin'],
	'uses'			=> 'Admin\UserController@destroyAbility',
]);