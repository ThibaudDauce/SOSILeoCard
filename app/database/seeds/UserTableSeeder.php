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
      'serial' => '045c8b123e2780',
      'prenom' => 'Thibaud',
      'nom'    => 'Dauce',
    ]);

    User::create([
      'serial' => '041c670a3e2780',
      'prenom' => 'Florian',
      'nom'    => 'Lepetit',
    ]);

    User::create([
      'serial' => '04301d729a3180',
      'prenom' => 'Julien',
      'nom'    => 'Baron',
    ]);

    User::create([
      'serial' => '0446772a3e2780',
      'prenom' => 'Pierre-Alain',
      'nom'    => 'Emo',
    ]);

    User::create([
      'serial' => '047c88123e2780',
      'prenom' => 'Clément',
      'nom'    => 'Gommé',
    ]);
  }

}
