<?php

class BreedTableSeeder extends Seeder {

	public function run()
	{
		$breed = new Breed();

        $breed->breed   = 'something';
        $breed->species = 'cat';
        
        $breed->save();
		
	}
}

