<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->


<!-- Mirrored from webthemez.com/demo/enroll-html-corporate-website-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 05:24:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors Finder</title>
    <link rel="stylesheet" href="{{asset('homes/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/font-icon.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/font-awesome.min.css')}}">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
    <header id="header" style="padding-top: 20px; margin-top: -20px;">
        <div class="header-content clearfix"> <a class="" href="{{route('index')}}"><img style="width: 145px; margin-top: -15px;" src="{{asset('image/logo.png')}}"></a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('properties')}}">Doctor</a></li>
                    <li><a href="{{route('necessity')}}">Patient</a></li>
                    <li><a href="{{route('area')}}">Area</a></li>
                    <li><a href="{{route('about')}}">About</a></li>

                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
    <!-- banner text -->
    @yield('slide_b')
</section>

@yield('content')
@yield('about')


<!-- package section -->
{{--@yield('mission')--}}
{{--<!-- package section -->--}}

<!-- gallery section -->
{{--@yield('gallery')--}}
<!-- gallery section -->
<!-- our team section -->
{{--@yield('team')--}}
<!-- header section -->




<footer class="footer">
    <div class="container-fluid">
        <div id="map-row" class="row">
            <div class="col-sm-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.84008101623!2d90.37768181536278!3d23.753081494589946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ae70ccad3d%3A0xc184d7b62af05d49!2sSukrabad%20Jame%20Masjid!5e0!3m2!1sen!2sbd!4v1611917860743!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-sm-4">
                <h2 style="margin-top:0;color:#fff;">Contact us</h2>
                <address style="color:#fff;">
                    <strong>Doctors Finder</strong><br>
                    Sukrabaad <br> Dhanmondi, Dhaka.<br>
                    <abbr title="Phone">Tel:</abbr> 0115646566
                </address>
                All Rights Reserved © {{date('Y')}} Doctors Finder. <br> Designed & Developed by <a target="_blank" href="#" title="Bootstrap Themes and HTML Templates">Faysal Rabbi</a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section -->
<!-- JS FILES -->
<script src="{{asset('homes/js/jquery.min.js')}}"></script>
<script src="{{asset('homes/js/bootstrap.min.js')}}"></script>
<script src="{{asset('homes/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('homes/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('homes/js/modernizr.js')}}"></script>
<script src="{{asset('homes/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('homes/js/jquery.contact.js')}}"></script>
<script type="text/javascript" src="{{asset('homes/js/jquery.devrama.slider.min-0.9.4.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider-banner').DrSlider({
            'transition': 'fade',
            showNavigation: false,
            progressColor: "#9e015e"
        });
    });
</script>
</body>

<!-- Mirrored from webthemez.com/demo/enroll-html-corporate-website-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 05:25:04 GMT -->
</html>
