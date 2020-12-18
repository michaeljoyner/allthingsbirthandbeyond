@extends('front.base', ['pageName' => 'contact-page'])

@section('title')
    Contact Us - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'Contact Us - All Things Birth & Beyond',
        'ogDescription' => 'Get in touch if you have any questions or needs relating to all things birth and beyond.'
    ])
    <script src='https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.key') }}'></script>
@endsection

@section('content')
    <section class="px-6 pt-40 pb-32">
        <h2 class="type-h1 text-navy text-center">Get In Touch</h2>
        <p class="type-b1 text-center max-w-2xl mx-auto my-12">Send me a message to set up a free initial consult.</p>
        <form action="/contact" method="POST" class="max-w-lg mx-auto contact-form">
            {!! csrf_field() !!}
            <div class="{{ $errors->has('name') ? ' bg-red-100' : '' }} my-6">
                <label class="type-h2 text-navy" for="name">Name</label>
                @if($errors->has('name'))
                    <span class="text-sm text-red-600">{{ $errors->first('name') }}</span>
                @endif
                <input type="text" name="name" value="{{ old('name') }}" class="p-2 w-full border border-purple rounded">
            </div>
            <div class="{{ $errors->has('email') ? ' bg-red-100' : '' }} my-6">
                <label class="type-h2 text-navy" for="email">Email</label>
                @if($errors->has('email'))
                    <span class="text-sm text-red-600">{{ $errors->first('email') }}</span>
                @endif
                <input type="email" name="email" value="{{ old('email') }}" class="p-2 w-full border border-purple rounded">
            </div>
            <div class="{{ $errors->has('phone') ? ' bg-red-100' : '' }} my-6">
                <label class="type-h2 text-navy" for="phone">Phone</label>
                @if($errors->has('phone'))
                    <span class="text-sm text-red-600">{{ $errors->first('phone') }}</span>
                @endif
                <input type="text" name="phone" value="{{ old('phone') }}" class="p-2 w-full border border-purple rounded">
            </div>
            <div class="{{ $errors->has('enquiry') ? ' bg-red-100' : '' }} my-6">
                <label class="type-h2 text-navy" for="enquiry">Enquiry</label>
                @if($errors->has('enquiry'))
                    <span class="text-sm text-red-600">{{ $errors->first('enquiry') }}</span>
                @endif
                <textarea name="enquiry" class="p-2 w-full border border-purple rounded h-40">{{ old('enquiry') }}</textarea>
            </div>
            <div class="my-6 text-center">
                <button type="submit" class="btn btn-purple">Send Message</button>
            </div>
            <input type="hidden" name="recaptcha_token" id="recaptcha-token">
        </form>
        <div class="flex flex-col items-center">
            <p class="text-navy type-h2 mb-6">or</p>
            <p class="text-navy type-h2 mb-6">Call on <a href="tel:+441904238471" class="hover:underline">+441904238471</a></p>
            <p class="text-navy type-h2 mb-6">or</p>
            <div class="tc mb6">
                @include('front.partials.booking-button')
            </div>
        </div>

    </section>


@endsection

@section('bodyscripts')
    <script>
        const form = document.querySelector('.contact-form');
        form.addEventListener('submit', (ev) => {
            const btn = form.querySelector('button[type=submit]');
            btn.innerHTML = 'SENDING...';
            btn.classList.add('o-50');
            btn.disabled = true;
            ev.preventDefault();
            grecaptcha.execute('{{ config('services.google.recaptcha.key') }}', {action: 'contact_form'})
                      .then(function(token) {
                          console.log({token});
                            document.querySelector('#recaptcha-token').value = token;
                            form.submit();
                      });
            return false;
        });
    </script>
@endsection