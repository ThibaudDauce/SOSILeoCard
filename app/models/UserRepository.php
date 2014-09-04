<?php

interface UserRepository {

  public function getBySerial($serial);
  public function getBySerialBatch(array $batch);
}
