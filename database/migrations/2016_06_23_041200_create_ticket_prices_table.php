<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketPricesTable extends Migration {

	public function up()
	{
		Schema::create('ticket_prices', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('festival_id')->unsigned();
			$table->integer('event_day_id')->unsigned();
			$table->integer('price');
			$table->string('description');
			$table->string('type');
		});
	}

	public function down()
	{
		Schema::drop('ticket_prices');
	}
}