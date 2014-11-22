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
	return View::make('hello');
});

Route::get('/login', function()
{
	return 'This is the login page';
});

Route::get('/student', function()
{
	return 'This is the page for students/characters';
});

Route::get('/regions', function()
{
	return 'This is the regions page';
});

Route::get('/orders', function()
{
	return 'This is the Title Orders page';
});

Route::get('/specialties', function()
{
	return 'This is the specialty description page';
});

Route::get('/races', function()
{
	return 'This is the race description page';
});

Route::get('/school', function()
{
	return 'This page lists all students created';
});

