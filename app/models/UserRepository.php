<?php

interface UserRepository {

  /*
   * Récupérer les utilisateurs correspondant aux numéros de carte NFC du tableau.
   *
   * @params array $batch Numéros de carte NFC des utilisateurs recherchés.
   * @return Illuminate\Database\Eloquent\Collection of User les utilisateurs recherchés.
   */
  public function getBySerialBatch(array $batch);
}
