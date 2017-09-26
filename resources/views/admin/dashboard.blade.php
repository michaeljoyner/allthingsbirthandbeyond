@extends('admin.base')

@section('content')
    <h1>Hi Mel</h1>
    <div class="quote card">
        <p class="label">Your daily inspiration</p><br><br>
        <p class="quote-text lead">{{ $quote['quote'] }}</p>
        <p class="quote-author">&mdash; {{ $quote['author'] }}</p>
    </div>
@endsection