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
    'documentation' => 'https://github.com/ThibaudDauce/SOSILeoCard'
  ]);
});

Route::get('users/batch', 'UsersController@batch');
