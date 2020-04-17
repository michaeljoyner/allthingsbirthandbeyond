@extends('front.base')

@section('title')
    {{ $service['name'] }} - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => $service['name'] . ' - All Things Birth & Beyond',
        'ogDescription' => 'As a professional trained in childbirth, I provide emotional, physical, & educational support to expectant, birthing & new mothers.'
    ])
@endsection

@section('content')
    <section class="pt-40 pb-32 px-6">
        @include('front.services.service-header', [
        'title' => $service['name'],
        'icon' => $service['icon'],
        'terms' => [
                'Full service - from £800 (payment options available)',
            ]
        ])

        <div class="max-w-2xl mx-auto type-b1 text-navy my-12">
            <p class="my-6">As a professional trained in childbirth, I provide emotional, physical, & educational support to expectant, birthing & new mothers.  Antenatally, we will meet in-person at least twice & I will be available for consultations by telephone & email from the first to the last visit, within reasonable working hours.  You will also have access to my library of pregnancy, birth, & postnatal books. Together we can discuss your birth plan & I can assist you in gaining a better understanding of the birthing procedures available to you.</p>
            <p class="my-6">I have learnt it is best to offer birth doula services in a shared-care capacity.  This means that pregnancy support is available from me AND one of my doula colleagues Claire Wells or <a class="text-navy hover:underline" href="http://www.birthbright.com/doula-support">Sarah Robinson</a>, & that one of us will be with you during labour & birth.  In the extremely unlikely event that I'm unable to get to you, or your labour continues for a few days, it is best practice to ensure you have built a relationship with someone who we trust completely so that they can offer support in my absence.</p>
            <p class="my-6">During your labour & birth  I can provide comfort with pain-relief techniques including breathing techniques, relaxation techniques, massage, & labouring positions.  My role is to help you have an emotionally safe, memorable, & empowering birthing experience. I will be guided by your birth-plan, decisions, needs & wishes, to provide on-going practical & emotional support until your baby is born.  I will continue to stay with you for at least an hour after your baby’s birth to assist with your comfort & well-being, & your baby’s first feed.</p>
            <p class="my-6">Approximately one week after your baby’s birth, I will visit you in your home & use the time to reflect on your labour & birth experience with you, signpost to any local support services you might find useful & say goodbye.</p>
        </div>

        @include('front.services.service-page-button')
    </section>


@endsection