<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class newUser extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'newUser';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'create a new user';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		echo "\n\n| We will create a new user record with prompted data, including a\n";
		echo "| password. Remember what password you chose; this will check to\n";
		echo "| make sure you put in the same password twice, but after that\n";
		echo "| the password will be hashed! We will also set the verified\n";
		echo "| attribute so we don't have to deal with email validation.\n\n";

		echo "email\n> ";
		$email = $this->ask('');

		echo "password\n> ";
		$password = $this->secret('');

		echo "confirm password\n> ";
		$confirmPwd = $this->secret('');

		if ($password !== $confirmPwd) {
			echo "The passwords don't match!\n";
			die();
		}

		$user = new User();
		$user->email = $email;
        $user->password = $password;
        $user->password_confirmation = $confirmPwd;
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->confirmed = 1;

        if ($user->save()) {
	        $this->info('user created!');
        } else {
        	$this->error('something went wrong!');
        }

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			// array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
