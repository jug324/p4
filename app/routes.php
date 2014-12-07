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
	return View::make('home');
});

Route::get('/signup', function()
{
	return View::make('user_signup');
});

Route::get('/login', function()
{
	return 'This is the login page';
});

Route::get('/student', function()
{
	return 'This is the page for students/characters';
});


Route::model('character', 'Character');

// Show pages.
Route::get('/characters', 'CharacterController@index');
Route::get('/character/{id}', 'CharacterController@show');
Route::get('/create', 'CharacterController@create');
Route::get('/edit/{id}', 'CharacterController@edit');
Route::get('/delete/{id}', 'CharacterController@destroy');

// Handle form submissions.
Route::post('/create', 'CharacterController@store');
Route::post('/edit/{id}', 'CharacterController@update');
Route::post('/delete', 'CharacterController@destroy');



Route::get('/regions', function()
{
	return View::make('regions');
});

Route::get('/orders', function()
{
	return View::make('orders');
});

Route::get('/disciplines', function()
{
	return View::make('disciplines');
});

Route::get('/races', function()
{
	return View::make('races');
});

Route::get('/school', function()
{
	return 'This page lists all students created';
});

