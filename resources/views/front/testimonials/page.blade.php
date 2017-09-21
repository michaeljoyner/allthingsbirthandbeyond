@extends('front.base', ['pageName' => 'testimonials-page'])

@section('title')
    Testimonials - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'Testimonials - All Things Birth & Beyond',
        'ogDescription' => 'It is an honour to share in the precious time of preparing for birth and parenthood with parents. Thank you to my valued clients for sharing your thoughts on my involvement in your preparation for all things birth and beyond!'
    ])
@endsection

@section('content')
    <h2 class="f2 f1-ns colour-p strong-type tc mt5 mb2 ttu">Testimonials</h2>
    <p class="w-90 mw8 center lh-copy body-type b colour-p tc f5 f4-ns mt4">It is an honour and a privilege to be invited to share in the precious time of preparing for birth and parenthood with parents.  Thank you to my valued clients for sharing your thoughts on my involvement in your preparation for all things birth and beyond!</p>
    @foreach($testimonials as $testimonial)
        @include('front.testimonials.' . ($testimonial->hasModelImage() ? 'image_testimonial' : 'testimonial'))
    @endforeach
@endsection