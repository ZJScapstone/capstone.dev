<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $user = User::firstOrFail();

        $post1 = new Post; 
            $post1->title = 'FAQ'; 
            $post1->body = 'Who is San Antonio Pets Alive!?
Established in 2012, SAPA! is a 501(c)(3) nonprofit organization created specifically to work in partnership with San Antonio Animal Care Services to reduce the number of adoptable animals euthanized in San Antonio. We do that by providing and supporting programs that target at-risk shelter populations, such as neo-natal kittens and puppies, pets with treatable medical issues, and animals with behavior challenges. A no-kill community saves 90% of the animals that enter its shelter system, and SAPA! is proud to be part of San Antonio’s life-saving efforts.

SAPA! was founded by Dr. Ellen Jefferson, who was instrumental in establishing a similar program in Austin, TX, (Austin Pets Alive!) that resulted in that city attaining a no-kill status that’s been successfully maintained for the last 4 years. A nationally-recognized authority on community no-kill practices, Dr. Jefferson’s efforts in San Antonio established a model that’s resulted in remarkable success – more than 20,000 animals have been saved since 2012.

In October of 2015, SAPA! Welcomed a new chief executive officer, Drue Placette. Drue brings a wealth of experience in taking innovative organizations to the next level of growth by driving effective team collaborations, recruiting the right talent, improving operations and functionality, and creatively solving problems. An innovative organization needed another innovator at the helm.

Which pets do you save?
SAPA! focuses solely on pets that have arrived at the city shelter with no other options. We wait until other local shelters, rescues, and agencies pull animals for adoption in their own programs, and then we pull from those that remain. Our programs target animals that other organizations may not have the resources to treat or house, and our foster network supplements the limited kennel and cage space available at our facilities.

Our programs save the kinds of pets that take a little more work to make ready for adoption: puppies with parvovirus, neonatal kittens, cats with ringworm, and dogs with behavior issues. Our goal is to continue to create new programs for at-risk populations until every animal that can be saved is saved.

Has any other city achieved No Kill status?
Yes! A number of other cities in the US have achieved no-kill status. Ithaca, NY; Richmond, VA; Reno, NV; and Austin, TX have all become no-kill communities. When San Antonio reaches 90% live-release, we’ll be the largest no-kill city in the US!

Where will all the pets that are saved go?
The American Veterinary Medical Association (AVMA) publishes statistics based on the US Census that estimate the number of pets in communities vs the number of available homes. In San Antonio, the number of new homes available for pets hovers around 100,000 annually. If just 20% of those families chose to adopt a shelter pet instead of purchasing from a store or breeder, San Antonio would be a no-kill city. Together we can make this happen!

How can you help?
We need adopters, fosters, volunteers and donors so that we can continue our life-saving work!

What programs does SAPA! offer?
SAPA!’s core programs are:

Neonatal Kitten Ward: This program helps meet the needs of the thousands of kittens that enter shelters in San Antonio each year. Requiring a high level of care due to their age and medical issues, our neonatal nursery provides treatment and housing until these kittens are ready for foster or adoption.
Parvo Ward: Our Parvo Ward isolates and treats puppies exposed to this very common but dangerous virus (canine parvovirus). It takes about 7 days for a puppy to be clear of the infection, which requires careful observation and treatment. Once they test negative, however, they are immediately made available for foster or adoption. Our Parvo Ward saved over 500 puppies in 2014.
Ringworm Ward: Ringworm, a common fungal infection, can be a death sentence for shelter cats in many parts of the US. Ringworm is highly contagious and able to survive for extended periods in a household or shelter environment. SAPA’s Ringworm Ward provides treatment for hundreds of shelter cats and kittens annually, returning them to the adoption floor – and new homes – within 4 weeks.
Medical Clinic: Our medical clinic provides care and treatment for animals we’ve adopted, those in foster awaiting adoption, and the San Antonio community at large. Everything from rabies vaccinations to heartworm preventative, as well as treatment for injuries large and small, is provided by our veterinary and technical staff.
Foster and Adoption Programs: SAPA’s robust and extensive foster program provides safe and stable home environments for animals awaiting adoption. Placement into foster homes increases our overall capacity, providing more opportunities to save lives in San Antonio.
PASS (Positive Alternatives to Shelter Surrender): The PASS program is the only program of its kind in Bexar County, and was created to help the public find resources to keep their own pets, or found pets, out of shelters. Our marketing resources, low cost medical options, behavioral resources, food assistance, and advocacy often make the difference between a night in a kennel and a night in a home. The goal of PASS is to provide alternatives to surrender for 2,500 pets per year.
Is every animal spayed/neutered before adoption?
Yes! SAPA! provides a complete medical workup, including spay/neuter for every animal prior to adoption. This reduces the financial burden on the adopter, and ensures that placed animals do not contribute to pet overpopulation in our community.

