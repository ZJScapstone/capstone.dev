<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		
		$user->first_name   = $_ENV['USER_FIRSTNAME'];
		$user->last_name    = $_ENV['USER_LASTNAME'];
		$user->username     = $_ENV['USER_USERNAME'];
		$user->email        = $_ENV['USER_EMAIL'];
		$user->password     = $_ENV['USER_PASS'];
		$user->description  = 'I love turtles.';
		$user->phone_number = $_ENV['USER_PHONE'];

		$user->save();
	}
}

