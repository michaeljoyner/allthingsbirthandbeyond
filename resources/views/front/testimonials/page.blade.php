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
    <section class="pt-40 pb-20 px-6">
        <h2 class="type-h1 text-center text-purple mb-12">Testimonials</h2>
        <p class="max-w-2xl mx-auto text-center text-navy type-b1">It is an honour and a privilege to be invited to share in the precious time of preparing for birth and parenthood with parents.  Thank you to my valued clients for sharing your thoughts on my involvement in your preparation for all things birth and beyond!</p>
    </section>

    @foreach($testimonials as $testimonial)
        @include('front.testimonials.' . ($testimonial->hasModelImage() ? 'image_testimonial' : 'testimonial'))
    @endforeach
@endsection