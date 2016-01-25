<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('posts')->delete();
		DB::table('post_type')->delete();
		DB::table('breeds')->delete();
		DB::table('pets')->delete();
		DB::table('users')->delete();
		
		$this->call('UserTableSeeder');
		$this->call('SpeciesTableSeeder');
		$this->call('BreedsTableSeeder');
		$this->call('PetTableSeeder');
		$this->call('PostTypeTableSeeder');
		$this->call('PostTableSeeder');
		// images
	}



}
