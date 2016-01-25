<?php

class PetsController extends \BaseController {

    /**
     * Display a listing of pets
     *
     * @return Response
     */
    public function index()
    {
        $response = [];

        $query = DB::table('pets')
                    ->join('breeds', 'breeds.id', '=', 'pets.breed_id')
                    ->join('species', 'pets.species_id', '=', 'species.id')
                    ->leftJoin('users', 'users.id', '=', 'pets.user_id');

        $pets = $query->select('pets.id as id',
                               'pets.species',
                               'pets.status',
                               'pets.color',
                               'pets.age',
                               'pets.description',
                               'pets.gender',
                               'users.id as user_id',
                               'users.email as user')
                      ->get();
        $response['pets'] = $pets;

        $response['breeds'] = Breed::all();

        return Response::json($response);
    }

    /**
     * Store a newly created pet in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data      = Input::all();
        $validator = Validator::make($data, Pet::$rules);
        $response  = [];

        $response['data'] = $data;

        if ( $validator->fails() ){
            $response['success'] = false;
            $response['errors']  = $validator->messages();
            return Response::json($response);
        }

        $response['success'] = true;
        $response['errors']  = [];

        $pet = new Pet($data);
        $pet->user_id = 1;
        $pet->save();

        return Response::json($response);
    }

    /**
     * Update the specified pet in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $pet       = Pet::findOrFail($id);
        $data      = Input::all();
        $validator = Validator::make($data, Pet::$rules);
        $response  = [];

        $response['data'] = $data;


        if ($validator->fails())
        {
            $resposne['success'] = false;
            $response['errors']  = $validator->errors();
            return Response::json($response);
        }

        $pet->update($data);
        $response['success'] = true;
        $response['errors']  = [];

        return Response::json($response);
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
