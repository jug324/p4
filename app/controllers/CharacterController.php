<?php

class CharacterController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$characters = Character::all();
    return View::make('characters', compact('characters'));
		
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
		$character = new Character;
		$character->first_name = Input::get('name');
		$character->last_name = Input::get('last');
		$character->race_id = Input::get('race');
		$character->region_id = Input::get('region');
		$character->discipline_id = Input::get('discipline');
		$character->title_id = Input::get('title');
		$character->graduated = Input::get('count');
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
		$character = Character::find($id);

				
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
		$character = Character::find($id);
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
		$character->first_name = Input::get('name');
		$character->last_name = Input::get('last');
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
		
		$character = Character::findOrFail($id);
		$character->delete();

		Session::flash('message', 'Your Character Has Been Deleted');
		return Redirect::to('characters');
	}


}
