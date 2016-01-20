<?php

class Breed extends BaseModel
{
	protected $table = 'breeds';

	public function pets()
	{
		return $this->belongsToMany('Pet');
	}

}