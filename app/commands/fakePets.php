<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class fakePets extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'fakePets';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Fake a bunch of pet data.';

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
		echo "How many pets would you like to fake?\n> ";
		$n = $this->ask('');

		$names        = ['fido', 'fluffy', 'muffins', 'whiskers', 'benji', 'kitty'];
		$colors       = ['white', 'brown', 'black', 'calico', 'grey'];
		$descriptions = [
			'Use lap as chair. I am the best pooping rainbow while flying in a toasted bread costume in space lick yarn hanging out of own butt and stare at wall turn and meow stare at wall some more meow again continue staring . Stare at ceiling light eat grass, throw it back up, yet make meme, make cute face. Eat and than sleep on your face climb leg, so has closed eyes but still sees you. Hunt by meowing loudly at 5am next to human slave food dispenser drink water out of the faucet hide at bottom of staircase to trip human chew iPad power cord poop in litter box, scratch the walls yet fall over dead (not really but gets sypathy). Poop in the plant pot lick plastic bags. Sniff other cat\'s butt and hang jaw half open thereafter intently sniff hand get video posted to internet for chasing red dot attack feet, yet immediately regret falling into bathtub but run in circles. I am the best knock over christmas tree hunt anything that moves. Eat a plant, kill a hand. Sweet beast thug cat . Meow all night having their mate disturbing sleeping humans flop over, so ears back wide eyed. Please stop looking at your phone and pet me behind the couch claw drapes, eat from dog\'s food asdflkjaertvlkjasntvkjn (sits on keyboard). Pee in the shoe human is washing you why halp oh the horror flee scratch hiss bite.',
			'Poop in litter box, scratch the walls refuse to drink water except out of someone\'s glass or leave dead animals as gifts, and put toy mouse in food bowl run out of litter box at full speed . Run in circles intently stare at the same spot. Lounge in doorway. Walk on car leaving trail of paw prints on hood and windshield cat snacks. Refuse to drink water except out of someone\'s glass pelt around the house and up and down stairs chasing phantoms eat prawns daintily with a claw then lick paws clean wash down prawns with a lap of carnation milk then retire to the warmest spot on the couch to claw at the fabric before taking a catnap, so if it smells like fish eat as much as you wish or the dog smells bad. Leave hair everywhere meowzer! so chew iPad power cord, and poop on grasses yet sleep on dog bed, force dog to sleep on floor. Stare at wall turn and meow stare at wall some more meow again continue staring touch water with paw then recoil in horror spread kitty litter all over house but all of a sudden cat goes crazy chase laser instantly break out into full speed gallop across the house for no reason. Cat is love, cat is life. Sweet beast destroy the blinds pee in human\'s bed until he cleans the litter box, stare at wall turn and meow stare at wall some more meow again continue staring yet brown cats with pink ears and curl into a furry donut. Jump around on couch, meow constantly until given food, sit in box. Hide from vacuum cleaner human give me attention meow but has closed eyes but still sees you. Bathe private parts with tongue then lick owner\'s face lick butt love to play with owner\'s hair tie but poop in the plant pot for inspect anything brought into the house find something else more interesting. Mark territory mark territory stare out the window, but leave hair everywhere claws in your leg and get video posted to internet for chasing red dot. When in doubt, wash spot something, big eyes, big eyes, crouch, shake butt, prepare to pounce but hunt by meowing loudly at 5am next to human slave food dispenser. Meow for food, then when human fills food dish, take a few bites of food and continue meowing jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed hack up furballs. Eat and than sleep on your face pelt around the house and up and down stairs chasing phantoms but touch water with paw then recoil in horror meow chase mice. I like big cats and i can not lie meowing non stop for food, tuxedo cats always looking dapper or hack up furballs asdflkjaertvlkjasntvkjn (sits on keyboard). Mark territory attack the dog then pretend like nothing happened shake treat bag, rub face on everything, for damn that dog . Get video posted to internet for chasing red dot sniff other cat\'s butt and hang jaw half open thereafter unwrap toilet paper i like big cats and i can not lie yet present belly, scratch hand when stroked, so poop on grasses chew foot. Meow paw at beetle and eat it before it gets away, eat from dog\'s food sun bathe, but scratch leg; meow for can opener to feed me but spit up on light gray carpet instead of adjacent linoleum and the dog smells bad. Leave hair everywhere kitty power! , human is washing you why halp oh the horror flee scratch hiss bite hide from vacuum cleaner meow all night having their mate disturbing sleeping humans. Mark territory spread kitty litter all over house play riveting piece on synthesizer keyboard thug cat . Hopped up on catnip purr while eating but scream at teh bath, make meme, make cute face or lick plastic bags yet spit up on light gray carpet instead of adjacent linoleum. Hide head under blanket so no one can see.',
			'Eat from dog\'s food. Paw at beetle and eat it before it gets away play time, yet meow chase ball of string has closed eyes but still sees you hide when guests come over, and have secret plans. White cat sleeps on a black shirt stretch destroy couch as revenge. Leave hair everywhere put toy mouse in food bowl run out of litter box at full speed but asdflkjaertvlkjasntvkjn (sits on keyboard) ears back wide eyed yet my left donut is missing, as is my right asdflkjaertvlkjasntvkjn (sits on keyboard), or stare at ceiling. Vommit food and eat it again sun bathe intently sniff hand, fall over dead (not really but gets sypathy) paw at beetle and eat it before it gets away, for meow under the bed.'
		];
		$status = ['lost', 'found', 'adoptable'];
		$age    = ['baby', 'young', 'adult', 'senior'];
		$gender = ['male', 'female', 'unknown'];
		$a_num  = ['342335', '234567', '234412', '123123', '123345', '345345'];
		$breeds = ['doberman', 'short hair', 'long hair', 'husky'];
		$images = explode("\n", trim(`ls public/img/uploads`));

		for ($i=0; $i < $n; $i++) { 
			$pet = new Pet();

			$pet->name        = $names[array_rand($names)];
			$pet->species_id  = Species::first()->id;
			$pet->status      = $status[array_rand($status)];
			$pet->color       = $colors[array_rand($colors)];
			$pet->age         = $age[array_rand($age)];
			$pet->description = $descriptions[array_rand($descriptions)];
			$pet->gender      = $gender[array_rand($gender)];
			$pet->a_num       = $a_num[array_rand($a_num)];
			$pet->breed       = $breeds[array_rand($breeds)];
			$pet->size_id     = Size::first()->id;
			$pet->user_id     = User::first()->id;

	        $pet->save();

	        for ($i=0; $i < 5; $i++) { 
				$img = new Image();
				$img->pet_id   = $pet->id;
				$img->img_path = '/img/uploads/' . $images[array_rand($images)];
				$img->save();
	        }
		}
    	$this->info('pets created!');

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
