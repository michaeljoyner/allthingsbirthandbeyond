@extends('front.base', ['pageName' => 'contact-page'])

@section('title')
    Contact Us - All Things Birth & Beyond
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '/images/facebook.jpg',
        'ogTitle' => 'Contact Us - All Things Birth & Beyond',
        'ogDescription' => ''
    ])
@endsection

@section('content')
    <h2 class="f2 f1-ns colour-p strong-type tc mv5 ttu">Get In Touch</h2>
    <p class="mv4 colour-p b f5 f4-ns tc ph3 body-type">Send us a message to set up a free appointment now.</p>
    <form action="/contact" method="POST" class="w-90 mw6 center">
        {!! csrf_field() !!}
        <div class="{{ $errors->has('name') ? ' has-error' : '' }} mv3">
            <label class="body-type lh-copy f5" for="name">Name</label>
            @if($errors->has('name'))
            <span class="error-message">{{ $errors->first('name') }}</span>
            @endif
            <input type="text" name="name" value="{{ old('name') }}" class="w-100 ba bw1 h2 lh-copy br2 colour-p pl2">
        </div>
        <div class="{{ $errors->has('email') ? ' has-error' : '' }} mv3">
            <label class="body-type lh-copy f5" for="email">Email</label>
            @if($errors->has('email'))
            <span class="error-message">{{ $errors->first('email') }}</span>
            @endif
            <input type="email" name="email" value="{{ old('email') }}" class="w-100 ba bw1 h2 lh-copy br2 colour-p pl2">
        </div>
        <div class="{{ $errors->has('phone') ? ' has-error' : '' }} mv3">
            <label class="body-type lh-copy f5" for="phone">Phone</label>
            @if($errors->has('phone'))
            <span class="error-message">{{ $errors->first('phone') }}</span>
            @endif
            <input type="text" name="phone" value="{{ old('phone') }}" class="w-100 ba bw1 h2 lh-copy br2 colour-p pl2">
        </div>
        <div class="{{ $errors->has('enquiry') ? ' has-error' : '' }} mv3">
            <label class="body-type lh-copy f5" for="enquiry">Enquiry</label>
            @if($errors->has('enquiry'))
            <span class="error-message">{{ $errors->first('enquiry') }}</span>
            @endif
            <textarea name="enquiry" class="w-100 ba bw1 lh-copy br2 colour-p input h4 pl2">{{ old('enquiry') }}</textarea>
        </div>
        <div class="mt4 mb5 tc">
            <button type="submit" class="ph4 pv2 ba br3 bw2 colour-p f4 f3-ns hov-s strong-type ttu bgc-white bdc-p">Send Message</button>
        </div>
    </form>
    <p class="mv4 colour-p f4 f3-ns tc ph3 body-type b">Alternatively, please feel free to email</p>
    <p class="mt4 mb5 colour-p f5 f4-ns tc ph3 body-type">hello@allthingsbirthandbeyond.co.uk</p>
@endsection