What are SAPA!’s funding sources?
SAPA! is funded by revenue from programs, support from corporate and foundation donors, contributions from supporters, and municipal contracts with the City of San Antonio. We are currently focusing on donor development and sustainable business practices in order to reduce our reliance on large corporate and foundation support, crafting a sustainable business and partnership model that will help to save lives for years to come.

Are donations tax-exempt?
Yes, we are a registered 501(c)(3) charitable organization. All donations are tax deductible to the fullest extent of the law.';
            $post1->user_id = $user->id;
            $post1->post_type_id = '1';
            $post1->save();

        $post2 = new Post; 
            $post2->title = 'Saturday Adoption Event'; 
            $post2->body = 'Free cats, at my house!';
            $post2->user_id = $user->id;
            $post2->post_type_id = '2';
            $post2->save();

        $post4 = new Post; 
            $post4->title = 'Kitty-proofing Your Foster Home '; 
            $post4->body = 'Cat-proofing, and especially kitten-proofing, your home is much the same as child-proofing it! That means hiding or
removing cords, removing small items that kittens can choke on, etc. Use the following tips as a guide to make your
foster room and home safe for cats and kittens:
• Make sure the garbage, cleaning supplies and medicines are secure.
• Get into the habit of checking your refrigerator, oven, washer, dryer, freezer, dishwasher, etc. before these
doors get closed. Kitty may have leaped in. These horrible accidents happen more often than you would expect.
• Watch that hot iron, or any other heavy items a rambunctious kitty may knock down or pull down upon itself. Use
a non-toxic product available in office supply stores that is used to mount posters on the wall without nails – a
kind of gummy substance – to tack down small knick-knacks and prevent breakage.
• Review a toxic houseplant list and remove all poisonous plants from your household. Or, to deter kitties from
munching on poisonous and non-poisonous plants, you should spray with a product sold at pet stores for this very
purpose.
• Keep all small items like rubber bands, paper clips, needles, and fishhooks – anything kitty can swallow – out of
reach.
• Never leave knives or razors in the bathroom or tub. Kitties love to play with these things and can cut their paws,
tongue or gums.
• Keep plastic bags, which can cause suffocation, out of reach.
• Exposed electrical cords are a very real danger. Kitties might chew them and end up getting an electrical shock –
this can cause mouth burns or even death. Encase cords in the plastic flexible tubing on the market for just this
purpose. A product called “Bitter Apple,” available at pet stores, can be sprayed at regular intervals on the cords
to discourage chewing as well.
• Never leave stove burners on without a pot on them; serious burns can result if kitty gets curious. Also, pipes
behind hot water heaters can cause burns if kitty hides there. Wood burning stoves and open fireplaces are also
hazardous. ';
            $post4->user_id = $user->id;
            $post4->post_type_id = '1';
            $post4->save();

        $post5 = new Post; 
            $post5->title = 'Housing your foster cat'; 
            $post5->body = 'You must provide a clean, safe environment for your foster cats/kittens. CAT recommends that you use a spare bedroom
or large bathroom as your “foster room.”
If you are fostering a pregnant cat or young kittens, keep the following tips in mind:
• Consider protecting your furniture and carpet with sheets or plastic table covers—kittens can be messy,
especially when they’re learning to use the litter box!
• Until the age of 3-4 weeks, the mother cat will clean the genitals of her young to stimulate the bowels and
bladder. As the kittens start showing interest in the litter box, provide them with an easily accessible box – such
as a shoebox lid, cookie sheet, or cake pan. Once the kittens are more mobile, you should give them a larger litter
box. ';
            $post5->user_id = $user->id;
            $post5->post_type_id = '1';
            $post5->save();

        $post6 = new Post; 
            $post6->title = 'Feeding your foster cats'; 
            $post6->body = '1. Kittens with Mom:
