<?php

use Illuminate\Database\Seeder;
use App\Festivals;

class FestivalsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('festivals')->delete();

		// FestivalSeeder
		Festivals::create(array(
				'Name' => Some awesome fest,
				'start' => 216-07-10,
				'end' => 216-09-10,
				'location' => Some park,
				'address' => 213 street ,
				'city' => chicago,
				'website' => google.com,
				'description' => sadkjf l l kj alksdjflaskdj lkasdjf laskdjf,
				'state' => il
			));
	}
}