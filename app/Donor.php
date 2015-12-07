<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model {

	public function donation()
	{
		return $this->hasMany('App\Donation');
	}

}
