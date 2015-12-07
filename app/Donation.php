<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model {

	public function donor()
	{

		protected $fillable = [
			'title',
			'body',
			'published_at',
			'excerpt',
			'image',
			'reviewed'
		];

		return $this->belongsTo('App\Donor');
	}

}
