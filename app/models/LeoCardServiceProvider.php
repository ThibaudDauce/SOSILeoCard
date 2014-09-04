<?php

use Illuminate\Support\ServiceProvider;

class LeoCardServiceProvider extends ServiceProvider  {

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind('UserRepository', 'DatabaseUserRepository');
  }
}
