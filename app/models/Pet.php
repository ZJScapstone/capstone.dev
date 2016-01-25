<?php

class Pet extends BaseModel
{
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