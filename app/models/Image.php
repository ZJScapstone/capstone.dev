<?php

class Image extends BaseModel
{
	protected $table = 'images';

	public function pets()
	{
		return $this->belongsTo('Pet');
	}

}