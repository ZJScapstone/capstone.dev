<?php

class PetTableSeeder extends Seeder {

	public function run()
	{
        $pet = new Pet();

        $pet->name        = 'somename';
        $pet->species     = 'cat';
        $pet->status      = 'lost';
        $pet->color       = 'grey';
        $pet->age         = 'baby';
        $pet->description = 'text goes here';
        $pet->gender      = 'M';
        $pet->breed_id    = Breed::first()->id;
        $pet->user_id     = User::first()->id;
        $pet->shelter_id  = Shelter::first()->id;

        $pet->save();
	}
}

