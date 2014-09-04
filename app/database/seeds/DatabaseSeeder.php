<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// On vide la table des utilisateurs
		User::truncate();

		// On remplit la base de données des utilisateurs.
		$this->call('UserTableSeeder');
	}

}
