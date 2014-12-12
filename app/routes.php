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
//Main pages
Route::get('/', 'HomeController@showWelcome');
Route::get('/regions', 'HomeController@showRegions');
Route::get('/races', 'HomeController@showRaces');
Route::get('/orders', 'HomeController@showOrders');
Route::get('/disciplines', 'HomeController@showDisciplines');
Route::get('/school', 'HomeController@showStudents');

// User signup and login
Route::controller('user', 'UsersController');

Route::get('password/reset', array(
  'uses' => 'PasswordController@remind',
  'as' => 'remind'
));
Route::post('password/reset', array(
  'uses' => 'PasswordController@request',
  'as' => 'request'
));
Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'reset'
));
Route::post('password/reset/{token}', array(
  'uses' => 'PasswordController@update',
  'as' => 'update'
));
          

Route::model('character', 'Character');

// Show Character pages.
Route::get('/characters', 'CharacterController@index');
Route::get('/character/{id}', 'CharacterController@show');
Route::get('/create', 'CharacterController@create');
Route::get('/edit/{id}', 'CharacterController@edit');
Route::get('/delete/{id}', 'CharacterController@destroy');

// Handle form submissions.
Route::post('/create', 'CharacterController@store');
Route::post('/edit/{id}', 'CharacterController@update');
Route::post('/delete', 'CharacterController@destroy');