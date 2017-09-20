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
    <h2 class="f2 f1-ns colour-p strong-type tc mt5 mb2 ttu">Blog</h2>
    <section class="mv4 flex justify-around mw8 center flex-wrap">
    @foreach($articles as $article)
            <a href="/blog/{{ $article->slug }}" class="w-40-ns w-90 mv3 flex link">
                <article class="pa3 bgc-light flex flex-column hover-soft-bg">
                    <img src="{{ $article->titleImage('thumb') }}"
                         alt="{{ $article->title }}">
                    <p class="f3 bold strong-type colour-p mb1">{{ $article->title }}</p>
                    <p class="colour-s mv1 body-type lh-copy">{{ $article->published_on->toFormattedDateString() }}</p>
                    <p class="colour-d body-type">{{ $article->intro }}</p>
                </article>
            </a>
    @endforeach
    </section>

@endsection