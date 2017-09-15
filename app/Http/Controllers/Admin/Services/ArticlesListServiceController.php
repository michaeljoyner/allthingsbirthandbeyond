<?php

namespace App\Http\Controllers\Admin\Services;

use Dymantic\Articles\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesListServiceController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(15);

        return [
            'articles' => collect($articles->items())->map->toJsonableArray(),
            'page_links' => $articles->getUrlRange(1, $articles->lastPage()),
            'current_page' => $articles->currentPage()
        ];
    }
}
