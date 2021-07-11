@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'I aim to ensure that you are well supported, assist with infant feeding, & nurture your new family in caring for your baby.'
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
                '3hrs & up - £25/hr',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
            <p class="my-6">Every new mother wants to ensure that her family has the best possible start in their journey but it can be difficult to know how to achieve that while dealing with the challenges of a newborn.</p>
            <p class="my-6">I aim to ensure that you are well supported, assist with infant feeding, & nurture your new family in caring for your baby. Whatever your situation, we can work together to find what best fits you.</p>
            <p class="my-6">My services include:</p>

            <ul class="list-disc pl-6">
                <li>Breastfeeding support</li>
                <li>Help with the emotional & physical recovery after birth</li>
                <li>Light housekeeping so that you don't feel too overwhelmed</li>
                <li>Running errands</li>
                <li>Assistance with newborn care such as changing, bathing, feeding & comforting</li>
                <li>Light meal preparation</li>
                <li>Baby soothing techniques</li>
                <li>Sibling care</li>
                <li>Referrals to local resources such as parenting classes, lactation support & support groups</li>
            </ul>

            <p class="my-6">Note: A minimum of 3 hours, maximum of 6 hours per booking</p>  
        </div>

        @include('front.services.service-page-button')
    </section>


@endsection