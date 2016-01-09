<?php namespace App\Http\Controllers;

use App\Article;
use App\News;
use App\Message;
use App\Image;
use App\Registrant;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

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
		$count = [
			'articles' => Article::count(),
			'registrants' => Registrant::count(),
			'users' => User::count(),
			'messages' => Message::count(),
		];
		return view('admin.dashboard', compact('count'));
	}

	public function articles()
	{
		$articles = Auth::user()->articles()->latest('published_at')->paginate(5);
		return view('admin.articles', compact('articles'));
	}

	public function news()
	{
		$news = News::latest()->paginate(5);
		return view('admin.news', compact('news'));
	}

	public function users()
	{
		$users = User::paginate(5);
		return view('admin.users', compact('users'));
	}

	public function profil()
	{
		return view('admin.profile');
	}

	public function messages()
	{
		$messages = Message::latest()->paginate(3);
		return view('admin.messages', compact('messages'));
	}

	public function images()
	{
		$images = Image::latest()->get();
		return view('admin.images', compact('images'));
	}

	public function registrants()
	{
		$registrants = Registrant::latest()->paginate(10);
		return view('admin.registrants', compact('registrants'));
	}

}
