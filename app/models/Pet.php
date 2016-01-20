<?php

class Pet extends BaseModel
{
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