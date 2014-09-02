<?php

class UsersController extends BaseController {

  private $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function show($serial)
  {
    return $this->userRepository->getBySerial($serial);
  }
}
