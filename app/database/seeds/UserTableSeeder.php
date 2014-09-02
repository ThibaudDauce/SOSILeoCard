<?php

class UserTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
        'prenom' => 'thibaud',
        'nom' => 'dauce',
    ]);
  }

}
