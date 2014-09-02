<?php

class UsersController extends BaseController {

  public function show($id)
  {
    return User::findOrFail($id);
  }
}
