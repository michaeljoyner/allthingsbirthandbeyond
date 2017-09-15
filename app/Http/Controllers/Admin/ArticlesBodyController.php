<?php

namespace App\Http\Controllers\Admin;

use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesBodyController extends Controller
{

    public function show(Article $article)
    {
        return view('admin.articles.body.show', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update(['body' => request('body')]);

        return ['body' => $article->fresh()->body];
    }
}
