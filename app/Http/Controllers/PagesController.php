<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\News;
use App\Image;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::latest()->get();
        $news = News::latest('published_at')->published()->get();
        $articles = Article::latest('published_at')->published()->get();
        return view('pages.index', compact('articles', 'news', 'images'));
    }

    /**
     * display profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('pages.profile');
    }

    /**
     * display gallery page.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        return view('pages.gallery');
    }

    /**
     * display kontak page.
     *
     * @return \Illuminate\Http\Response
     */
    public function kontak()
    {
        return view('pages.kontak');
    }

    /**
     * display donasi page.
     *
     * @return \Illuminate\Http\Response
     */
    public function donasi()
    {
        return view('pages.donasi');
    }

    /**
     * display kelulusan page.
     *
     * @return \Illuminate\Http\Response
     */
    public function kelulusan()
    {
      return view('pages.kelulusan');
    }
}
