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
Route::get('kontak', 'MessagesController@create');
Route::get('donasi', 'PagesController@donasi');

Route::get('dashboard', 'AdminController@index');

Route::get('pendaftaran', 'RegistrantsController@create');
Route::resource('registrants', 'RegistrantsController');
Route::resource('messages', 'MessagesController');

Route::get('articles/admin', 'AdminController@articles');
Route::resource('articles', 'ArticlesController');

Route::get('messages/admin', 'AdminController@messages');
Route::resource('messages', 'MessagesController');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
