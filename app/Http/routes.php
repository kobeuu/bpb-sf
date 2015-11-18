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
Route::get('gallery', 'ImagesController@index');
Route::get('kontak', 'MessagesController@create');
Route::get('donasi', 'PagesController@donasi');

Route::get('dashboard', 'AdminController@index');

Route::get('registrants/admin', 'AdminController@registrants');
Route::get('pendaftaran', 'RegistrantsController@create');
Route::resource('registrants', 'RegistrantsController');

Route::get('articles/admin', 'AdminController@articles');
Route::resource('articles', 'ArticlesController');

Route::get('messages/admin', 'AdminController@messages');
Route::resource('messages', 'MessagesController');

Route::get('images/admin', 'ImagesController@create');
Route::resource('images', 'ImagesController');

Route::get('users/admin', 'AdminController@users');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
