@extends('front.base', ['pageName' => 'article-page'])

@section('title')
    {{ $article->title }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => $article->titleImage(),
        'ogTitle' => $article->title,
        'ogDescription' => $article->description
    ])
@endsection

@section('content')
    <article class="mw7 center">
        <h2 class="f3 f2-ns colour-p strong-type ph2 tc mt5 mb2 ttu">{{ $article->title }}</h2>
        <p class="colour-s tc body-type mb5">{{ $article->published_on ? $article->published_on->toFormattedDateString() : 'Not published' }}</p>
        <img src="{{ $article->titleImage('large_tile') }}"
             alt="{{ $article->title }}">
        <div class="article-body mv4 body-type ph2 mw7 center lh-copy f4-ns">
            {!! $article->body !!}
        </div>
    </article>
    <div class="social-buttons tc mv4">
        <p class="colour-p tc f4-ns strong-type">Share this article</p>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
           class="mh2">@include('svgicons.facebook', ['classes' => 'icon icon-p hov-s'])</a>
        <a href="https://twitter.com/home?status={{ urlencode($article->title . ' ' . Request::url()) }}"
           class="mh2">@include('svgicons.twitter', ['classes' => 'icon icon-p hov-s'])</a>
    </div>
@endsection