• The recommended diet for pregnant or nursing cats and their kittens is a premium diet of canned and dry kitten
food (Authority Brand, Science Diet, Iams, Nutro, Etc.). Kittens generally start showing interest in “real” food
around 4 or 5 weeks of age.
2. Kittens without Mom:
• Newborn to four weeks: Unfortunately, unweaned kittens are sometimes brought to CAT without their mother.
Often these kittens can be placed with an already nursing cat and become integrated into her own litter
(“surrogates”). If not, as a foster parent you will have the double responsibility of bottle-feeding and
socialization.
Materials needed:
• Cotton balls or cut up wash cloths
• Heating pad
• Kitten bottle, eyedropper, kitten formula
• Thermometer
Use a pet nurser, or kitten bottle to feed the kittens. The hole in the bottle nipple should leak milk slowly from the
bottle without pressure. An eyedropper can be used temporarily if a nurser is unavailable.
Never feed a chilled kitten: make sure he is warm prior to feeding. Make sure formula is just warm, not hot or cold.
Follow the directions on the label for preparing KMR. Sex and age of the kittens will dictate how much to give at each
feeding time.
3. Orphans and kittens with Moms:
• At four weeks you can start introducing canned food (they usually start showing interest in what Mom is eating).
Mixing a little warm water with the canned food and placing it in a container with low sides (plate, cake pan, etc.)
will usually do the trick. Expect them to walk through it too. No one ever said kittens were neat. After a few
attempts, they will get the idea. Feed them their last meal just before bedtime. They usually eat and then go
straight to sleep.
• 5-6 weeks old: six small (approx. a level tablespoon) meals per day per kitten. Always leave plenty of dry food
out for them to eat during the day. 
• 6-8 weeks of age: four meals a day (about one eighth of a can) per kitten, and free choice dry food.
All cats and kittens need fresh water at all times.
Overfeeding can cause digestive problems. Frequent small meals are preferred to large meals. ';
            $post6->user_id = $user->id;
            $post6->post_type_id = '1';
            $post6->save();

        $post7 = new Post; 
            $post7->title = 'Taking care of the litter box'; 
            $post7->body = 'Kittens should be introduced to the litter box when they start eating solid foods. They need a box with shallow sides: a
cookie sheet or cake pan is perfect. After they have eaten, place them in the box. They will learn how to use the litter
box very quickly. Sometimes they learn how to use the litter box without any help from us, as they have been watching
Mom use her box. (Observe how the kittens watch all of Mom’s actions: they find her quite fascinating and are learning
how to act like cats). Orphans may need a little more assistance from you; simply pick them up and place them on the
litter after each meal.
When you bring home your foster kitten(s), show them where you have placed their litter box.
Keeping the box clean is very important…daily cleaning is a must. No cat or kitten wants to use or smell a dirty litter box. ';
            $post7->user_id = $user->id;
            $post7->post_type_id = '1';
            $post7->save();

        $post8 = new Post; 
            $post8->title = 'Socializing Your Foster Cats and Kittens'; 
            $post8->body = 'First and foremost, we ask that you treat your foster cats/kittens with the same love and care that you give to your own
companion animals. Daily attention (at least one full hour a day) from you and other family members or friends makes
them more people-oriented, and more adoptable! This includes petting, playing, cuddling, trimming nails and grooming.
By spending time with your foster cats on a regular basis, you will not only increase their chances of being adopted
quickly, but you will also be able to determine their likes and dislikes – this helps us place them in homes with families
that best meet their needs.

You should also monitor your foster cats for behavior problems, such as inappropriate urination or scratching furniture.
If problems arise, contact your Mentor to discuss behavior modification strategies. CAT is not responsible for damages
that might occur to yourself, others in your household, or your personal property as a result of feline behavior problems
while in foster care.
If you have “cat-friendly” dogs in your household, please consult with your Mentor about proper introductions with your
foster cats/kittens. Felines who have been raised with dogs, and adult cats that enjoy (or at least tolerate) the company
of canines, often have an advantage on adoption days!
Semi-feral kittens are a special challenge. These kittens can be socialized, but only with daily handling. Sometimes they
will hiss and spit when you attempt to pick them up. Gently pick them up and hold them close to your body, giving them a
sense of security. Speak softly as you pet them. These kittens need plenty of reassurance and attention. DO NOT give
them a room in which they can hide from you. They need a box or crate in which to feel secure but you must have access
to them at all times. They will not become socialized unless they are handled many times each day. They need to become
accustomed to the sights and sound of people and a working home. This should be done gradually but consistently.
• Children should not handle kittens under three weeks of age.
• Do not allow unsupervised handling by children of any kittens.';
            $post8->user_id = $user->id;
            $post8->post_type_id = '1';
            $post8->save();

        $post9 = new Post; 
            $post9->title = 'Medical Issues'; 
            $post9->body = 'MEDICAL PROBLEMS:
