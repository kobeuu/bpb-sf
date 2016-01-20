<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Slider;

class SlidersController extends Controller {

	/**
	 * Create a new articles controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders = Slider::all();
		return view('admin.sliders', compact('sliders'));
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
			'file' => 'required',
		]);

		$image = new Slider($request->except('file'));
		
        $request->file('file')->move(public_path('uploads/sliders'), $request->file('file')->getClientOriginalName());
    	$image->file = $request->file('file')->getClientOriginalName();
    	$image->save();
		flash()->success('Slider telah ditambahkan!');
		return redirect('/dashboard/sliders');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$image = Slider::findOrFail($id);
		$image->delete();
		flash()->warning('Slider telah dihapus!');
    	return redirect('/dashboard/sliders');
	}

}
