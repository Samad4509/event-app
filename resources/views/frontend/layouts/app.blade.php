<!doctype html>
<html lang="en">


<head>
    <title>@yield('tittle')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" href="{{asset('assets')}}/images/favicon.png" type="image/gif" sizes="20x20">
    <!-- Fancybox css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <!-- font icon -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css">
    <!-- Bootstarp icons CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-icons.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

</head>

<body>
    

    @include('frontend.components.header')

    @yield('body')

    @include('frontend.components.footer')

    <!--Javascript -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/swiper-bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery-ui.js"></script>
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.counterup.js"></script>
    <script src="{{asset('assets')}}/js/jquery.waypoints.js"></script>

    <!-- Custom JavaScript -->
    <script src="{{asset('assets')}}/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"70834e4b23964a2eaf7cf4ec0e5e9a84","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>



</html>