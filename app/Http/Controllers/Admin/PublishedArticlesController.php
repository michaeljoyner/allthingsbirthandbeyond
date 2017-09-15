<?php

namespace App\Http\Controllers\Admin;

use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublishedArticlesController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'id' => 'required|exists:articles,id',
            'publish_date' => 'date'
        ]);

        Article::find(request('id'))->publish(request('publish_date', null));
    }

    public function delete(Article $article)
    {
        $article->retract();
    }
}
