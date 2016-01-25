<?php

class SpeciesTableSeeder extends Seeder {

    public function run()
    {
        
        $species1 = new Species; 
            $species1->species = 'dog'; 
            $species1->save();

        $species2 = new Species; 
            $species2->species = 'cat'; 
            $species2->save();
    }
}