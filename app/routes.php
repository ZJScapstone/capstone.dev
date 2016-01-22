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

Route::get('users/profile', function()
{
	return View::make('profile');
});

Route::get('register', function()
{
    return View::make('register');
});

Route::get('shelters', function()
{
	return View::make('shelters.create');
});

Route::get('showuser', function()
{
    return View::make('users.show')->with('user', User::first());
});

Route::get('/getpets', function()
{
    $pets = [];

    Pet::with('breed', 'user', 'shelter')->get()->each(function($pet) use (&$pets)
    {
        $pets[] = 
        [
            'id'          => $pet->id,
            'name'        => $pet->name,
            'species'     => $pet->species,
            'status'      => $pet->status,
            'color'       => $pet->color,
            'age'         => $pet->age,
            'description' => $pet->description,
            'gender'      => $pet->gender,
            'breed'       => $pet->breed->breed,

            'user'        => 
            [
                'email' => $pet->user->email, 
                'id'    => $pet->user->id
            ],

            'shelter'     => 
            [
                'name' => $pet->shelter->name, 
                'id'   => $pet->shelter->id
            ],

            'images' => [
                'http://placehold.it/600',
                'http://placehold.it/601',
                'http://placehold.it/610',
                'http://placehold.it/620',
                'http://placehold.it/630'
            ]
        ];
    });

    return json_encode($pets);
});

Route::resource('shelters', 'SheltersController');


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
