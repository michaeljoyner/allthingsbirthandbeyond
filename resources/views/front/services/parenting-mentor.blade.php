@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'I provide expert guidance and information to help you on your journey through parenthood.'
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
            '6 Month/4 Month/6 Week programmes',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">

            <div class="my-6">
                <p class="mb-2">6 MONTH PROGRAMME:<br>6 x 3hr postnatal visit - £520 (45p/mile after the first 10 miles of each trip)</p>
                <p class="mb-2">4 MONTH PROGRAMME:<br>3 x 3hr postnatal visit - £350 (45p/mile after the first 10 miles of each trip)</p>
                <p class="">6 WEEK PROGRAMME:<br>3hr postnatal visit - £120 (45p/mile after the first 10 miles of each trip)</p>
            </div>
            <p class="my-6">During our postnatal visits at your home, we will work together to:</p>

            <ul class="list-disc pl-6">
                <li>establish good feeding patterns & discuss gut development</li>
                <li>instil positive sleep associations & support healthy sleep biology</li>
                <li>explore normal, infant development & age appropriate  activities for your baby</li>
                <li>find what kind of daily rhythm  works best for you & your baby</li>
            </ul>

            <p class="my-6">I will also provide you with a personalised care plan, on-going support via telephone & email communication, & a follow-up session so we can reconnect to evaluate what is working for you & how we can improve in any way.</p>
        </div>

        @include('front.services.service-page-button')
    </section>


@endsection