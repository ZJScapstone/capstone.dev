<?php

use Carbon\Carbon;

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

        $response['pets'] = $query->select('pets.id',
                                           'pets.a_num',
                                           'pets.name',
                                           'pets.status',
                                           'pets.color',
                                           'pets.age',
                                           'pets.description',
                                           'pets.gender',
                                           'pets.created_at',
                                           'breeds.breed',
                                           'users.id as user_id',
                                           'users.email as user',
                                           'species.species')->get();

        $response['user'] = Confide::user();

        foreach ($response['pets'] as $pet) {
            $pet->images = Image::where('pet_id', '=', $pet->id)->get();
            $posted = new Carbon($pet->created_at);
            $pet->posted = $posted->diffForHumans();
        }

        return Response::json($response);
    }

    public function show(){}

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

        $response['input'] = $data;

        if ( $validator->fails() ) {
            $response['success'] = false;
            $response['errors']  = $validator->messages();
            return Response::json($response);
        }

        $response['success'] = true;
        $response['errors']  = [];

        $pet = new Pet($data);
        $pet->save();
        $response['pet'] = $pet;

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


        if ( $validator->fails() ) {
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
        $response['success'] = Pet::destroy($id) ? true : false;
        return Response::json($response);
    }

    public function uploadImage()
    {
        $file = Input::file('file');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move('./img/uploads', $filename);

        $img = new Image();
        $img->img_path = '/img/uploads/' . $filename;
        $img->pet_id = Input::get('pet_id');
        $img->save();

        return Response::json('asdf');
    }

}
