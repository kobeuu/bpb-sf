<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Registrant;
use Illuminate\Support\Facades\Mail;
use \Input as Input;

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
			'name' => 'required',
			'jk' => 'required',
			'hp' => 'required',
			'sma' => 'required',
			'lulus' => 'required',
			'email' => 'required',
			'kampung' => 'required',
			'desa' => 'required',
			'kecamatan' => 'required',
			'kota' => 'required',
			'provinsi' => 'required',
			'universitas' => 'required',
			'fakultas' => 'required',
			'jurusan' => 'required',
			'anak' => 'required',
			'saudara' => 'required',
			'penghasilan' => 'required',
			'tanggungan' => 'required',
			'tentang_keluarga' => 'required',
			'tentang_sahabat' => 'required',
			'tentang_ekonomi' => 'required',
			'sekolah' => 'required',
			'luar_sekolah' => 'required',
			'organisasi' => 'required',
			'harapan' => 'required',
			'potensi' => 'required',
			'mimpi' => 'required',
			'moto' => 'required',
			'foto' => 'required',
		]);

		if(Input::hasFile('foto')){
			$file = Input::file('foto');
	    $image_name = time()."-".$file->getClientOriginalName();
	    $file->move('uploads/registrants/', $image_name);
	    Image::make(sprintf('uploads/registrants/%s', $image_name))->resize(300)->save();
		}



		Mail::send('emails.konfirmasi',
		['name' => $request->name, 'address' => $request->address ],
		function($message)
		{
			$message->to('kobeuu@gmail.com', 'Dede Iskandar')
							->subject('welcome');
		});

		$article = new Registrant($request->all());
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
