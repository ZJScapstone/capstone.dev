<?php

class PetTableSeeder extends Seeder {

	public function run()
	{
        $pet1 = new Pet();

        $pet1->name        = 'Marimba';
        $pet1->status      = 'adopted';
        $pet1->color       = 'calico';
        $pet1->age         = 'adult';
        $pet1->description = 'text goes here';
        $pet1->gender      = 'F';
        $pet1->breed_id    = Breed::first()->id;
        $pet1->user_id     = User::first()->id;
        $pet1->species_id  = Species::first()->id;
        $pet1->a_num       = '234543';
        $pet1->img_path    = Image::first()->id;
        $pet1->save();
	

        $pet2 = new Pet();

        $pet2->name        = 'Ruby';
        $pet2->status      = 'available';
        $pet2->color       = 'calico';
        $pet2->age         = 'adult';
        $pet2->description = 'text goes here';
        $pet2->gender      = 'F';
        $pet2->breed_id    = Breed::first()->id;
        $pet2->user_id     = User::first()->id;
        $pet2->species_id  = '1';
        $pet2->a_num       = '543456';
        $pet2->img_path    = Image::first()->id;
        $pet2->save();
        

        $pet3 = new Pet();

        $pet3->name        = 'Marimba';
        $pet3->status      = 'inprogress';
        $pet3->color       = 'calico';
        $pet3->age         = 'adult';
        $pet3->description = 'text goes here';
        $pet3->gender      = 'F';
        $pet3->breed_id    = Breed::first()->id;
        $pet3->user_id     = User::first()->id;
        $pet3->species_id  = '2';
        $pet3->a_num       = '354345';
        $pet3->img_path    = Image::first()->id;
        $pet3->save();
        }
}

