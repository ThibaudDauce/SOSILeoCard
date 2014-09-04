# Utilisation du framework

Comme énoncé dans la première partie, nous avons fait le choix d'utiliser un framework nommé Laravel. Ce framework est assez récent et a pour objectif de faciliter le développement. Son slogan est "PHP That Doesn't Hurt. Code Happy & Enjoy The Fresh Air."

## Routes

Dans la partie précédente, nous avons les différentes routes nécessaire à la mise en place d'un CRUD. Laravel implémente ça facilement via une facade nommé tout simplement `Route`.

Notre application contient une seule route, définie de la manière suivante dans le fichier app/route.php :
```php
Route::get('users/batch', 'UsersController@batch');
```

Tout d'abord, nous appelons la méthode `get` parce que dans une optique CRUD, nous cherchons à obtenir des informations. Cette méthode prends en premier paramètre l'URI associé à la route et en deuxième paramètre une chaine de caractère  formatée comme `ControllerObject@method`. Dans notre cas, lorsque l'utilisateur fait une requête GET sur l'URI `users/batch`, Laravel va appeler la méthode `batch` sur l'objet `UsersController`.

### Qu'est-ce qu'une facade

Une facade est un classe spécifique qui permet d'appeler des méthodes publiques d'une instance d'un objet via des appels statiques sur la facade.

Par exemple, lorsque j'appelle une méthode statique sur la facade `Route`, Laravel va en réalité appeler une méthode publique d'une instance d'une classe appelée Illuminate\Routing\Router stockée dans l'application.

Vous pouvez en savoir plus sur les Facades Laravel sur la documentation http://laravel.com/docs/facades

## Le modèle

Laravel utilise son propre ORM appelé Eloquent. Ce dernier nécessite la création d'une classe par ressource de l'application. Notre application a donc un modèle nommé `User` situé dans le répertoire `app/models`. Ce dernier hérite du modèle Eloquent qui fournit toutes les méthodes d'accès à la base de données telles que `where`, `find`, `save`...

Dans notre modèle, nous devons définir plusieurs attributs :
   * `$table` : cet attribut permet de définir la table associée au modèle. Même si Eloquent est assez intélligent pour définir le pluriel du nom de l'objet (User => users), pour des raisons de lisibilité, nous l'avons redéfini.
   * `$fillable` : afin de répondre au problème de `MassAssigment`, Eloquent demande de fournir un tableau contenant les attributs du modèle qu'il sera possible de sauvegarder directement via la méthode `create` afin d'éviter qu'un utilisateur mal intentioné insère dans la base de données des champs non voulu. (plus d'informations sur http://laravel.com/docs/eloquent#mass-assignment)

## Les controlleurs

Toujours dans une optique CRUD, Laravel nous encourage à créer un controlleur pour chaque ressource. Notre application ne contient qu'une seule ressource pour le moment appelée `User`, notre controlleur (par convention) aura donc le nom de `UsersController` et sera situé dans le répertoire `app/controllers`.

Cet objet aura une seule méthode, la méthode `batch` définie dans les routes comme la méthode a appeler.

## La méthode batch

Dans notre unique méthode, nous pouvons définir cinq phases.
  * Récupération des données fournies en GET ;
  * Test des données et renvoi d'une erreur en cas d'absence d'identifiants ;
  * Récupération des données en BDD via un répertoire (repository) ;
  * Validation de ces données et information en cas de données manquantes ;
  * Retour de l'ensemble du résultat si tout c'est bien passé.

## Utilisation d'un répertoire
