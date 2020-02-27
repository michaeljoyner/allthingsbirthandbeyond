@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'As a trained professional with extensive newborn experience, I will help you with the night time feeds, bedtime routine, breastfeeding & any sleep issues.'
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
                '8 hours - £150',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
            <p class="my-6">As a trained professional with extensive newborn experience, I will help you with the night time feeds, bedtime routine, breastfeeding & any sleep issues.  I can guide you through all the early concerns, help you establish good feeding patterns & instill positive sleep associations for your baby. When it's time for a feed I will bring your baby to you & when full, I will take care of soothing, changing, winding & getting them back to sleep.  Arriving at your home at 10pm & staying until 6am, my goal is to make sure everything stays on track while you get the best sleep you can.</p>
        </div>

        @include('front.services.service-page-button')
    </section>


@endsection