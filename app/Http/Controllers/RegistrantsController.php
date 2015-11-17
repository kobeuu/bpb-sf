<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Registrant;

class registrantsController extends Controller {

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
		return view('registration.index');
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
			'sex' => 'required|min:3',
			'contact' => 'required|min:3',
			'school' => 'required|min:3',
			'email' => 'required|min:3',
			'address' => 'required|min:3',
			'attachment' => 'required|min:3'
		]);

		Registrant::create($request->all());

		//flash()->success('Your article has been created!');
		flash()->overlay('Your article has been successfully created!');

		return redirect('/pendaftaran');

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

	/**
	 * Save a new article
	 *
	 * @param  ArticleRequest $request
	 * @return mixed
	 */
	private function createRegistrant(ArticleRequest $request)
	{

		return $article;
	}

}
