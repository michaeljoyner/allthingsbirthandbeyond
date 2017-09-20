<?php

namespace App\Http\Controllers;

use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::all()->filter->isLive();

        return view('front.blog.index', ['articles' => $articles]);
    }

    public function show($slug)
    {
        $article = Article::published()
                          ->where('slug', $slug)
                          ->firstOrFail();

        return view('front.blog.show', ['article' => $article]);
    }
}
