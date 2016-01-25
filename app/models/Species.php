<?php

class Species extends BaseModel
{
	public function breeds()
    {
        return $this->belongsToMany('Breed');
    }

}