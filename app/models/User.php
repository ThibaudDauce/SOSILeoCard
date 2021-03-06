<?php

class User extends Eloquent {

	/**
	 * Le nom de la table utilisée pour ce model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Les attributs qu'il est possible de passer en paramètre de la méthode `create`.
	 *
	 * @var array
	 */
	protected $fillable = ['serial', 'prenom', 'nom'];

	/**
	 * Ne pas générer automatiquement les champs updated_at et created_at.
	 *
	 * @var bool
	 */
	public $timestamps = false;

}
