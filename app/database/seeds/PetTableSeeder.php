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
        $pet1->gender      = 'Female';
        $pet1->user_id     = User::first()->id;
        $pet1->breed       = 'Short hair domestic';
        $pet1->size_id     = '1';
        $pet1->species_id  = '2';
        $pet1->a_num       = 'A143656';
        $pet1->save();

        $pet1_img1 = new Image();
        $pet1_img1->img_path = '/img/uploads/' . explode("\n", trim(`ls public/img/uploads/`))[0];
        $pet1_img1->pet_id = $pet1->id;
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
        $pet2_img1->img_path = 'img/petimg/sheba1.png';
        $pet2_img1->pet_id = $pet2->id;
        $pet2_img1->save();
        $pet2_img2 = new Image();
        $pet2_img2->img_path = 'img/petimg/sheba2.jpg';
        $pet2_img2->pet_id = $pet2->id;
        $pet2_img2->save();

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
        $pet3_img2 = new Image();
        $pet3_img2->img_path = 'img/petimg/maribel2.jpg';
        $pet3_img2->pet_id = $pet3->id;
        $pet3_img2->save();

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
        $pet4_img2 = new Image();
        $pet4_img2->img_path = 'img/petimg/max2.jpg';
        $pet4_img2->pet_id = $pet4->id;
        $pet4_img2->save();

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
        $pet5_img2 = new Image();
        $pet5_img2->img_path = 'img/petimg/nilla2.jpg';
        $pet5_img2->pet_id = $pet5->id;
        $pet5_img2->save();

        $pet6 = new Pet();

        $pet6->name        = 'Sebastian';
        $pet6->status      = 'available';
        $pet6->color       = 'orange';
        $pet6->age         = 'baby';
        $pet6->description = 'Sebastian is a super lovable little guy who is missing his freedom to run around. He and his siblings had to be returned to the shelter because we the fosters took in our grandmother which has been placed on hospice. Our furr babies were getting to be too much for us to handle with grandma in the house. Sebastian has grown up knowing how to sleep quietly in a crate and play with our sweet dog. He has been around a 2yo and has been fine with her picking him up kinda crazy like, but hasnt had prolonged contact with toddlers. he is fine with the litterbox and LOVES to stare out the window at the birds at the feeder. He is definitely a real lovebug. one wierd trait, he loves the smell of irish spring bar soap. Its like cat nip to him!! whenever my husband would get out of the shower he would attack his feet ;-P Please give sebastian a home he will love you for ever!!! ';
        $pet6->gender      = 'Male';
        $pet6->breed       = 'Domestic Short Hair / Tabby (short coat)';
        $pet6->user_id     = User::first()->id;
        $pet6->species_id  = '2';
        $pet6->size_id     = '1';
        $pet6->a_num       = 'A330726';
        $pet6->save();

        $pet6_img1 = new Image();
        $pet6_img1->img_path = 'img/petimg/sebastian1.png';
        $pet6_img1->pet_id = $pet6->id;
        $pet6_img1->save();
        $pet6_img2 = new Image();
        $pet6_img2->img_path = 'img/petimg/sebastian2.jpg';
        $pet6_img2->pet_id = $pet6->id;
        $pet6_img2->save();

        $pet7 = new Pet();

        $pet7->name        = 'Matty';
        $pet7->status      = 'available';
        $pet7->color       = 'white';
        $pet7->age         = 'young';
        $pet7->description = ' I can fit perfectly on your lap! Matty ID#297703  is a male, one-year old Chihuahua & Rat Terrier blend.  He is a completely ADORABLE and tiny little dog ... the quintessential little lap dog.  He loves going for walks and he does well with other dogs.  Please come meet him and fall in love! He is neutered, current on vaccinations, microchipped and his adoption comes with one free month of pet health insurance. ';
        $pet7->gender      = 'Male';
        $pet7->breed       = 'Chihuahua / Rat Terrier / Mixed (short coat)';
        $pet7->user_id     = User::first()->id;
        $pet7->species_id  = '1';
        $pet7->size_id     = '2';
        $pet7->a_num       = 'A297703';
        $pet7->save();

        $pet7_img1 = new Image();
        $pet7_img1->img_path = 'img/petimg/matty1.jpg';
        $pet7_img1->pet_id = $pet7->id;
        $pet7_img1->save();
        $pet7_img2 = new Image();
        $pet7_img2->img_path = 'img/petimg/matty2.jpg';
        $pet7_img2->pet_id = $pet7->id;
        $pet7_img2->save();

        $pet8 = new Pet();

        $pet8->name        = 'Alex AKA Jade';
        $pet8->status      = 'available';
        $pet8->color       = 'white and black';
        $pet8->age         = 'young';
        $pet8->description = 'Jade is one of the most loyal dogs I\'ve had the pleasure of fostering. She is full of love and just wants it back in return. She has to be the only dog and absolutely NO cats. She\'s very dominant so would make someone\'s best friend if you can have her as your only pet. She is an INSIDE dog she sleeps with my 3 year old and I. She protects the children as well as myself and sister. Please only serious inquiries. She\'s so full of love and deserves a forever home that can reciprocate her love.
