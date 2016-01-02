<?php namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessagesController extends Controller {

	/**
	 * Create a new articles controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'create', 'store']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.kontak');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('messages.compose');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|min:3',
			'hp' => 'required|min:6',
			'email' => 'required',
			'subject' => 'required',
			'message' => 'required|max:1024',
		]);

		flash()->success('Pesan anda telah kami terima!');
		Message::create($request->all());
		return redirect ('/kontak');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Message $message)
	{
		return view('messages.show', compact('message'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Message $message)
	{
		$message->delete();
		flash()->warning('Pesan telah dihapus!');
		return redirect('/dashboard/message');
	}

	public function reply($id)
	{
		$message = Message::findOrFail($id);
		return view('message.compose', compact('message'));
	}

	public function send(Request $request)
	{
		$this->validate($request, [
			'email' => 'required',
			'subject' => 'required',
			'message' => 'required|max:1024',
		]);

		Mail::send('$request->message', function ($message)
		{
			$message->from('gamapinsa@gmail.com', 'Gamapinsa');
			$message->to('$request->email', 'Dede Iskandar')
							->subject('$request->subject');
		});

		flash()->success('Pesan anda telah terkirim!');

	}

}
