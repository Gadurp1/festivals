<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventDaysTable extends Migration {

	public function up()
	{
		Schema::create('event_days', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->datetime('date');
			$table->integer('festival_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('event_days');
	}
}