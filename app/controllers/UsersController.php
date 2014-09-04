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

    // Si les données envoyées sont vides, on retourne une erreur 400.
    if (empty($batch))
    {
      return Response::json([
        'valid' => false,
        'error' => [
          'code' => 1,
          'message' => 'Les données envoyées sont vides.'
        ]
      ], 400);
    }

    // On récupère toutes les entrées correspondant aux numéros de carte NFC.
    $data = $this->userRepository->getBySerialBatch($batch);

    // Si le retour n'est pas complet, on retourne le résultat avec un code HTTP 206 Partial Content.
    if (count($result['data']) != count($batch))
    {
      return Response::json([
        'data'  => $data,
        'valid' => false,
        'error' => [
          'code' => 2,
          'message' => 'Toutes les données n\'ont pas pu être récupérées.'
        ]
      ], 206);
    }

    // On retourne le résultat formaté en json.
    return Response::json([
      'data'  => $data
      'valid' => true,
    ]);
  }
}
