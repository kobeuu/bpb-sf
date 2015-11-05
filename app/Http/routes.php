<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'PagesController@index');
Route::get('profil', 'PagesController@profile');
Route::get('peserta', 'PagesController@peserta');
Route::get('prestasi', 'PagesController@prestasi');
Route::get('gallery', 'PagesController@gallery');
Route::get('kontak', 'PagesController@kontak');
Route::get('donasi', 'PagesController@donasi');

Route::get('registration', 'RegistrarsController@create');

Route::get('articles/list', 'ArticlesController@listArticles');
Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('foo', ['middleware' => 'manager', function(){
	return 'this page may only be viewed by managers';
}]);

Route::get('dashboard', 'DashboardController@index');
