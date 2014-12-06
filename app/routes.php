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
	return View::make('races');
});

Route::get('/school', function()
{
	return 'This page lists all students created';
});

Route::get('/create-ra7777ce', function()
{
	# Instantiate a new Book model class
    $races = new Race();

    # Set 
    $races->name = 'Roccan';
    $races->description = 'Roccans are a races of giant, muscular creatures that are able to live in environments with harsh conditions, such as mountainsides and deserts. They have immense physical strength, but rarely have they been able to use magic. With the smallest population size, Roccans have survived due to their stamina and hardened skin that resists bruising. They tend to live isolated from the other races and focus mainly on themselves and their culture';
    $races->traits = "Tall, hardened skin, large and sphere shaped body";
    # This is where the Eloquent ORM magic happens
    $races->save();

    return 'A new race has been added! Check your database to see...';
	
});
