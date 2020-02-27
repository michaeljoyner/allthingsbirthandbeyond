@extends('front.base')

@section('title')
    Services - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'Services - All Things Birth & Beyond',
        'ogDescription' => 'I offer a range of services to parents wanting support and information on their journey to parenthood - in pregnancy, birth and beyond.'
    ])
@endsection

@section('content')
<section class="px-6 pt-40 pb-32">
    <h1 class="type-h1 text-center text-purple">My Services</h1>
    <p class="max-w-2xl mx-auto my-12 text-center type-b1 text-navy">I offer a range of services to parents wanting support and information on their journey to parenthood - in pregnancy, birth and beyond.</p>

    <div class="max-w-4xl mx-auto flex flex-wrap justify-center">
        @foreach($services as $slug => $service)
                <div class="py-8 px-4 bg-soft-pink hover:bg-teal-soft w-64 mx-4 my-8 group">
                    <a href="/services/{{ $slug }}" class="">
                        <img src="/images/illustrations/{{ $service['icon'] }}" alt="{{ $service['name'] }}" class="h-32 mx-auto mb-6">
                        <p class="type-h2 text-navy group-hover:text-teal-mid text-center">{{ $service['name'] }}</p>
                    </a>
                </div>
        @endforeach
    </div>
</section>
@endsection