<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('main');
});

Route::get('admin', function()
{
	return View::make('users.adminpanel');
});

Route::get('users/profile', 'UsersController@showProfile');

Route::get('register', function()
{
    return View::make('register');
});

//Test Routes
Route::get('docs', function()
{
    return View::make('docs');
});

Route::get('forums', function()
{
    return View::make('forums');
});

Route::get('events', function()
{
    return View::make('events');
});

Route::get('layout', function()
{
    return View::make('layout');
});


Route::get('posts/create', function()
{
	return View::make('posts.create');
});

Route::get('posts/show', function()
{
	return View::make('posts.show');
});

Route::get('post/{id}', 'PostsController@show');


//Pets routes
Route::resource('pets', 'PetsController');
Route::post('/pets/image', 'PetsController@uploadImage');

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

// Image routes
Route::post('/images/pet', 'ImagesController@uploadPetImage');
Route::post('/images/user', 'ImagesController@uploadUserImage');
Route::delete('/images/{id}', 'ImagesController@destroy');
