<?php

class PetsController extends \BaseController {

	/**
	 * Display a listing of pets
	 *
	 * @return Response
	 */
	public function index()
	{

		$query = DB::table('pets')
					->join('breeds', 'breeds.id', '=', 'pets.breed_id')
					->leftJoin('shelters', 'shelters.id', '=', 'pets.shelter_id')
					->leftJoin('users', 'users.id', '=', 'pets.user_id');
		
		//If search will be added later, use if with where/orWhere clauses and 'like' and '%' before selects

		$query->select('pets.id', 'pets.species', 'pets.status', 'pets.color', 'pets.age', 'pets.description', 'pets.gender', 'breeds.breed', 'shelters.id', 'shelters.name', 'shelters.url', 'shelters.img_path', 'users.id', 'users.email', 'users.first_name', 'users.last_name');
		

		$pets = $query->get();

		return Response::json($pets);
	}

	/**
	 * Show the form for creating a new pet
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pets.create');
	}

	/**
	 * Store a newly created pet in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		};



		Pet::create($data);

		return Redirect::route('pets.index');
	}

	/**
	 * Display the specified pet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pet = Pet::findOrFail($id);

		return View::make('pets.show', compact('pet'));
	}

	/**
	 * Show the form for editing the specified pet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pet = Pet::find($id);

		return View::make('pets.edit', compact('pet'));
	}

	/**
	 * Update the specified pet in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pet = Pet::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pet->update($data);

		return Redirect::route('pets.index');
	}

	/**
	 * Remove the specified pet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pet::destroy($id);

		return Redirect::route('pets.index');
	}

}
