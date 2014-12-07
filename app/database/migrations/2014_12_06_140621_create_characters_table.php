<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('characters', function($table) {
		$table->increments('id');
		
		$table->timestamps();
		$table->string('first_name');
		$table->string('last_name');
		$table->integer('race_id')->unsigned();
		$table->integer('region_id')->unsigned();
		$table->integer('discipline_id')->unsigned();
		$table->integer('title_id')->unsigned();
		$table->integer('graduated');
		$table->integer('creator_id')->unsigned();
		
# Define foreign keys...
$table->foreign('race_id')->references('id')->on('races');
$table->foreign('region_id')->references('id')->on('regions');
$table->foreign('discipline_id')->references('id')->on('disciplines');
$table->foreign('title_id')->references('id')->on('titles');
$table->foreign('creator_id')->references('id')->on('users');
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
		Schema::drop('characters');
	}

}
