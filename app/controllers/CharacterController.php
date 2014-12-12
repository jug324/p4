<?php

class CharacterController extends BaseController {
        public function __construct() {
        	$this->beforeFilter('auth');
            $this->beforeFilter('csrf', array('on' => 'post'));    
    } 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
	$characters = Character::owned()->get();	
    return View::make('characters')->with('characters', $characters);
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('creation');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
    	'first_name' => 'required',
    	'last_name' => 'required',
    	
		);          

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

    	return Redirect::to('/create')
        ->with('message', 'Character creation failed; please fix the errors listed below.')
        ->withInput()
        ->withErrors($validator);
}
		$character = new Character;
		$character->first_name = Input::get('first_name');
		$character->last_name = Input::get('last_name');
		$character->race_id = Input::get('race');
		$character->region_id = Input::get('region');
		$character->discipline_id = Input::get('discipline');
		$character->title_id = Input::get('title');
		$character->graduated = Input::get('count');
		$character->creator_id = Auth::id();
		$character->save();

		Session::flash('message', 'Your New Character Has Been Created!');
		return Redirect::to('characters');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
		$character = Character::findOrFail($id);
}
catch(Exception $e) {
	return Redirect::to('/characters')->with('message', 'Character Not Found');
}				
        return View::make('bio')->with('character', $character);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		try {
			
		$character = Character::owned()->findOrFail($id);
		}
catch(Exception $e) {
	return Redirect::to('/characters')->with('message', 'Character Not Found');
}				
		return View::make('edit', compact('character'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$character = Character::findOrFail(Input::get('id'));
		
		$character->race_id = Input::get('race');
		$character->region_id = Input::get('region');
		$character->discipline_id = Input::get('discipline');
		$character->title_id = Input::get('title');
		$character->graduated = Input::get('count');
		$character->save();

		Session::flash('message', 'Your Character Has Been Updated!');
		return Redirect::to('characters');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$character = Character::owned()->findOrFail($id);
		$character->delete();

		Session::flash('message', 'Your Character Has Been Deleted');
		return Redirect::to('characters');
	}


}
