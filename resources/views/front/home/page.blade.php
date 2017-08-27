@extends('front.base')

@section('title')
    All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'All Things Birth & Beyond',
        'ogDescription' => ''
    ])
@endsection

@section('content')
    @include('front.home.banner')
    @include('front.home.services')
    @include('front.home.did-you-know')
    @include('front.home.mission-statement')
    @include('front.home.story')
    @include('front.home.pullquote')
    @include('front.home.testimonial')
@endsection