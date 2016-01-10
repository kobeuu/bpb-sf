<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Registrant;
use Illuminate\Support\Facades\Mail;
use Excel;
use Carbon\Carbon;

class registrantsController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('registration.form');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function show(Registrant $registrant)
	{
		return view('registration.show', compact('registrant'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$messages = [
    	'required' => ':attribute harus diisi.',
    	'checkbox.required' => 'Untuk mendaftar, anda harus menyetujui bahwa data yang dimasukan sudah benar',
		];

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
			'checkbox' => 'required',
		], $messages);
		
		$registrant = new Registrant($request->except('foto'));
		
		$file = $request->file('foto');
        $extension = $file ->getClientOriginalExtension();
        $name = Carbon::now(). ' - ' . $request->name . '.' . $extension;
		$destinationPath = public_path('/uploads/registrants/');
        $request->file('foto')->move($destinationPath, $name);
		$registrant->foto = $name;
		$registrant->save();

		// Mail::send('emails.konfirmasi',
		// ['name' => $request->name, 'address' => $request->address ],
		// function($message)
		// {
		// 	$message->to('kobeuu@gmail.com', 'Dede Iskandar')
		// 			->subject('welcome');
		// });

		flash()->success('Pendaftaran anda telah kami terima!');
		return redirect('/pendaftaran');
	}

	public function exportToExcel()
	{
		Excel::create(Carbon::now().' - semua pendaftar', function ($excel)
		{
			$excel->setTitle('Semua Pendaftar');
    		$excel->sheet('First sheet', function($sheet) {
			$titles = array(
				'No. Registrasi',
				'Nama Lengkap'
			);
			$registrants = Registrant::all();
			$sheet->fromModel($registrants, null, 'A1', true);

    });

		})->download('xlsx');
	}

	public function cekKelulusan()
	{
		return view('registration.create');
	}

}
