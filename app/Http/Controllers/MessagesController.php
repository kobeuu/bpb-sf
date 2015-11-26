<?php namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.kontak');
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
			'message' => 'required|max:255',
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
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
