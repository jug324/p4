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
	return View::make('regions');
});

Route::get('/orders', function()
{
	return View::make('orders');
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

Route::get('/create-tit77le', function()
{
	# Instantiate a new Book model class
    $region = new Title();

    # Set 
    $region->name = 'Maven';
    $region->description = 'Created soon after Rangers, the Maven Title Order was the last created order. As the Hewytt School began to turn out more graduates, they saw the need to place talented youths in positions not necessarily associated with protecting and serving. Mavens are those who wish to be employed in any variety of fields where their knowledge and experience can help the greater good. Many Mavens tend to be altruistic, and enjoy positions that assist in the well-being of others. They also tend to be the most scholarly. As such, the majority of professors at the Hewytt School graduated Maven Title Order.';
    $region->flag = 'flags/mavenshield.jpg';
    # This is where the Eloquent ORM magic happens
    $region->save();

    return 'A new title has been added! Check your database to see...';
	
});
