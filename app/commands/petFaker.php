<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class petFaker extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'petFaker';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate fake pet data';

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

		echo "Lets create some pet postings!\n";
		echo "This will create a pet record with the prompted information,\n";
		echo "a random species, status, age, and color,\n";
		echo "and the first breed, shelter, and user\n\n";

		echo "name \n> ";
		$name = $this->ask('');

		echo "color\n> ";
		$color = $this->ask('');

		echo "description\n> ";
		$description = $this->ask('');

		$species = ['cat', 'dog', 'other'];
		$species = $species[array_rand($species)];

		$status = ['lost', 'found', 'adoptable'];
		$status = $status[array_rand($status)];

		$age = ['baby', 'young', 'adult', 'senior'];
		$age = $age[array_rand($age)];

		$gender = ['male', 'female', 'unknown'];
		$gender = $gender[array_rand($gender)];

		$a_num = ['342335', '234567', '234412', '123123', '123345', '345345'];
		$a_num = $a_num[array_rand($a_num)];

		$pet = new Pet();

		$pet->name        = $name;
        $pet->species     = $species;
        $pet->status      = $status;
        $pet->color       = $color;
        $pet->age         = $age;
        $pet->description = $description;
        $pet->gender      = $gender;
        $pet->a_num       = $a_num;
        $pet->breed_id    = Breed::first()->id;
        $pet->user_id     = User::first()->id;

        $pet->save();

    	$this->info('pet created!');

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
