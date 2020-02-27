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
    <section class="px-8 pt-40 pb-32">
        <h1 class="type-h1 text-purple text-center">{{ $article->title }}</h1>
        <p class="text-center text-purple type-b1 mb-20">{{ $article->published_on ? $article->published_on->toFormattedDateString() : 'Not published' }}</p>
        <img src="{{ $article->titleImage('large_tile') }}"
             alt="{{ $article->title }}" class="block mx-auto max-w-full mb-20">
        <div class="max-w-2xl mx-auto type-b1">
            {!! $article->body !!}
        </div>
    </section>
    <div class="my-12 text-center">
        <p class="type-h2 text-center text-navy mb-6">Share this article</p>
        <div class="flex justify-center">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
               class="mh2">@include('svgicons.facebook', ['classes' => 'text-teal-hard hover:text-teal-mid mx-4'])</a>
            <a href="https://twitter.com/home?status={{ urlencode($article->title . ' ' . Request::url()) }}"
               class="mh2">@include('svgicons.twitter', ['classes' => 'text-teal-hard hover:text-teal-mid mx-4'])</a>
        </div>

    </div>
@endsection