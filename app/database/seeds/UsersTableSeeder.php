<?php

use Faker\Factory as Faker;
use MakerHub\Users\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			User::create([
				'username' => $faker->word() . $index,
				'email' => $faker->email(),
				'password' => 'secret',
				'firstname' => $faker->firstname(),
				'lastname' => $faker->lastname(),
				'location' => $faker->country(),
				'bio' => $faker->text()
			]);
		}
	}

}