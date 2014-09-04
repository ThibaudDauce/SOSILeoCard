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

  public function batch()
  {
    $batch = Input::get('data');

    // On suppose que le retour est correct.
    $return = [
      'valid' => true
    ];

    $return['data'] = $this->userRepository->getBySerialBatch($batch);

    if (count($users) != count($batch))
    {
      // Le retour n'est pas complet, on définit une erreur et un résultat invalide.
      $return['errors'] = [
        'code' => 1,
        'message' => 'Toutes les données n\'ont pas pu être récupérées.'
      ];

      $return['valid'] = false;
    }

    return Response::json($result);
  }
}
