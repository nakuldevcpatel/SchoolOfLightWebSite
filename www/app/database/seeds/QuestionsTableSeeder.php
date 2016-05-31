<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class QuestionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		DB::table('questions')->truncate();
		foreach(range(1, 10) as $index)
		{
			Question::create([
				'question' 	=> $faker->sentence(12),
				'user_id' 	=> 1,
				'pinned'		=> $faker->numberBetween(0,1),
				'count'			=> $faker->numberBetween(1,6),
				'description' => $faker->sentence(20)
			]);
		}
	}

}