@extends('front.base')

@section('title')
    All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'All Things Birth & Beyond',
        'ogDescription' => 'I am a certified and professional doula who works to provide information and support for all things birth and beyond.'
    ])
@endsection

@section('content')
    @include('front.home.banner')
    @include('front.home.welcome')
    @include('front.home.services')
    @include('front.home.did-you-know')
    @include('front.home.mission-statement')
    @include('front.home.story')
    @include('front.home.inspiration')
{{--    @include('front.home.pullquote')--}}
    @include('front.home.testimonial')
@endsection