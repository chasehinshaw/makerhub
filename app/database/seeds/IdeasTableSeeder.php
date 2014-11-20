<?php

use Faker\Factory as Faker;
use MakerHub\Ideas\Idea;
use MakerHub\Users\User;

class IdeasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$userIds = User::lists('id');

		foreach(range(1, 1000) as $index)
		{
			Idea::create([
				'user_id' => $faker->randomElement($userIds),
				'title' => $faker->sentence($nbWords = 4),
				'content' => $faker->sentence(),
				'img_url' => $faker->imageUrl($width = 640, $height = 480),
				'created_at' => $faker->dateTime()
			]);
		}
	}

}