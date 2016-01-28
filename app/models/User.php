<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Bbatsche\Entrust\Contracts\EntrustUserInterface;
use Bbatsche\Entrust\Traits\EntrustUserTrait;

class User extends Eloquent implements ConfideUserInterface, EntrustUserInterface
{
    use ConfideUser;
    use EntrustUsertrait;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function pets()
	{
		return $this->hasMany('Pet');
	}

	public function posts()
	{
		return $this->hasMany('Post');
	}

}
