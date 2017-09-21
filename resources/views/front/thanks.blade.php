@extends('front.base', ['pageName' => 'thanks-page'])

@section('content')
    <h2 class="f2 f1-ns colour-p strong-type tc mv5 ttu">Thanks</h2>
    <p class="body-type f4 f3-ns colour-p measure-wide tc center ph3 ph0-ns mb3">Hi {{ session('sender', 'there') }}. Thanks for your message - I will reply as soon as I'm able.</p>
    <p class="body-type f4 f3-ns colour-p tr i mw7 center pl0-ns mb5 pr5">&mdash; Best wishes, Mel</p>
@endsection