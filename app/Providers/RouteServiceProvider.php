<?php namespace App\Providers;

use App\Image;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

		$router->bind('articles', function($slug)
		{
			return (\Route::currentRouteName() == "articles.edit")
                ? \App\Article::findOrFail($slug)
                : \App\Article::published()->findOrFail($slug);
		});

		$router->bind('news', function($id)
		{
			return (\Route::currentRouteName() == "news.edit")
                ? \App\News::findOrFail($id)
                : \App\News::published()->findOrFail($id);
		});

		$router->bind('tags', function($name)
		{
			return \App\Tag::where('name', $name)->firstOrFail();
		});

		$router->bind('users', function($id)
		{
			return \App\User::where('id', $id)->firstOrFail();
		});

		$router->bind('messages', function($id)
		{
			return \App\Message::where('id', $id)->firstOrFail();
		});

		$router->bind('registrants', function($id)
		{
			return \App\Registrant::where('id', $id)->firstOrFail();
		});

		$router->model('image', Image::class);


	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
