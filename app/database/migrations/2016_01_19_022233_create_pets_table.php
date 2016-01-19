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
			$table->enum('species', array('cat', 'dog', 'other'));
			$table->string('color', 100);
			$table->enum('age', array('baby', 'young', 'adult', 'senior'));
			$table->text('description');
			$table->date('dethklok')->nullable();
			$table->char('gender', 7);
            $table->integer('breed_id')->unsigned();
            $table->foreign('breed_id')->references('id')->on('breeds');
			$table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pets', function($table) {
            $table->dropForeign('pets_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('pets', function($table) {
            $table->dropForeign('pets_breed_id_foreign');
            $table->dropColumn('breed_id');
        });
		Schema::drop('pets');
	}

}
