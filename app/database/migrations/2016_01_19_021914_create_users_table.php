<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('email', 150)->unique();
			$table->string('password', 255);
			$table->string('phone_number', 25)->nullable();
			$table->text('description')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
