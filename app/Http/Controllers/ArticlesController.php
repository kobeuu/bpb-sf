<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Auth;
use App\Tag;

class ArticlesController extends Controller
{

	/**
	 * Create a new articles controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}

	/**
	 * Show all articles
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::latest('published_at')->published()->get();

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
		return view('articles.show', compact('article'));
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

		//flash()->success('Your article has been created!');
		flash()->overlay('Your article has been successfully created!');

		return redirect('articles/admin');
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
		if($request->hasFile('image'))
		{
				$file = $request->file('image');
				$image = $file->getClientOriginalName();

				$destinationPath = public_path('/uploads/images/');
				$request->file('image')->move($destinationPath, $image);
		}

		$article->update($request->all());

		$this->syncTags($article, $request->input('tag_list'));

		return redirect('articles');
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

    }

		$article -> image = $image;
    $article -> save();

		$this->syncTags($article, $request->input('tag_list'));

		return $article;
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

		return redirect('articles/admin');
  }

}
