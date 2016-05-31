<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContentsTableSeeder extends Seeder {

	public function run()
	{
		Content::create([
      'name' => 'SOL ACE',
      'slug' => 'sol-ace',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam repudiandae commodi magnam dolorum, natus! Aliquid eligendi dolorem ab.'
		]);

    Content::create([
      'name' => 'CODE HR',
      'slug' => 'code-hr',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam repudiandae commodi magnam dolorum, natus! Aliquid eligendi dolorem ab.'
    ]);

    Content::create([
      'name' => 'SoL AR',
      'slug' => 'sol-ar',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam repudiandae commodi magnam dolorum, natus! Aliquid eligendi dolorem ab.'
    ]);

    Content::create([
      'name' => 'SoL MATE',
      'slug' => 'sol-mate',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam repudiandae commodi magnam dolorum, natus! Aliquid eligendi dolorem ab.'
    ]);

    Content::create([
      'name' => 'SoL Search',
      'slug' => 'sol-search',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam repudiandae commodi magnam dolorum, natus! Aliquid eligendi dolorem ab.'
    ]);

    Content::create([
      'name' => 'SoL VE',
      'slug' => 'sol-ve',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam repudiandae commodi magnam dolorum, natus! Aliquid eligendi dolorem ab.'
    ]);
	}

}