';
        $pet8->gender      = 'Female';
        $pet8->breed       = 'Great Dane / American Staffordshire Terrier (short coat)';
        $pet8->user_id     = User::first()->id;
        $pet8->species_id  = '1';
        $pet8->size_id     = '3';
        $pet8->a_num       = 'A303622';
        $pet8->save();

        $pet8_img1 = new Image();
        $pet8_img1->img_path = 'img/petimg/jade1.jpg';
        $pet8_img1->pet_id = $pet8->id;
        $pet8_img1->save();
        $pet8_img2 = new Image();
        $pet8_img2->img_path = 'img/petimg/jade2.jpg';
        $pet8_img2->pet_id = $pet8->id;
        $pet8_img2->save();

        $pet9 = new Pet();

        $pet9->name        = 'Patch';
        $pet9->status      = 'available';
        $pet9->color       = 'white';
        $pet9->age         = 'adult';
        $pet9->description = 'Patch is Special Needs as he distrusts people and can be quite aggressive. He was severely abused and neglected as his intake photos clearly show. He is a lover once he attaches to his one person, though. It takes about an hour once he is out of his crate and lots of treats. Then he wants to cuddle in your lap. He loves gentle ear rubs and gives kisses all the time. Patch is very quiet, not a yappy guy. Loves to be held and with his person as much as possible. He shows some interest in balls and play, but is more interested in attention. He has NEVER been destructive when left alone nor has he ever had an accident while in my home.  Patch does fine with small dogss, and would do best in a single person home with very little human traffic (or at least where he could be put in a room away from anyone other then his person). He has come a very long way, and now needs his own person and a loving place to call home. ';
        $pet9->gender      = 'Male';
        $pet9->breed       = 'Chihuahua / Rat Terrier / Mixed (short coat)';
        $pet9->user_id     = User::first()->id;
        $pet9->species_id  = '1';
        $pet9->size_id     = '1';
        $pet9->a_num       = 'A303587';
        $pet9->save();

        $pet9_img1 = new Image();
        $pet9_img1->img_path = 'img/petimg/patch1.jpg';
        $pet9_img1->pet_id = $pet9->id;
        $pet9_img1->save();
        $pet9_img2 = new Image();
        $pet9_img2->img_path = 'img/petimg/patch2.jpg';
        $pet9_img2->pet_id = $pet9->id;
        $pet9_img2->save();

        $pet10 = new Pet();

        $pet10->name        = 'Avery';
        $pet10->status      = 'available';
        $pet10->color       = 'calico';
        $pet10->age         = 'young';
        $pet10->description = 'FeLV+ Special Needs. Avery ID# 22316659 is a beautiful female, young adult Calico. She is a very sweet, quiet and gentle kitty. Avery is special needs because she is FeLV+positive. She is currently healthy. FeLV+ cats typically live up to 4 years or so after receiving their diagnosis and for the remainder of their life, they can only live with dogs, other non-feline pets, or o ther cats who are also FeLV+positive. They need to remain indoors always, eat a nutritionally-balanced diet and have veterinary care if they ever show signs of illness. Because Avery is FeLV+, her adoption fee is waived. She is spayed, current on vaccinations, microchipped and her adoption comes with one free month of pet health insurance. You can meet her at PETCO Ingram Park, 6001 NW Loop 410, San Antonio, TX 78238. Hours are Mondays-Fridays 11 a.m. until 8 p.m.; Saturdays & Sundays 10 a.m. until 7 p.m. For additional information, please write to petco.ingram@sanantoniopetsalive.org AND to Adopt@sanantoniopetsalive.org or call 210-370-7612. When inquiring about this pet, please be sure to give the pet\'s ID#.';
        $pet10->gender      = 'Female';
        $pet10->breed       = 'Domestic Short Hair';
        $pet10->user_id     = User::first()->id;
        $pet10->species_id  = '2';
        $pet10->size_id     = '1';
        $pet10->a_num       = '22316659';
        $pet10->save();

        $pet10_img1 = new Image();
        $pet10_img1->img_path = 'img/petimg/avery1.jpg';
        $pet10_img1->pet_id = $pet10->id;
        $pet10_img1->save();
        $pet10_img2 = new Image();
        $pet10_img2->img_path = 'img/petimg/avery2.jpg';
        $pet10_img2->pet_id = $pet10->id;
        $pet10_img2->save();

        $pet11 = new Pet();

        $pet11->name        = 'Angel';
        $pet11->status      = 'available';
        $pet11->color       = 'tan and white';
        $pet11->age         = 'baby';
        $pet11->description = 'Angel is a female, 12-week old American Staffy blend. Angel weighs approximately 10 1/2 pounds. Once she is spayed she will be adoption ready! If interested please inquire and we can make arrangements for a meet and greet and possible adoption. Angel is a bundle of energy. She loves to romp and play with her toys. Angel is cuddle bug and loves to give lots of hugs and kisses. Angel can be a laid back kind of girl, but she can keep up with her siblings in the playful puppy department. She has never been around young kids or cat. I have a teenage son and they love to play and chase him all around the house. Angel will be spayed, microchipped, current on vaccinations, and her adoption comes with one free month of pet health insurance! Please email me to meet this little bundle of love and remember ... when you adopt a puppy you are making a lifetime commitment to that puppy!';
        $pet11->gender      = 'Female';
        $pet11->breed       = 'American Staffordshire Terrier (short coat)';
        $pet11->user_id     = User::first()->id;
        $pet11->species_id  = '1';
        $pet11->size_id     = '2';
        $pet11->a_num       = 'A360560';
        $pet11->save();

        $pet11_img1 = new Image();
        $pet11_img1->img_path = 'img/petimg/angel1.jpg';
        $pet11_img1->pet_id = $pet11->id;
        $pet11_img1->save();
        $pet11_img2 = new Image();
        $pet11_img2->img_path = 'img/petimg/angel2.jpg';
        $pet11_img2->pet_id = $pet11->id;
        $pet11_img2->save();

        $pet12 = new Pet();

        $pet12->name        = 'Angel';
        $pet12->status      = 'available';
        $pet12->color       = 'tan and white';
        $pet12->age         = 'baby';
        $pet12->description = 'Angel is a female, 12-week old American Staffy blend. Angel weighs approximately 10 1/2 pounds. Once she is spayed she will be adoption ready! If interested please inquire and we can make arrangements for a meet and greet and possible adoption. Angel is a bundle of energy. She loves to romp and play with her toys. Angel is cuddle bug and loves to give lots of hugs and kisses. Angel can be a laid back kind of girl, but she can keep up with her siblings in the playful puppy department. She has never been around young kids or cat. I have a teenage son and they love to play and chase him all around the house. Angel will be spayed, microchipped, current on vaccinations, and her adoption comes with one free month of pet health insurance! Please email me to meet this little bundle of love and remember ... when you adopt a puppy you are making a lifetime commitment to that puppy!';
        $pet12->gender      = 'Female';
        $pet12->breed       = 'American Staffordshire Terrier (short coat)';
        $pet12->user_id     = User::first()->id;
        $pet12->species_id  = '1';
        $pet12->size_id     = '2';
        $pet12->a_num       = 'A360560';
        $pet12->save();

        $pet12_img1 = new Image();
        $pet12_img1->img_path = 'img/petimg/angel1.jpg';
        $pet12_img1->pet_id = $pet12->id;
        $pet12_img1->save();
        $pet12_img2 = new Image();
        $pet12_img2->img_path = 'img/petimg/angel2.jpg';
        $pet12_img2->pet_id = $pet12->id;
        $pet12_img2->save();

        $pet13 = new Pet();

        $pet13->name        = 'Angel';
        $pet13->status      = 'available';
        $pet13->color       = 'tan and white';
        $pet13->age         = 'baby';
        $pet13->description = 'Angel is a female, 12-week old American Staffy blend. Angel weighs approximately 10 1/2 pounds. Once she is spayed she will be adoption ready! If interested please inquire and we can make arrangements for a meet and greet and possible adoption. Angel is a bundle of energy. She loves to romp and play with her toys. Angel is cuddle bug and loves to give lots of hugs and kisses. Angel can be a laid back kind of girl, but she can keep up with her siblings in the playful puppy department. She has never been around young kids or cat. I have a teenage son and they love to play and chase him all around the house. Angel will be spayed, microchipped, current on vaccinations, and her adoption comes with one free month of pet health insurance! Please email me to meet this little bundle of love and remember ... when you adopt a puppy you are making a lifetime commitment to that puppy!';
        $pet13->gender      = 'Female';
        $pet13->breed       = 'American Staffordshire Terrier (short coat)';
        $pet13->user_id     = User::first()->id;
        $pet13->species_id  = '1';
        $pet13->size_id     = '2';
        $pet13->a_num       = 'A360560';
        $pet13->save();

        $pet13_img1 = new Image();
        $pet13_img1->img_path = 'img/petimg/angel1.jpg';
        $pet13_img1->pet_id = $pet13->id;
        $pet13_img1->save();
        $pet13_img2 = new Image();
        $pet13_img2->img_path = 'img/petimg/angel2.jpg';
        $pet13_img2->pet_id = $pet13->id;
        $pet13_img2->save();

        $pet14 = new Pet();

        $pet14->name        = 'Annie';
        $pet14->status      = 'available';
        $pet14->color       = 'Brown Tabby';
        $pet14->age         = 'young';
        $pet14->description = 'Can you give this sweet girl a home?';
        $pet14->gender      = 'Female';
        $pet14->breed       = 'Domestic Short Hair (short coat)';
        $pet14->user_id     = User::first()->id;
        $pet14->species_id  = '2';
        $pet14->size_id     = '1';
        $pet14->a_num       = 'A327383';
        $pet14->save();

        $pet14_img1 = new Image();
        $pet14_img1->img_path = 'img/petimg/annie1.jpg';
        $pet14_img1->pet_id = $pet14->id;
        $pet14_img1->save();


        }

}

