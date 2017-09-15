<?php

namespace App\Http\Controllers\Admin;

use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleImagesController extends Controller
{
    public function store(Article $article)
    {
        $this->validate(request(), ['image' => 'required|image']);

        $image = $article->addImage(request('image'));

        return ['location' => $image->getUrl('web')];
    }
}
