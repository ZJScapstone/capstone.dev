<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Bbatsche\Entrust\Contracts\EntrustUserInterface;
use Bbatsche\Entrust\Traits\EntrustUserTrait;

class User extends Eloquent implements ConfideUserInterface, EntrustUserInterface
{
    use ConfideUser;
    use EntrustUsertrait;

	public function pets()
	{
		return $this->hasMany('Pet');
	}

	public function shelters()
	{
		return $this->hasMany('Shelter');
	}

}
