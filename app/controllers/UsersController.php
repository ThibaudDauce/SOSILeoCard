<?php

class UsersController extends Controller {

  private $userRepository;

  /*
   * On injecte dans le controller une instance implémentant le contrat UserRepository afin d'executer nos requêtes.
   *
   * @params UserRepository
   */
  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  /*
   * Récupérer une série d'entrées de la base de données via leurs numéros de carte NFC.
  */
  public function batch()
  {
    // On récupère les données envoyées via POST.
    $batch = Input::get('data');

    // On suppose que le retour est correct.
    $result = [
      'valid' => true
    ];

    // On récupère toutes les entrées correspondant aux numéros de carte NFC.
    $result['data'] = $this->userRepository->getBySerialBatch($batch);

    // Si le retour n'est pas complet, on définit une erreur et un résultat invalide.
    if (count($result['data']) != count($batch))
    {
      $result['errors'] = [
        'code' => 1,
        'message' => 'Toutes les données n\'ont pas pu être récupérées.'
      ];

      $result['valid'] = false;
    }

    // On retourne le résultat formaté en json.
    return Response::json($result);
  }
}
