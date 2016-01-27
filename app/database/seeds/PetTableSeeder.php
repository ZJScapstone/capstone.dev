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
        $pet->user_id     = User::first()->id;
        $pet->breed       = 'Short hair domestic';
        $pet->size_id     = '1';
        $pet->species_id  = Species::first()->id;
        $pet->a_num       = 'A143656';

        $pet->save();

        $img = new Image();
        $img->img_path = '/img/uploads/' . explode("\n", trim(`ls public/img/uploads/`))[0];
        $img->pet_id = $pet->id;
        $img->save();
	
        $pet2 = new Pet();

        $pet2->name        = 'Sheba';
        $pet2->status      = 'available';
        $pet2->color       = 'mixed';
        $pet2->age         = 'adult';
        $pet2->description = 'Hello! My name is Sheba, & I\'m a 3 year old cattle dog/lab mix. My last humans didn\'t take very good care of me, so the city took me away from them. Since they didn\'t love me enough to keep me healthy, I am heart worm positive and have a slight kennel cough. But don\'t worry! My amazing foster parents have started me on medications, & soon I\'ll be good as new! I dream every night about my new family. I really need a human that loves to play fetch and play outdoors as much as I do! I am very good at going potty outside and have exceptional inside manners. Most of all, I have so much love to give! I am silly, energetic, and despite my past, have such a good heart. Will you please open up yours and give me a chance?   -Sheba';
        $pet2->gender      = 'F';
        $pet2->breed       = 'Australian Cattle Dog/Blue Heeler / Labrador Retriever / Mixed (short coat)';
        $pet2->user_id     = User::first()->id;
        $pet2->species_id  = '1';
        $pet2->size_id     = '2';
        $pet2->a_num       = 'A364168';

        $pet2->save();

        $img2 = new Image();
        $img2->img_path = 'img/petimg/sheba1.jpg';
        $img2->pet_id = $pet2->id;
        $img2->save();

        }

}

