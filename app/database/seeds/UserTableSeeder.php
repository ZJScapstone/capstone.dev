<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
        $user = new User;
        $user->email = 'johndoe@site.dev';
        $user->password = 'foo_bar_1234';
        $user->password_confirmation = 'foo_bar_1234';
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->confirmed = 1;

        if(! $user->save()) {
            Log::info('Unable to create user '.$user->email, (array)$user->errors());
        } else {
            Log::info('Created user '.$user->email);
        }
	}
}

