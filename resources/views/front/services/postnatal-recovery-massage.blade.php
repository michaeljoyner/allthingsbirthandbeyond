@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'Inspired by a traditional Ecuadorian postnatal massage called "Closing the Bones", this Postnatal Recovery Massage is designed to help realign & balance a new mother, as well as help her return to her centre, both physically & energetically.',
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
                '1hr 30 mins - £65',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
            <p class="my-6">Inspired by a traditional Ecuadorian postnatal massage called 'Closing the Bones', this Postnatal Recovery Massage (PRM) is done on a massage table using a Rebozo shawl to rock & bind the mother's body, together with an extensive massage of the abdomen, hips, waist, ribs, chest, shoulders & arms using a special warming oil.  Nurturing, powerful & deeply healing, it is designed to help realign & balance a new mother, as well as help her return to her centre, both physically & energetically.</p>
        </div>

        @include('front.services.service-page-button')
    </section>


@endsection