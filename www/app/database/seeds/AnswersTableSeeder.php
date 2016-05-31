<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AnswersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		DB::table('answers')->truncate();
		foreach(range(1, 10) as $index)
		{
			Answer::create([
				'question_id' => $faker->numberBetween(1,10),
				'answer'			=> $faker->sentence(20),
				'user_id'			=> 1
			]);
		}
	}

}