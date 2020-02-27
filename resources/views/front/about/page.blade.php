@extends('front.base', ['pageName' => 'about-page'])

@section('title')
    About Me - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'My Story - All Things Birth & Beyond',
        'ogDescription' => 'Hi, I am Mel: a mom, qualified nurse and practicing doula. I\'d love to provide support and information for anything related to birth and beyond.'
    ])
@endsection

@section('content')
    <section class="px-6 pt-40 pb-32 text-navy">
        <h1 class="type-h1 text-center text-purple">My Story</h1>

        <img src="/images/illustrations/my_story.svg" alt="illustration of mother and child" class="w-80 block max-w-full mx-auto my-12">
        <div class="max-w-2xl mx-auto type-b1">
            <p class="my-6">Hi, my name is Mel & I’m sharing my story to tell you a bit more of what drives my passion in working with expectant & new parents…</p>
            <p class="my-6">When I had my first daughter in South Africa, I was on my own with little support & less money.  At the time I was completing the midwifery component of my education & so I knew a fair bit about hospital policy in managing physiological labour & birth.  What I lacked was the information & support that would give me my own voice while birthing my daughter. We ended up in surgery undergoing an emergency C-section with me under general anaesthetic, & looking back, it was a really traumatic start to our journey as mother & child.  When we got home from the hospital, difficult family dynamics made settling into my new role as a single mom that much harder… I remember being visited by an independent midwife & her incredible help while my baby & I established feeding was invaluable. I was scared & so unsure how I was going to cope but her guidance was a beacon of light in a dark time & I remember thinking everyone deserves this kind of support.  So, I changed my focus from a medically based perspective to a more person-centred approach & that really shifted my career path.</p>
            <p class="my-6">Roll on 9 years & I was birthing my second daughter halfway across the world in York.  This time around, things were very different. This time I had found my voice. The birth was not without its own challenges, few births are, but this time I was empowered.  I had the support of a local doula & through my journey with her, I met my tribe. These ladies provided me with the post-natal support I had craved so much with my first born, & ignited my passion to advance my learning so that I too could guide & support others through the incredible rollercoaster of a journey we call parenthood.</p>
            <p class="my-6">It is through my own lived  experiences that I am passionate about providing information, advocacy & support to mothers – & their families – around pregnancy, birth, infant feeding & parenting.  I wear many hats – former nurse, antenatal educator, breastfeeding counsellor, postnatal practitioner, & holistic sleep coach; all of which strengthen my commitment to support parents on their unique journeys in ways that are most useful to them.  This kind of support plays an integral role in influencing early childhood development & infant-parent bonding & I believe is absolutely vital for the development of healthy relationships not only with each other but as a wider society, too.</p>
            <p class="my-6">Through a person-centred approach & by building on current scientific evidence I will provide you with a tailored service offering in-depth support & guidance in <strong>All Things Birth & Beyond</strong>.</p>
        </div>

        <ul class="max-w-xl my-12 mx-auto type-b1">
            <li class="mb-2">&mdash; Antenatal Education, including labour & birth, infant feeding, & life after birth</li>
            <li class="mb-2">&mdash; BFI accredited Breastfeeding Counsellor</li>
            <li class="mb-2">&mdash; Doula UK recognised Birth & Postnatal Doula</li>
            <li class="mb-2">&mdash; Parent & Baby Group practitioner</li>
            <li class="mb-2">&mdash; Parenting Mentor</li>
            <li class="mb-2">&mdash; Holistic Sleep Coach</li>
        </ul>
    </section>
    <section class="px-6 pb-32">
        <p class="type-h1 text-center text-navy mb-20">Certificates and Associations</p>
        <div class="max-w-4xl mx-auto block md:flex justify-between items-center">
            <div class="flex justify-center items-center mb-8 md:mb-0">
                <img src="/images/logos/DUK_RGB_LARGE.jpg" width="250px" alt="Doula UK logo">
            </div>
            <div class="flex justify-center items-center mb-8 md:mb-0">
                <img src="/images/logos/fedant.png" width="150px" alt="Fedant logo">
            </div>
            <div class="flex justify-center items-center mb-8 md:mb-0">
                <img src="/images/logos/ofsted_logo.svg" width="250px" alt="Ofsted logo">
            </div>
        </div>
    </section>



@endsection