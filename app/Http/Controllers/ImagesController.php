<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Image;

class ImagesController extends Controller {

	/**
	 * Create a new articles controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Image::all();
		return view('pages.gallery', compact('images'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$images = Image::all();

		return view('admin.images', compact('images'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'file' => 'required',
			'caption' => 'required',
		]);

		$image = new Image($request->except('file'));
		
        $request->file('file')->move(public_path('uploads/gallery'), $request->file('file')->getClientOriginalName());
    	$image->file = $request->file('file')->getClientOriginalName();
    	$image->save();
		flash()->success('Gambar telah ditambahkan!');
		return redirect('/dashboard/images');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$image = Image::findOrFail($id);
		$image->delete();
		flash()->warning('Gambar telah dihapus!');
    return redirect('/dashboard/images');
	}

}
