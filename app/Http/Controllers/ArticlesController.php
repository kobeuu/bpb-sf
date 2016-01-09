<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Auth;
use App\Tag;
use App\User;

class ArticlesController extends Controller
{

	/**
	 * Create a new articles controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show', 'user']]);
	}

	/**
	 * Show all articles
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::latest('published_at')->published()->paginate(3);
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show a single article
	 *
	 * @param Article $article
	 * @return  Response
	 */

	public function show(Article $article)
	{
		return view('articles.show', compact('article', 'tags'));
	}

	/**
	 * Show the page to create a new article
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags = Tag::lists('name' , 'id');
		return view('articles.create', compact('tags'));
	}

	/**
	 * Save a new article
	 *
	 * @param CreateArticleRequest $request
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		$this->createArticle($request);
		flash()->success('Your article has been successfully created!');
		return redirect('/dashboard/articles');
	}

	/**
	 * Sync up the list of tags in the database
	 *
	 * @param  Article $article
	 * @param  array   $tags
	 */
	private function syncTags(Article $article, array $tags)
	{
		$article->tags()->sync($tags);
	}

	/**
	 * Save a new article
	 *
	 * @param  ArticleRequest $request
	 * @return mixed
	 */
	private function createArticle(ArticleRequest $request)
	{
		$article = new Article($request->except('image'));
    	$article -> user_id = Auth::id();
		if($request->hasFile('image'))
	    {
	        $file = $request->file('image');
	        $filename = $file->getClientOriginalName();
	        $extension = $file ->getClientOriginalExtension();
	        $image = sha1($filename . time()) . '.' . $extension;
			$destinationPath = public_path('/uploads/images/');
	        $request->file('image')->move($destinationPath, $image);
			$article->image = $image;
	    }
		$article -> save();
		$this->syncTags($article, $request->input('tag_list'));
		return $article;
	}

	/**
	 * Edit an existing article
	 *
	 * @param  integer $id
	 * @return Response
	 */
	public function edit(Article $article)
	{
		$tags = Tag::lists('name' , 'id');
		return view('articles.edit', compact('article' , 'tags'));
	}

	/**
	 * update an existing article
	 *
	 * @param  integer $id
	 * @param  ArticleRequest $request
	 * @return Response
	 */
	public function update(Article $article, ArticleRequest $request)
	{
		$article->update($request->except('image'));

		if($request->hasFile('image'))
	    {
	        $file = $request->file('image');
	        $filename = $file->getClientOriginalName();
	        $extension = $file ->getClientOriginalExtension();
	        $image = sha1($filename . time()) . '.' . $extension;
			$destinationPath = public_path('/uploads/images/');
	        $request->file('image')->move($destinationPath, $image);
			$article->image = $image;
			$article->update();
	    }

		$this->syncTags($article, $request->input('tag_list'));

		flash()->info('Artikel telah diperbarui!');
		
		return redirect('/dashboard/articles');
	}

  /**
   * Remove the specified resource from storage.
   *
   * @param $id
   * @return Response
   */
  public function destroy(Article $article)
  {
    $article->delete();
		flash()->warning('Artikel telah dihapus!');
		return redirect('dashboard/articles');
  }

	public function user(User $user)
	{
		$articles = $user->articles()->published()->paginate(5);
		return view('articles.index', compact('articles'));
	}

}
