<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jquery.bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/owl.carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />

    <title>Trang chủ - Phụ kiện LD</title>
    @livewireStyles
</head>
<body class="home">
<!-- TOP BANNER -->
{{--@livewire('home.top-banner-ads')--}}
@include('frontend.body.header')

@yield('content')

@include('frontend.body.footer')

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{ asset('assets/lib/jquery/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/select2/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/jquery.bxslider/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/owl.carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/jquery.countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/jquery.elevatezoom.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/fancyBox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/theme-script.js') }}"></script>

</body>
@livewireScripts
</html>
