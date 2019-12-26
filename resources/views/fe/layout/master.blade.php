<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Growth Center</title>
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('lib/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    @yield('css')
</head>
<body>
<div class="header">
    <ul class="nav justify-content-end" style="width: 100%">
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link active white-able">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{route('our-solutions')}}" class="nav-link white-able">Our Solutions</a>
        </li>
        <li class="nav-item">
            <a href="{{route('about-us')}}" class="nav-link white-able">About Us</a>
        </li>
        <li class="nav-item">
            <a href="{{route('blog')}}" class="nav-link white-able">Insight</a>
        </li>
        <li class="nav-item">
            <a href="{{route('contact-us')}}">
                <button class="btn btn-growth nav-link" style="font-size: 14px;">Contact Us</button>
            </a>
        </li>
    </ul>
</div>
@yield('content')
<div class="footer gc-full-width gc-align-center gc-helvetica gc-color-white" style="font-size: 14px;">
    <span>&copy; Copyright 2019, Growth Center, Inc. All rights reserved.</span>
</div>
</body>
<script src="{{asset('lib/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('lib/popper/popper.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.js')}}"></script>
<script>
    $(function() {
        if ($(window).scrollTop() > 50) {
            $('.header').css('background-color', 'white');
            $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
        } else {
            $('.header').css('background-color', 'transparent');
            $('.nav-item:not(:last-child) .nav-link').addClass('white-able');
        }
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 50) {
                $('.header').css('background-color', 'white');
                $('.nav-item:not(:last-child) .nav-link').removeClass('white-able');
            } else {
                $('.header').css('background-color', 'transparent');
                $('.nav-item:not(:last-child) .nav-link').addClass('white-able');
            }
        });
    });
</script>
@yield('script')
</html>