<?php

namespace App\Http\Controllers\Admin;

use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlePreviewController extends Controller
{
    public function show($article)
    {
        $article = Article::findOrFail($article);
        return view('front.blog.show', ['article' => $article]);
    }
}
