<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;

use Illuminate\Http\Request;

class NewsController extends Controller {

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
		$news = News::latest('published_at')->published()->paginate(3);
		return view('news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->createNews($request);
		flash()->success('News has been successfully created!');
		return redirect('/dashboard/news');
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
	public function edit(News $new)
	{
		return view('news.edit', compact('new'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(News $new, Request $request)
	{
		$new->update($request->except('image'));
		flash()->info('Artikel telah diperbarui!');
		return redirect('/dashboard/news');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(News $new)
	{
		$new->delete();
		flash()->warning('Berita telah dihapus!');
		return redirect('dashboard/news');
	}

	private function createNews(Request $request)
	{
		$news = new News($request->except('image'));
		if($request->hasFile('image'))
    {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $extension = $file ->getClientOriginalExtension();
        $image = sha1($filename . time()) . '.' . $extension;
				$destinationPath = public_path('/uploads/images/');
        $request->file('image')->move($destinationPath, $image);
				$news -> image = $image;
    }
		$news -> save();
		return $news;
	}

}
