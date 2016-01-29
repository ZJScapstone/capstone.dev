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
        
        $response['pets'] = Pet::with('size', 'species', 'user', 'images')
            ->get()->map(function($pet){
                $pet->posted = $pet->created_at->diffForHumans();
                return $pet;
            });
        
        $response['user'] = Confide::user();

        return Response::json($response);
    }

    public function show($id)
    {
        $pet = Pet::find($id)->load('images', 'size', 'species', 'user');
        return View::make('users.pet')->with('pet', $pet);
    }

    public function edit($id)
    {
        $pet = Pet::find($id);
        $pet->load('size', 'species', 'images');
        return View::make('pets.edit')->with('pet', $pet);
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
        $pet             = Pet::findOrFail($id);
        $data            = Input::all();
        $data['user_id'] = Confide::user()->id;
        $validator       = Validator::make($data, Pet::$rules);
        $response  = [];

        $response['data'] = $data;


        if ( $validator->fails() ) {
            $response['success'] = false;
            $response['errors']  = $validator->errors();
            if (Request::ajax()){
                return Response::json($response);
            } else {
                return Redirect::back()->withErrors($validator->errors());
            }
        }

        $pet->update($data);
        $response['success'] = true;
        $response['errors']  = [];

        if (Request::ajax()){
            return Response::json($response);
        } else {
            return Redirect::action('UsersController@showProfile');
        }
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

        $response['success'] = true;

        return Response::json($response);
    }

}
