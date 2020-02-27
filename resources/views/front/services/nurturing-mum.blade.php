@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'A postnatal care package to help mum recover from birth and acclimatise to the responsibility of caring for a newborn'
    ])
@endsection

@section('content')
<section class="pt-40 pb-32 px-6">
    @include('front.services.service-header', [
    'title' => $service['name'],
    'icon' => $service['icon'],
    'terms' => [
            '20 hours over 5 days - £20/hr',
        ]
    ])

    <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
        <p class="my-6">Recovering from birth & acclimatising to the responsibility of caring for a newborn can be daunting.  Over 5 days & in the comfort of their own homes, this package provides new mothers with 20 hours of holistic postnatal support, care & nourishment & includes:</p>

        <ul class="list-disc pl-6">
            <li>Postnatal Recovery Massage, based on Ecuadorian 'Closing the Bones'</li>
            <li>Optional Moroccan Womb Steam or Reiki Treatment</li>
            <li>New Mother Herbal Healing Bath Soak</li>
            <li>Warm, nourishing home-cooked meals</li>
            <li>Person-centred approach to honouring the transition to parenthood, specific to your needs</li>
        </ul>

    </div>

    @include('front.services.service-page-button')
</section>

@endsection