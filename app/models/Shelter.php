<?php

class Shelter extends BaseModel
{
	protected $table = 'shelters';

	public function pets()
	{
		return $this->hasMany('Pet');
	}

	public function users()
	{
		return $this->hasMany('User');
	}

}