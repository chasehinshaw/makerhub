<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Which Tables to Seed?
	 * @var [type]
	 */
	protected $tables = [
		'users',
		'ideas'
	];

	/**
	 * Which seeder classes?
	 * @var [type]
	 */
	protected $seeders = [
		'UsersTableSeeder',
		'IdeasTableSeeder'
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->cleanDatabase();

		foreach ($this->seeders as $seedClass) {
			$this->call($seedClass);
		}

		$this->command->info('Tables have been Seeded! Booo Yeahhh Motherfucka');
	}

	/**
	 * Clear out the DB (for new seed generation)
	 */
	private function cleanDatabase()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0');

		foreach ($this->tables as $table) {
			DB::table($table)->truncate();
		}
		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}

}
