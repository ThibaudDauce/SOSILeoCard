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
    $result = [
      'valid' => true
    ];

    $result['data'] = $this->userRepository->getBySerialBatch($batch);

    if (count($result['data']) != count($batch))
    {
      // Le retour n'est pas complet, on définit une erreur et un résultat invalide.
      $result['errors'] = [
        'code' => 1,
        'message' => 'Toutes les données n\'ont pas pu être récupérées.'
      ];

      $result['valid'] = false;
    }

    return Response::json($result);
  }
}
