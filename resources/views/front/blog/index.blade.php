@extends('front.base', ['pageName' => 'blog-page'])

@section('title')
    Blog - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'The blog of All Things Birth & Beyond',
        'ogDescription' => 'An updated feed of helpful information, facts and opinions on all things birth and beyond'
    ])
@endsection

@section('content')
    <section class="px-6 pt-40 pb-20">
        <h1 class="type-h1 text-center text-purple">My Blog</h1>
    </section>
    <section class="px-6 py-20 flex flex-wrap justify-center">
        @foreach($articles as $article)
            <a href="/blog/{{ $article->slug }}" class="mb-12 mx-8 group">
                <article class="w-80 flex flex-col p-8 bg-teal-soft h-full">
                    <img src="{{ $article->titleImage('thumb') }}"
                         alt="{{ $article->title }}">
                    <p class="text-sm my-2">{{ $article->published_on->toFormattedDateString() }}</p>
                    <p class="type-h2 my-4 text-navy group-hover:text-teal-mid">{{ $article->title }}</p>
                    <p class="font-sans">{{ $article->intro }}</p>
                </article>
            </a>
        @endforeach
    </section>


@endsection