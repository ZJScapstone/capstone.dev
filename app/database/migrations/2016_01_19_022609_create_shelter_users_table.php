<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelterUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shelter_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('shelter_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('shelter_id')->references('id')->on('shelters');
            $table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shelter_users');
	}

}
