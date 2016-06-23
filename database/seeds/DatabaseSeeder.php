<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('FestivalsTableSeeder');
		$this->command->info('Festivals table seeded!');

		$this->call('EventDaysTableSeeder');
		$this->command->info('EventDays table seeded!');
	}
}
