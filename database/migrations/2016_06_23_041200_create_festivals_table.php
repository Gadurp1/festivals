<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFestivalsTable extends Migration {

	public function up()
	{
		Schema::create('festivals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('Name');
			$table->datetime('start');
			$table->datetime('end');
			$table->string('location');
			$table->string('address');
			$table->string('city')->default('chicago');
			$table->string('website');
			$table->string('description');
			$table->string('state', 2);
		});
	}

	public function down()
	{
		Schema::drop('festivals');
	}
}