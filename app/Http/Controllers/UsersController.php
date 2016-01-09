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

		$user = new User($request->except(['password', 'avatar']));

		if($request->hasFile('avatar'))
	    {
	        $avatar = $request->file('avatar');
	        $filename = $avatar->getClientOriginalName();
	        $extension = $avatar ->getClientOriginalExtension();
	        $name = $request->name . '.' . $extension;
			$destinationPath = public_path('/uploads/avatar/');
	        $request->file('avatar')->move($destinationPath, $name);
			$user->avatar= $name;
			$user->save();
	    }

		return redirect ('/dashboard/users');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(User $user)
	{
		return view('users.edit', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
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
	public function update(User $user, Request $request)
	{
		$user->update($request->except('avatar'));
		if($request->hasFile('avatar'))
	    {
	        $file = $request->file('avatar');
	        $filename = $file->getClientOriginalName();
	        $extension = $file ->getClientOriginalExtension();
	        $image = sha1($filename . time()) . '.' . $extension;
			$destinationPath = public_path('/uploads/avatar/');
	        $request->file('avatar')->move($destinationPath, $image);
			$user->avatar = $image;
			$user-> update();
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
