<?php

class PostType extends BaseModel
{
	protected $table = 'post_type';

	public function posts()
	{
		return $this->hasMany('Post');
	}

}