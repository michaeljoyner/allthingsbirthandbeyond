@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'I offer evidence-based information to support you in finding a person-centred & unique way to feed your baby in a way that is going to work for you & your family.'
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
                'On-line via a video chat for up to 60 mins - £25/hr',
                'In person via a home visit for up to 90 mins - £35/hr',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
            <p class="my-6">Whether you are breastfeeding, bottle feeding, combination feeding, pumping, or introducing solids, all new parents, at some point, feel overwhelmed by the mass of conflicting advice on how to feed their baby.  I offer evidence-based information to support you in finding a person-centred & unique way to feed your baby in a way that is going to work for you & your family. With specific qualifications in lactation & the physiology of feeding, I can also offer tailored support on pumping & paced responsive-bottle feeding to support your baby's feeding journey.  Together we will find a way that feels right for you. As a starting point, I will observe your baby feeding & offer guidance to support you with any challenges you might be experiencing. I will also provide links & signposting to additional information that might be helpful to you along your feeding journey.</p>
        </div>

        @include('front.services.service-page-button')
    </section>


@endsection