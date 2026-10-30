<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Basic SEO --}}
     <title>LACEHARBOR — Fashion Redefined</title> 
    <!-- <title>{{ $seo->meta_title ?? 'LACEHARBOR — Fashion Redefined' }}</title>

    <meta name="description"
        content="{{ $seo->meta_description ?? 'LACEHARBOR — Fashion Redefined' }}">

    <meta name="keywords"
        content="{{ $seo->meta_keywords ?? '' }}">

    <meta name="robots"
        content="{{ $seo->meta_robots ?? 'index, follow' }}"> -->

    {{-- Canonical --}}
    <!-- <link rel="canonical"
        href="{{ $seo->canonical_url ?? url()->current() }}"> -->

    {{-- Open Graph / Facebook --}}
    <!-- <meta property="og:type"
        content="{{ $seo->og_type ?? 'website' }}">

    <meta property="og:title"
        content="{{ $seo->og_title ?? ($seo->meta_title ?? 'LACEHARBOR — Fashion Redefined') }}">

    <meta property="og:description"
        content="{{ $seo->og_description ?? ($seo->meta_description ?? '') }}">

    <meta property="og:url"
        content="{{ $seo->og_url ?? url()->current() }}">

    @if (!empty($seo->og_image))
    <meta property="og:image"
        content="{{ asset($seo->og_image) }}">
    @endif -->

    {{-- Twitter / X --}}
    <!-- <meta name="twitter:card"
        content="{{ $seo->twitter_card ?? 'summary_large_image' }}">

    <meta name="twitter:title"
        content="{{ $seo->twitter_title ?? ($seo->meta_title ?? '') }}">

    <meta name="twitter:description"
        content="{{ $seo->twitter_description ?? ($seo->meta_description ?? '') }}">

    @if (!empty($seo->twitter_image))
    <meta name="twitter:image"
        content="{{ asset($seo->twitter_image) }}">
    @endif -->

    {{-- Favicon --}}
    <link rel="icon"
        href="{{ asset('frontend/images/favicon.ico') }}">

    <!-- ====== CSS Links Start ====== -->
    @include('frontend.partials.csslink')
    <!-- ====== CSS Links End ====== -->

    @stack('seo')

</head>


<body>

    <!-- ====== Header Section Start ====== -->
    @include('frontend.partials.header')
    <!-- ====== Header Section End ====== -->


    <!-- ======= Main Content Area Start ======= -->
    @yield('content')
    <!-- ======= Main Content Area End ======= -->


    <!-- ========= Footer Section Start ========= -->
    @include('frontend.partials.footer')
    <!-- ========= Footer Section End ========= -->


    <!-- ========== Script Links Start ========== -->
    @include('frontend.partials.scriptlink')
    <!-- ========== Script Links End ========== -->

</body>

</html>