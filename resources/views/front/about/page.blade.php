@extends('front.base', ['pageName' => 'about-page'])

@section('title')
    About Me - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'About Me - All Things Birth & Beyond',
        'ogDescription' => ''
    ])
@endsection

@section('content')
    <h2 class="f2 f1-ns colour-p strong-type tc mv5 ttu">My Story</h2>
    <p class="body-type lh-copy colour-p f5 f4-ns mw7 w-90 center ph3 ph0-ns">In 2003 my eldest daughter was born. I found her birth and early days an overwhelming and heavily medicalised experience which didn’t get any easier in the following months. Healing from a traumatic birth experience whilst caring for a ‘high-needs’ baby was exhausting! I became acutely aware of just how important information, rather than advice, and emotional support at this time of transition and adjustment are, in the months leading up to the birth and in the birthing process.</p>
    <p class="body-type lh-copy colour-p f5 f4-ns mw7 w-90 center ph3 ph0-ns">On completion of my nursing qualification in 2004, among other things I worked as a childbirth educator and doula for an independent midwife practice in South Africa.</p>
    <p class="body-type lh-copy colour-p f5 f4-ns mw7 w-90 center ph3 ph0-ns">In 2010 I moved to the UK and in 2012 my second daughter was born. I was well informed and thoroughly prepared to ensure I experienced an empowering labour and birth experience. Breastfeeding however, was far from easy and the impact of family and familiar support networks being far away confirmed for me the need for postnatal support – not only for new families but growing families too.</p>
    <p class="body-type lh-copy colour-p f5 f4-ns mw7 w-90 center ph3 ph0-ns">After much reflection I realised that providing information in a supportive and empowering manner in a full-time capacity is what is most important to me, and I decided to re-train specifically to work with women (and their partners) at this exciting – sometimes overwhelming &mdash; time in their lives.</p>
    <p class="ph3 ph0-ns strong-type mw7 w-90 colour-p center f4 f3-ns mt5">Record of Continuing Professional Development</p>
    <ul class="ph3 pl3-ns pr0-ns mw7 w-90 center pl0 tl body-type f5 f4-ns colour-p lh-copy education-list">
        <li class="pl2 mb2 mb0-ns">2013 VRQ level 2 in Mental Health Awareness</li>
        <li class="pl2 mb2 mb0-ns">2014 Understanding and Using Rebozo Techniques</li>
        <li class="pl2 mb2 mb0-ns">2015 Introduction to Men, Love and Birth</li>
        <li class="pl2 mb2 mb0-ns">2016 Paediatric First Aid</li>
        <li class="pl2 mb2 mb0-ns">2016 Birth Trauma</li>
        <li class="pl2 mb2 mb0-ns">2016 Physical Skills</li>
        <li class="pl2 mb2 mb0-ns">2016 Introducing Solids</li>
    </ul>
    <h2 class="f2 f1-ns colour-p strong-type tc mv5 ttu">Certificates & Associations</h2>
    <div class="db flex-ns justify-center items-center mb6">
        <div class="mv3 mv0-ns mh4-ns mh3 flex justify-center items-center">
            <img src="/images/logos/DUK_RGB_LARGE.jpg" width="250px" alt="Doula UK logo">
        </div>
        <div class="mv4 mv0-ns mh4-ns mh3 flex justify-center items-center">
            <img src="/images/logos/fedant.png" width="150px" alt="Fedant logo">
        </div>
        <div class="mv3 mv0-ns mh4-ns mh3 flex justify-center items-center">
            <img src="/images/logos/ofsted_logo.svg" width="250px" alt="Ofsted logo">
        </div>
    </div>
@endsection