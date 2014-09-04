<?php

use Illuminate\Support\ServiceProvider;

class LeoCardServiceProvider extends ServiceProvider  {

  public function register()
  {
    $this->app->bind('UserRepository', 'DatabaseUserRepository');
  }
}
