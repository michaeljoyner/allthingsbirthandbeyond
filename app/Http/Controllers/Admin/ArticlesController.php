<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleInfoForm;
use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function index()
    {
        return view('admin.articles.index', [
            'articles' => Article::latest()->take(15)->get()->map->toJsonableArray()
        ]);
    }

    public function show(Article $article)
    {
        return view('admin.articles.show', ['article' => $article->toJsonableArray()]);
    }

    public function store(ArticleInfoForm $form)
    {
        auth()->user()->postArticle($form->requiredFields());

        return redirect('/admin');
    }

    public function update(Article $article, ArticleInfoForm $form)
    {
        $article->update($form->requiredFields());

        return $article->fresh()->toJsonableArray();
    }

    public function delete(Article $article)
    {
        $article->delete();

        return redirect('/admin/articles');
    }
}
