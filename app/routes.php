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
	return 'This is the race description page';
});

Route::get('/school', function()
{
	return 'This page lists all students created';
});

Route::get('/create-dis777cipline', function()
{
	# Instantiate a new Book model class
    $discipline = new Discipline();

    # Set 
    $discipline->name = 'White Mage';
    $discipline->description = 'White magic is the heart of health and regrowth. Most White Mages tend to the sick and injured';
    
    # This is where the Eloquent ORM magic happens
    $discipline->save();

    return 'A new discipline has been added! Check your database to see...';
	
});
