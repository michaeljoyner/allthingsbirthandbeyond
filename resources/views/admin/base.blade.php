<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1 shrink-to-fit=no">
    @section('title')
        <title>All Things Birth &amp; Beyond | Admin</title>
    @show
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300'
          rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet"
          href="{{ mix('css/app.css') }}"/>
    <meta id="csrf-token-meta"
          name="csrf-token"
          content="{{ csrf_token() }}">
    <META NAME="ROBOTS"
          CONTENT="NOINDEX, NOFOLLOW">
    @yield('head')

</head>
<body>

<div class=""
     id="app">
    @auth
        @include('admin.partials.navbar')
    @else
        @include('admin.partials.fakenavbar')
    @endauth
    <div class="max-w-4xl mx-auto px-6">
        @yield('content')
    </div>
</div>
{{--<div class="main-footer"></div>--}}
<script src="{{ mix('js/app.js') }}"></script>
@include('admin.partials.flash')
@yield('bodyscripts')
</body>
</html>