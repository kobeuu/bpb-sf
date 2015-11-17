<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('sex');
			$table->string('email');
			$table->string('hp');
			$table->string('occupation');
			$table->string('city');
			$table->string('address');
			$table->string('postcode');
			$table->string('npwp');
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
		Schema::drop('donors');
	}

}
