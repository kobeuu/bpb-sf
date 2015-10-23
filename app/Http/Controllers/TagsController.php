<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
	/**
	 * Show article(s) of the tag.
	 * 
	 * @param  Tag    $tag
	 * @return response
	 */
	public function show(Tag $tag)
	{
		$articles = $tag->articles()->published()->get();

		return view('articles.index', compact('articles'));
	}

}
