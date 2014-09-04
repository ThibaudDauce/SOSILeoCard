<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
  return Response::json([
    'title'   => 'Projet SOSI : badgeur de cantine webservice',
    'message' => 'Vous êtes bien arrivé !',
    'documentation' => 'https://github.com/ThibaudDauce/SOSILeoCard',
    'examples' => [
      'http://sosi.thibaud-dauce.fr/users/batch',
      'http://sosi.thibaud-dauce.fr/users/batch?data[1]=04:1c:67:0a:3e:27:80&data[2]=04:5c:8b:12:3e:27:80',
      'http://sosi.thibaud-dauce.fr/users/batch?data[1]=04:1c:67:0a:3e:27:80&data[2]=04:5c:8b:12:3e:27:80&data[3]=zefz'
    ]
  ]);
});

Route::get('users/batch', 'UsersController@batch');
