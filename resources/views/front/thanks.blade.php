@extends('front.base', ['pageName' => 'thanks-page'])

@section('content')
    <h2 class="f2 f1-ns colour-p strong-type tc mv5 ttu">Thanks</h2>
    <p class="body-type f4 f3-ns colour-p measure-wide center ph3 ph0-ns mb3">Thanks {{ session('sender', ' for getting in touch') }}! I appreciate it, and I'll be in touch soon, if it is appropriate. Take care, and have a nice day.</p>
    <p class="body-type f4 f3-ns colour-p tr i ph0-ns mb5 pr5">&mdash; Mel</p>
@endsection