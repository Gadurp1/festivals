<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBandsTable extends Migration {

	public function up()
	{
		Schema::create('bands', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('description');
			$table->string('stage');
			$table->integer('festival_id')->unsigned();
			$table->integer('event_day_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('bands');
	}
}
