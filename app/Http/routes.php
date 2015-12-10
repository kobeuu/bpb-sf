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

Route::get('login', 'AdminController@login');

/* Pages */
Route::get('profil', 'PagesController@profile');
Route::get('peserta', 'PagesController@peserta');
Route::get('prestasi', 'PagesController@prestasi');
Route::get('gallery', 'ImagesController@index');
Route::get('kontak', 'MessagesController@index');
Route::get('donasi', 'PagesController@donasi');
Route::get('kelulusan', 'PagesController@kelulusan');

/* Dashboard */
Route::get('dashboard', 'AdminController@index');
Route::get('dashboard/articles', 'AdminController@articles');
Route::get('dashboard/messages', 'AdminController@messages');
Route::get('dashboard/users', 'AdminController@users');
Route::get('dashboard/images', 'ImagesController@create');
Route::get('dashboard/registrants', 'AdminController@registrants');
Route::get('dashboard/profil', 'UsersController@edit');
Route::get('dashboard/news', 'AdminController@news');


/* Registrasi */
Route::get('registrants/xlsx', 'RegistrantsController@exportToExcel');
Route::get('pendaftaran', 'RegistrantsController@create');
Route::resource('registrants', 'RegistrantsController');
Route::post('kelulusan', 'RegistrantsController@cekKelulusan');

/* Articles */
Route::get('articles/user/{users}', 'ArticlesController@user');
Route::resource('articles', 'ArticlesController');

/* News */
Route::resource('news', 'NewsController');

/* Message */
Route::get('messages/show', 'MessagesController@show');
Route::get('messages/compose', 'MessagesController@create');
Route::patch('messages/compose', 'MessagesController@send');
Route::resource('messages', 'MessagesController');

/* Images */
Route::resource('images', 'ImagesController');

/* Tags */
Route::get('tags/{tags}', 'TagsController@show');

/* Users*/
Route::resource('users', 'UsersController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
