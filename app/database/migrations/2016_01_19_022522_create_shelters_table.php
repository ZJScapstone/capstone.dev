<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheltersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shelters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('location', 255);
			$table->string('url', 150)->nullable();
			$table->string('phone', 25);
			$table->string('name', 255);
			$table->text('description');
			$table->string('img_path', 255);
			$table->integer('user_id')->unsigned();
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
		Schema::table('shelters', function($table) {
            $table->dropForeign('shelters_user_id_foreign');
            $table->dropColumn('user_id');
        });
		Schema::drop('shelters');
	}

}
