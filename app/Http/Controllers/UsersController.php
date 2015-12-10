<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Image;
use Input;

use Illuminate\Http\Request;

class UsersController extends Controller {

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
		return view('users.create');
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
			'email' => 'required',
		]);

		flash()->success('Pengguna sudah ditambahkan!');

		User::create($request->except(['password', 'avatar']));

		if($request->hasFile('avatar'))
    {
        $avatar = $request->file('avatar');
        $filename = $avatar->getClientOriginalName();
        $extension = $avatar ->getClientOriginalExtension();
        $avatar = sha1($filename . time()) . '.' . $extension;

				$destinationPath = public_path('/uploads/avatar/');
        $request->file('avatar')->move($destinationPath, $avatar);
				$article->avatar = $avatar;

				$article->save();

    }


		return redirect ('/dashboard/users');
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
	public function edit()
	{
		$user = Auth::user();
		return view('users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$id = Auth::user()->id;

		$user = User::findOrFail($id)->update($request->except(['password']));

		if($request->hasFile('avatar'))
    {
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $extension = $file ->getClientOriginalExtension();
        $image = sha1($filename . time()) . '.' . $extension;

				$destinationPath = public_path('/uploads/avatar/');
        $request->file('avatar')->move($destinationPath, $image);
				$user -> image = $image;
				$user -> save();
				
    }

		flash()->info('Profil telah diperbarui!');

		return redirect('/dashboard/profil');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(User $user)
	{
		$user->delete();
		flash()->warning('Pengguna telah dihapus!');
		return redirect('dashboard/users');
	}

}
