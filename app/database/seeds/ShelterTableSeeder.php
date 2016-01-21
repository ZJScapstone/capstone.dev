<?php

class ShelterTableSeeder extends Seeder {

    public function run()
    {
    	$shelter = new Shelter();

        $shelter->location    = 'san antonio';
        $shelter->url         = 'http://google.com';
        $shelter->phone       = '2108675309';
        $shelter->name        = 'test shelter';
        $shelter->description = 'an awesome shelter you should totally adopt a pet from';
        $shelter->img_path    = 'http://placehold.it/300';
		
        $shelter->save();
    }
}

