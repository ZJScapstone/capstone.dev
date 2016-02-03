<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
        $user = new User;
        $user->email = 'sahappytails@gmail.com';
        $user->password = 'codeup1100';
        $user->password_confirmation = 'codeup1100';
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->confirmed = 1;
        $user->is_admin = 1;
        $user->img_path = '';
        $user->description = '';
        $user->first_name = '';
        $user->last_name = '';

        if(! $user->save()) {
            Log::info('Unable to create user '.$user->email, (array)$user->errors());
        } else {
            Log::info('Created user '.$user->email);
        }

        $user2 = new User;
        $user2->email = 'sjmrstevens@gmail.com';
        $user2->password = 'codeup';
        $user2->password_confirmation = 'codeup';
        $user2->confirmation_code = md5(uniqid(mt_rand(), true));
        $user2->confirmed = 1;
        $user2->is_foster = 1;
        $user2->img_path = '/img/sjaura.jpg';
        $user2->description = 'I love animals!';
        $user2->first_name = 'Sarajane';
        $user2->last_name = 'Stevens';

        if(! $user2->save()) {
            Log::info('Unable to create user '.$user2->email, (array)$user2->errors());
        } else {
            Log::info('Created user '.$user2->email);
        }

        $user3 = new User;
        $user3->email = 'zachgulde@gmail.com';
        $user3->password = 'codeup';
        $user3->password_confirmation = 'codeup';
        $user3->confirmation_code = md5(uniqid(mt_rand(), true));
        $user3->confirmed = 1;
        $user3->is_foster = 1;
        $user3->img_path = '/img/zach.jpg';
        $user3->description = 'Knick knack paddiwhack give a dog a bone!';
        $user3->first_name = 'Zach';
        $user3->last_name = 'Gulde';

        if(! $user3->save()) {
            Log::info('Unable to create user '.$user3->email, (array)$user3->errors());
        } else {
            Log::info('Created user '.$user3->email);
        }

        $user4 = new User;
        $user4->email = 'jreyes.satx@gmail.com';
        $user4->password = 'codeup';
        $user4->password_confirmation = 'codeup';
        $user4->confirmation_code = md5(uniqid(mt_rand(), true));
        $user4->confirmed = 1;
        $user4->is_foster = 1;
        $user4->img_path = '/img/jonathan.jpg';
        $user4->description = 'I love horses, best of all the animals, I love horses, they\'re my friends!';
        $user4->first_name = 'Jonathan';
        $user4->last_name = 'Reyes';

        if(! $user4->save()) {
            Log::info('Unable to create user '.$user4->email, (array)$user4->errors());
        } else {
            Log::info('Created user '.$user4->email);
        }
	}
}

