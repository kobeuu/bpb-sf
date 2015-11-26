<?php namespace App\Http\Controllers;

use App\Article;
use App\Message;
use App\Image;
use App\Registrant;
use App\User;
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
		$users = User::all();
		$messages = Message::all();
		return view('admin.dashboard', compact('articles', 'registrants', 'users', 'messages'));
	}

	public function login()
	{
		return view('auth.logiTemp');
	}

	public function articles()
	{
		$articles = Article::latest('published_at')->paginate(3);

		return view('admin.articles', compact('articles'));
	}

	public function users()
	{
		$users = User::all();

		return view('admin.users', compact('users'));
	}

	public function messages()
	{
		$messages = Message::latest()->get();

		return view('admin.messages', compact('messages'));
	}

	public function images()
	{
		$images = Image::latest()->get();

		return view('admin.images', compact('images'));
	}

	public function registrants()
	{
		$registrants = Registrant::latest()->get();

		return view('admin.registrants', compact('registrants'));
	}

}
