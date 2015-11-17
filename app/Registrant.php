<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model {

	/**
	 * fillable fields for an Registrant.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'sex',
		'contact',
		'school',
		'email',
		'address',
		'attachment',
	];

}
