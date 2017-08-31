<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title', 'Birth and Beyond')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/fapp.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="YPEZBzl7lq8D_p6SQmvzC5Jcd1OigYZVPHULEI2PnAQ" />
    @yield('head')
</head>
<body  class="{{ $pageName ?? '' }}">

    @include('front.partials.navbar')
    <div class="page-content">
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        @yield('content')
    </div>
    @include('front.partials.footer')


<script src="{{ mix('js/front.js') }}"></script>
@yield('bodyscripts')
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','{{ config('services.google.analytics_id') }}','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>