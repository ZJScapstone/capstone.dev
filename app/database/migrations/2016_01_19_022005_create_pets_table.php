<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100)->nullable();
			$table->enum('species', array('cat', 'dog', 'other'));
			$table->enum('status', array('lost', 'found', 'adoptable'));
			$table->string('color', 100)->nullable();
			$table->enum('age', array('baby', 'young', 'adult', 'senior'));
			$table->text('description');
			$table->date('death_clock')->nullable();
			$table->enum('gender', array('male', 'female', 'unknown'));
            $table->integer('breed_id')->unsigned();
            $table->foreign('breed_id')->references('id')->on('breeds');
			$table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('shelter_id')->unsigned();
            $table->foreign('shelter_id')->references('id')->on('shelters');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pets');
	}

}
