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
        $pet->gender      = 'Female';
        $pet->user_id     = User::first()->id;
        $pet->breed       = 'Short hair domestic';
        $pet->size_id     = '1';
        $pet->species_id  = Species::first()->id;
        $pet->a_num       = 'A143656';
        $pet->save();

        $pet1_img1 = new Image();
        $pet1_img1->img_path = '/img/uploads/' . explode("\n", trim(`ls public/img/uploads/`))[0];
        $pet1_img1->pet_id = $pet->id;
        $pet1_img1->save();
	
        $pet2 = new Pet();

        $pet2->name        = 'Sheba';
        $pet2->status      = 'available';
        $pet2->color       = 'mixed';
        $pet2->age         = 'adult';
        $pet2->description = 'Hello! My name is Sheba, & I\'m a 3 year old cattle dog/lab mix. My last humans didn\'t take very good care of me, so the city took me away from them. Since they didn\'t love me enough to keep me healthy, I am heart worm positive and have a slight kennel cough. But don\'t worry! My amazing foster parents have started me on medications, & soon I\'ll be good as new! I dream every night about my new family. I really need a human that loves to play fetch and play outdoors as much as I do! I am very good at going potty outside and have exceptional inside manners. Most of all, I have so much love to give! I am silly, energetic, and despite my past, have such a good heart. Will you please open up yours and give me a chance?   -Sheba';
        $pet2->gender      = 'Female';
        $pet2->breed       = 'Australian Cattle Dog/Blue Heeler / Labrador Retriever / Mixed (short coat)';
        $pet2->user_id     = User::first()->id;
        $pet2->species_id  = '1';
        $pet2->size_id     = '2';
        $pet2->a_num       = 'A364168';
        $pet2->save();

        $pet2_img1 = new Image();
        $pet2_img1->img_path = 'img/petimg/sheba1.jpg';
        $pet2_img1->pet_id = $pet2->id;
        $pet2_img1->save();

        $pet3 = new Pet();

        $pet3->name        = 'Maribel';
        $pet3->status      = 'available';
        $pet3->color       = 'Tan and White';
        $pet3->age         = 'adult';
        $pet3->description = 'Maribel is a very sweet, and loving gentle giant. She loves to be the center of attention. Maribel loves to play fetch, knows sit and stay. She gets along great with other dogs and likes to play with kids. Her favorite time of the day is Dinnertime :) Sweet Maribel has been through a lot in her short life, but despite it all she\'s still very loving and happy. She will make a great addition to any family!';
        $pet3->gender      = 'Female';
        $pet3->breed       = 'American Pit Bull Terrier (short coat)';
        $pet3->user_id     = User::first()->id;
        $pet3->species_id  = '1';
        $pet3->size_id     = '3';
        $pet3->a_num       = 'A364378';
        $pet3->save();

        $pet3_img1 = new Image();
        $pet3_img1->img_path = 'img/petimg/maribel1.jpg';
        $pet3_img1->pet_id = $pet3->id;
        $pet3_img1->save();

        $pet4 = new Pet();

        $pet4->name        = 'Max';
        $pet4->status      = 'available';
        $pet4->color       = 'tan';
        $pet4->age         = 'adult';
        $pet4->description = 'Max is a 25lb mixed Chihuahua that is sweet as can be.  He is house, crate, & leash trained.  He loves, I mean LOVES to play fetch with his ball.  Max would do best with an active family that would already have another dog in their home.  He loves to play & snuggle with other dogs.  Max is just now learning that cats are ok, but he does still try chasing them.  Max does great with kids.  Max loves being outside.  If you have a doggy door he would put it to excellent use.  If you are looking for a cutie to snuggle with than Max is your boy.';
        $pet4->gender      = 'Male';
        $pet4->breed       = 'Chihuahua / Mixed (short coat)';
        $pet4->user_id     = User::first()->id;
        $pet4->species_id  = '1';
        $pet4->size_id     = '1';
        $pet4->a_num       = 'A310113';
        $pet4->save();

        $pet4_img1 = new Image();
        $pet4_img1->img_path = 'img/petimg/max1.png';
        $pet4_img1->pet_id = $pet4->id;
        $pet4_img1->save();

        $pet5 = new Pet();

        $pet5->name        = 'Nilla';
        $pet5->status      = 'available';
        $pet5->color       = 'white';
        $pet5->age         = 'adult';
        $pet5->description = 'Nilla is filled with energy and gets along with all animals. She is very submissive and can be trusted with small children. She is looking for a loving forever home.
                She was scheduled to be euthanized, but San Antonio Pets Alive! saved her and now they are helping her find the forever, loving home that she has never known.';
        $pet5->gender      = 'Female';
        $pet5->breed       = 'Labrador Retriever / Mixed (short coat)';
        $pet5->user_id     = User::first()->id;
        $pet5->species_id  = '1';
        $pet5->size_id     = '2';
        $pet5->a_num       = 'A346070';
        $pet5->save();

        $pet5_img1 = new Image();
        $pet5_img1->img_path = 'img/petimg/nilla1.jpg';
        $pet5_img1->pet_id = $pet5->id;
        $pet5_img1->save();


        }

}

