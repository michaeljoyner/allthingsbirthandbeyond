<?php

namespace App\Http\Controllers\Admin;

use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleTitleImageController extends Controller
{
    public function store(Article $article)
    {
        $this->validate(request(), ['image' => 'required|image']);

        $article->setTitleImage(request('image'));
    }

    public function delete(Article $article)
    {
        $article->clearMediaCollection(Article::TITLE_IMAGE_COLLECTION);
    }
}
