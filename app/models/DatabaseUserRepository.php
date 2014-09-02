<?php

class DatabaseUserRepository {

  public function getBySerial($serial)
  {
    return User::where('serial', $serial)->firstOrFail();
  }
}
