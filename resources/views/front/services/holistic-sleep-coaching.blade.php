@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'Sleep deprivation in parenthood is real!  It is experienced by all of us at some point during our parenting journey. Let me help you.'
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
                '8 hrs over a 1 month period - £180',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
            <p class="my-6">Sleep deprivation in parenthood is real!  It is experienced by all of us at some point during our parenting journey.</p>
            <p class="my-6">My qualifications include specific training in sleep biology, infant development, & how to support families as they get to grips with how to support themselves while supporting their baby's developing sleep patterns.</p>
            <p class="my-6">You will receive evidence-based information with a focus on person-centred strategies that will support you & your baby through the transition in infant development & sleep.</p>
            <p class="my-6">After we have met for an initial consultation, I will provide you with a personalised care plan, on-going support via telephone & email communication, & a follow-up session so we can reconnect to evaluate what is working for you & how we can improve strategies so everyone in the family is as well-rested as possible.</p>
            <p class="my-6">Your 8 hrs can be used in scheduled blocks as you require them over a 1 month period.</p>
        </div>

        @include('front.services.service-page-button')
    </section>
@endsection