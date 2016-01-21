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

		DB::table('shelters')->delete();
		DB::table('breeds')->delete();
		DB::table('pets')->delete();
		DB::table('users')->delete();
		
		$this->call('UserTableSeeder');
		$this->call('BreedTableSeeder');
		$this->call('ShelterTableSeeder');
		$this->call('PetTableSeeder');
		// images
	}



}
