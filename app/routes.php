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
Route::get('/test', function()
{
	echo Auth::id();
});
Route::get('/', function()
{
	return View::make('home');
});

Route::controller('user', 'UsersController');
          

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
	$regions = Region::all();
	return View::make('regions')->with('regions', $regions);
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

	return View::make('students');
});

