<?php

class Pet extends BaseModel
{
    public static $rules = array(
        'name'    => 'max:100',
        'species_id' => 'required',
        'status'  => 'required',
        'color'   => 'max:100',
        'age'     => 'required',
        'description' => 'required|min:10|max:10000',
        'gender'  => 'required',
        'breed_id'   => 'required',
        'a_num' => 'required'
    );

    protected $fillable = ['name', 'species', 'status', 'color', 'age',
                           'description', 'gender', 'breed_id', 'species_id',
                           'a_num'];

	public function user()
    {
        return $this->belongsTo('User');
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