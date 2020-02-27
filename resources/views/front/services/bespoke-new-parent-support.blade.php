@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'To provide the best in-person post-natal support, I will work with you in your home to develop & support your understanding of normal infant development.'
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
                '24/7 over 5 days - £1400 (3hr break & sleep included)',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
            <p class="my-6">To provide the best in-person post-natal support, I will work with you in your home to develop & support your understanding of normal infant development - including gut maturation & sleep biology, protection & promotion of milk supply if you are breastfeeding, & establishing & nurturing healthy daily rhythms that work best for you & your baby.  I will also provide you with a personalised care plan, ongoing support via telephone & email, & a follow-up session so that we can reconnect to evaluate what is working for you & decide how you would like to move forward with my support.</p>
        </div>

        @include('front.services.service-page-button')
    </section>


@endsection