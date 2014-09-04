<?php

class DatabaseUserRepository implements UserRepository {

  public function getBySerial($serial)
  {
    return User::where('serial', $serial)->firstOrFail();
  }

  public function getBySerialBatch(array $batch)
  {
    return User::whereIn('serial', $batch)->get();
  }
}
