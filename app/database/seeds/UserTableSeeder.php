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
      'serial' => '04:5c:8b:12:3e:27:80',
      'prenom' => 'Thibaud',
      'nom'    => 'Dauce',
    ]);

    User::create([
      'serial' => '04:1c:67:0a:3e:27:80',
      'prenom' => 'Florian',
      'nom'    => 'Lepetit',
    ]);

    User::create([
      'serial' => '04:30:1d:72:9a:31:80',
      'prenom' => 'Julien',
      'nom'    => 'Baron',
    ]);

    User::create([
      'serial' => '04:46:77:2a:3e:27:80',
      'prenom' => 'Pierre-Alain',
      'nom'    => 'Emo',
    ]);

    User::create([
      'serial' => '3a6c3c71',
      'prenom' => 'Pierre-Alain (CB)',
      'nom'    => 'Emo',
    ]);

    User::create([
      'serial' => '77b05fd2',
      'prenom' => 'Pierre-Alain (Astuce)',
      'nom'    => 'Emo',
    ]);
  }

}
