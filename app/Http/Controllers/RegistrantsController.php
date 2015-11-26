<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Registrant;
use Illuminate\Support\Facades\Mail;
use Excel;

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

		Registrant::create($request->except('foto'));

		if ($request->hasFile('foto'))
		{
			$request->file('foto')->move(public_path('uploads/registrants'), $request->file('foto')->getClientOriginalName());

		 	$registrant->foto = $request->file('foto')->getClientOriginalName();

		 	$registrant->save();
		}

		Mail::send('emails.konfirmasi',
		['name' => $request->name, 'address' => $request->address ],
		function($message)
		{
			$message->to('kobeuu@gmail.com', 'Dede Iskandar')
							->subject('welcome');
		});

		//flash()->success('Your article has been created!');
		flash()->success('Pendaftaran anda telah kami terima!');

		return redirect('/pendaftaran');

	}

	public function exportToExcel()
	{
		Excel::create('daftar peserta', function ($excel)
		{
			$excel->setTitle('Our new awesome title');

			// Our first sheet
    $excel->sheet('First sheet', function($sheet) {

			$titles = array(
				'No. Registrasi',
				'Nama Lengkap'
			);

			$registrants = Registrant::all();

			$sheet->fromModel($registrants, null, 'A1', true);

    });

    // Our second sheet
    $excel->sheet('Second sheet', function($sheet) {

    });


		})->download('xlsx');
	}

}