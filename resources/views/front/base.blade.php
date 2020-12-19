<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title', 'Birth and Beyond')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/front.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="YPEZBzl7lq8D_p6SQmvzC5Jcd1OigYZVPHULEI2PnAQ" />
    @yield('head')
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
</head>
<body  class="{{ $pageName ?? '' }} text-navy font-sans h-full flex flex-col">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<div class="flex-1">
    @yield('content')
</div>

    @include('front.partials.footer')
    @include('front.partials.navbar')


<script src="{{ mix('js/front.js') }}"></script>
@yield('bodyscripts')
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','{{ config('services.google.analytics_id') }}','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>