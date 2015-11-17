<?php namespace App\Http\Controllers;

use App\Article;
use App\Message;
use App\Registrant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Create a new articles controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		$articles = Article::all();
		$registrants = Registrant::all();
		return view('admin.dashboard', compact('articles', 'registrants'));
	}

	public function Articles()
	{
		$articles = Article::latest('published_at')->get();

		return view('admin.articles', compact('articles'));
	}

	public function Messages()
	{
		$articles = Message::latest()->get();

		return view('articles.lists', compact('articles'));
	}

}
