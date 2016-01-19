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
            $table->foreign('shelter_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('shelters');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shelter_users', function($table) {
            $table->dropForeign('shelter_users_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('shelter_users', function($table) {
            $table->dropForeign('shelter_users_shelter_id_foreign');
            $table->dropColumn('breed_id');
        });
		Schema::drop('shelter_users');
	}

}
