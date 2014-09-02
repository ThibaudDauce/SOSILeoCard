<?php

class DatabaseUserRepository implements UserRepository {

  public function getBySerial($serial)
  {
    return User::where('serial', $serial)->firstOrFail();
  }
}