If your foster kitten displays any of these symptoms, call SAPA immediately:
• Sneezing and congestion with green or yellow discharge from the nose and/or eyes.
• Coughing, wheezing or heavy breathing.
• Diarrhea or vomiting – this can be life threatening to kittens!
• Straining to urinate or defecate – this can be life threatening, especially for male cats!
• Bleeding from any part of the body.
• Lethargy.
• Fever.
• Paralysis.
• Extreme change in attitude or behavior.
• Not eating or drinking regularly. ';
            $post9->user_id = $user->id;
            $post9->post_type_id = '1';
            $post9->save();

        $post10 = new Post; 
            $post10->title = 'Sunday Yoga in Southtown'; 
            $post10->body = ' 01/31/2016 11 am Come out and join us and Southtown Yoga Loft for yoga on the Petco Pavilion!
Donations Only: Benefiting San Antonio Pets Alive
All Levels - Flow
Ages 10 & Up
Bring Your own Mat
No Advance Sign-Up Needed';
            $post10->user_id = $user->id;
            $post10->post_type_id = '3';
            $post10->save();

        $post11 = new Post; 
            $post11->title = 'Saturday Adoption Event'; 
            $post11->body = ' 02/09/2016 Join us from 12pm - 6pm at Alamo Beer! We will have animals available for adoption!';
            $post11->user_id = $user->id;
            $post11->post_type_id = '3';
            $post11->save();

        $post12 = new Post; 
            $post12->title = 'Petco Adoption Event'; 
            $post12->body = ' 02/15/2016 There will be an adoption event at the Petco off SE Military and 281 from 3-6pm';
            $post12->user_id = $user->id;
            $post12->post_type_id = '3';
            $post12->save();

        $post13 = new Post; 
            $post13->title = 'Foster Event Signup'; 
            $post13->body = 'Foster Event Sign-Up
REQUIREMENTS FOR FOSTERS BRINGING ANIMALS TO AN EVENT:
*Your foster animal MUST be at least 8 weeks of age
*Your foster MUST BE spayed/neutered.
*Your foster MUST be up to date on ALL shots
*If your pup has had under 4 sets of DHLPP and or younger then 4 months of age their paws CAN NOT touch the floor for any reason.
*You MUST bring a copy of the Kennel Card, Shot record and Rabies certificate (if old enough).
*Your foster MUST NOT have any contagious illness like Ringworm, Kennel cough, URI etc

And last but not least. YOU MUST SIGN UP ON VOLUNTEER SPOT IN ORDER TO ATTEND AN EVENT. I have to be able to see how many people are going so that I can make sure we have enough counselors. We have been lax about sign in. But we will start asking you to sign in and be looking at all paperwork to make sure you have copies and all shots are up to date. We have had too many problems and with the rules of Petsmart (where most of our events are held) and if they keep running in to these problem we will loose our spots with them. We can not afford to loose such great locations.';
            $post13->user_id = $user->id;
            $post13->post_type_id = '1';
            $post13->save();

        $post14 = new Post; 
            $post14->title = 'What is wrong with my cat?'; 
            $post14->body = 'She has been sneezing for the past three days and refuses to come out from underneath the bed. I\'m very worried about her, though she has been sneaking out at night to eat. When should I take her to the vet? ';
            $post14->user_id = $user->id;
            $post14->post_type_id = '2';
            $post14->save();

        $post15 = new Post; 
            $post15->title = 'Can I groom my foster dog?'; 
            $post15->body = 'Does anyone know if there are any rules or regulations about having our fosters groomed? Teddy looks so cute with a puppy cut but it\'s expensive to have done professionally and I\'d rather do it myself.';
            $post15->user_id = $user->id;
            $post15->post_type_id = '2';
            $post15->save();

        $post16 = new Post; 
            $post16->title = 'Dogs eating shoes?'; 
            $post16->body = 'Anyone have any tips on getting their dog to stop eating shoes?! Analisa is driving me mad, I feel like every day I come home she has managed to find a shoe and leave it torn up in my bed, help!';
            $post16->user_id = $user->id;
            $post16->post_type_id = '2';
            $post16->save();

        $post17 = new Post; 
            $post17->title = 'Free doggy boots!!'; 
            $post17->body = 'For a Large dog, non skid, velcro wraps. I cannot seem to get Riley to keep her boots on for going outside. She needs to wear them due to an allergy issue with grass but I have had to switch brand. They are nearly brand new, please e-mail if interested' ;
            $post17->user_id = $user->id;
            $post17->post_type_id = '2';
            $post17->save();

        $post18 = new Post; 
            $post18->title = 'Humane cat trap?'; 
            $post18->body = 'I\'m trying to catch a neighborhood stray with no luck, does anyone have a humane trap I can use this weekend? Please e-mail ASAP';
            $post18->user_id = $user->id;
            $post18->post_type_id = '2';
            $post18->save();

    }
}