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
			$table->string('a_num')->nullable();
			$table->string('name', 100)->nullable();
			$table->enum('status', array('available', 'inprogress', 'adopted'));
			$table->string('color', 100)->nullable();
			$table->enum('age', array('baby', 'young', 'adult', 'senior'));
			$table->text('description');
			$table->enum('gender', array('male', 'female', 'unknown'));
            $table->integer('breed_id')->unsigned();
            $table->foreign('breed_id')->references('id')->on('breeds');
			$table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('species_id')->unsigned();
            $table->foreign('species_id')->references('id')->on('species');
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
