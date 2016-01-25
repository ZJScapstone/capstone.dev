<?php

class PetTableSeeder extends Seeder {

	public function run()
	{
        $pet = new Pet();

        $pet->name        = 'Marimba';
        $pet->status      = 'adopted';
        $pet->color       = 'calico';
        $pet->age         = 'adult';
        $pet->description = 'text goes here';
        $pet->gender      = 'F';
        $pet->breed_id    = Breed::first()->id;
        $pet->user_id     = User::first()->id;
        $pet->species_id  = Species::first()->id;
        $pet->a_num       = 'A143656';

        $pet->save();
	}
}

