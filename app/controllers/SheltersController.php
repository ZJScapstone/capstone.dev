<?php

class SheltersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$shelters = Shelter::with('users')->get();
		return View::make('shelters.index')->with('shelters', $shelters);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('shelters.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Validator::make(Input::all(), Shelter::$rules);

        if ( $validator->fails() ) {
        	dd($validator->failed());
            Session::flash('errorMessage', 'Invalid Post!!!');
            Log::error('Failed post creation', Input::all());
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
			$shelter              = new Shelter();
			$shelter->location    = Input::get('location');
			$shelter->url         = Input::get('url');
			$shelter->phone       = Input::get('phone');
			$shelter->name        = Input::get('name');
			$shelter->description = Input::get('description');
			$shelter->img_path    = 'http://placehold.it/500';

            $shelter->save();

            Session::flash('successMessage', 'Shelter Created');

            return Redirect::action('SheltersController@index');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('shelters.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$shelter = Shelter::find($id);
		return View::make('shelters.edit')->with('shelter', $shelter);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Shelter::$rules);

        if ( $validator->fails() ) {
            Session::flash('errorMessage', 'Invalid Post!!!');
            Log::error('Failed post creation', Input::all());
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $shelter = Shelter::find($id);

			$shelter->location    = Input::get('location');
			$shelter->url         = Input::get('url');
			$shelter->phone       = Input::get('phone');
			$shelter->name        = Input::get('name');
			$shelter->description = Input::get('description');
			$shelter->img_path    = 'http://placehold.it/500';

            $shelter->save();

            Session::flash('successMessage', 'Shelter Updated');

            return Redirect::action('SheltersController@index');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$shelter = Shelter::find($id);
        $shelter->delete();

        return Redirect::action('SheltersController@index');
	}


}
