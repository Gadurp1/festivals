<?php

use Illuminate\Database\Seeder;
use App\EventDays;

class EventDaysTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('event_days')->delete();

		// EventDaySeeder
		EventDays::create(array(
				'date' => 2016-07-10,
				'festival_id' => 1
			));
	}
}