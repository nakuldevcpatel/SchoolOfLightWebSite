<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
	DB::table('categories')->truncate();
		foreach(range(1, 10) as $index)
		{
			Category::create([
				'name' => $faker->word(1)
			]);
		}
	}

}