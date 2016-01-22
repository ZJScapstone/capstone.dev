<?php

class Pet extends BaseModel
{
    public static $rules = array(
        'name'    => 'max:100',
        'species' => 'required',
        'status'  => 'required',
        'color'   => 'max:100',
        'age'     => 'required',
        'description' => 'required|min:10|max:10000',
        'gender'  => 'required',
        'breed'   => 'required'
    );

    public static function create($data)
    {
        $pet = new Pet();

        $pet->name = $data['name'];
        $pet->color = $data['color'];
        $pet->species = $data['species'];
        $pet->status = $data['status'];
        $pet->age = $data['age'];
        $pet->description = $data['description'];
        $pet->gender = $data['gender'];
        $pet->breed_id = $data['breed_id'];
        $pet->user_id = Confide::user();

        $result = $pet->save();

        if(!$result) {
            return Response::json(array('message' => 'Could not create posting', 'data' => $data ));
        } else {
            return Response::json(array('message' => 'Pet posting created', 'data' => $result));
        }
    }

    public function update($data)
    {

        $this->name = $data['name'];
        $this->color = $data['color'];
        $this->species = $data['species'];
        $this->status = $data['status'];
        $this->age = $data['age'];
        $this->description = $data['description'];
        $this->gender = $data['gender'];
        $this->breed_id = $data['breed_id'];

        $result = $this->save();

        if(!$result) {
            return Response::json(array('message' => 'Could not save edits', 'success' => 'false', 'data' => $data ));
        } else {
            return Response::json(array('message' => 'Post successfully updated', 'success' => 'true', 'data' => $result));
        }
    }

    public function destroy($id)
    {
        $pet = Pet::find($id);

        $result = $pet->delete();

        if(!$result) {
            return Response::json(array('message' => 'Failed to delete posting', 'success' => 'false', 'data' => $pet));
        } else {
            return Response::json(array('message' => 'Post successfully deleted', 'success' => 'true', 'data' => $result));
        }
    }

	public function user()
    {
        return $this->belongsTo('User');
    }
    public function shelter()
    {
        return $this->belongsTo('Shelter');
    }
    public function breed()
    {
        return $this->belongsTo('Breed');
    }
	public function images()
	{
		return $this->hasMany('Image');
	}
}