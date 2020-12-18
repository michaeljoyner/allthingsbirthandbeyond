@extends('front.base', ['pageName' => 'thanks-page'])

@section('content')
    <div class="pt-16 max-w-4xl mx-auto">
        <h2 class="text-center type-h1 pt-12">Thanks</h2>
        <p class="type-b1 text-center pt-8">Hi {{ session('sender', 'there') }}. Thanks for your message - I will reply as soon as I'm able.</p>
        <p class="text-center type-b2 mt-6">&mdash; Best wishes, Mel</p>
    </div>

@endsection