<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends Eloquent implements ConfideUserInterface, EntrustUserInterface
{
    use ConfideUser;
    use EntrustUsertrait;

    <?php

	public function pets()
	{
		return $this->hasMany('Pet');
	}

	public function shelters()
	{
		return $this->hasMany('Shelter');
	}

}