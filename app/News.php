<?php namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	protected $table = 'news';

	protected $fillable = [
		'title', 'body', 'image', 'published_at',
	];

	protected $dates = ['published_at'];

	/**
	 * Scope queries to articles thas have been published.
	 *
	 * @param  $query
	 */
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	/**
	 * Scope queries to articles that have been published.
	 *
	 * @param  $query
	 */
	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}

	/**
	 * Set the published_at arttribute.
	 *
	 * @param $date
	 */
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::parse($date);

	}

	/**
	 * Get the published_at attribute.
	 * @param  $date
	 * @return string
	 */
	public function getPublishedAtAttribute($date)
	{
		return Carbon::parse($date)->format('Y-m-d');
	}

}
