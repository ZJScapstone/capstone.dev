<?php

class Shelter extends BaseModel
{
	protected $table = 'shelters';

    public static $rules = [
        'name'        => 'required',
        'description' => 'required'
    ];

	public function pets()
	{
		return $this->hasMany('Pet');
	}

	public function users()
	{
		return $this->hasMany('User');
	}

}