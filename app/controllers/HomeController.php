<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}

	public function showRegions()
	{
		$regions = Region::all();
	return View::make('regions')->with('regions', $regions);
	}
	
	public function showRaces()
	{
		$races = Race::all();
	return View::make('races')->with('races', $races);
	}
	public function showDisciplines()
	{
		$discipline = Discipline::all();
	return View::make('disciplines')->with('discipline', $discipline);
	}
	public function showOrders()
	{
		$titles = Title::all();
	return View::make('orders')->with('titles', $titles);
	}
	public function showStudents()
	{
		return View::make('students');
	}

}
