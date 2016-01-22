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

        $array = [];
        $array['pets'] = $query->select('pets.id as pet_id', 'pets.species', 'pets.status', 'pets.color', 'pets.age', 'pets.description', 'pets.gender', 'breeds.breed')->get();
        $array['shelters'] = $query->select('shelters.id as shelter_id', 'shelters.name as shelter_name', 'shelters.url', 'shelters.img_path')->get();
        $array['users'] = $query->select('users.id as user_id', 'users.email as user_email', 'users.first_name as user_first', 'users.last_name as user_last')->get();

		return Response::json($array);
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

		$result = Pet::create($data);

		return $result;
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

		$result = $pet->update($data);

		return $result;
	}

	/**
	 * Remove the specified pet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$result = Pet::destroy($id);

		return $result;
	}

}
