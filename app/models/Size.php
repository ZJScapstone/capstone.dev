<?php

class Size extends BaseModel
{
	protected $table = 'sizes';

	public function pets()
	{
		return $this->belongsToMany('Pet');
	}

}