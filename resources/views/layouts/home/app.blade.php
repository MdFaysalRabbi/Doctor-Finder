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
    <title>Enroll - Corporate Bootstrap Template | WebThemez</title>
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
    <header id="header" >
        <div class="header-content clearfix"> <a class="logo" href="{{route('/')}}">PINC</a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="#banner">Home</a></li>
{{--                    <li><a href="#services">Services</a></li>--}}
                    <li><a href="#content-3-10">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a style="margin-left: 0 !important;" href="#">Training</a></li>
                            <li><a style="margin-left: 0 !important;" href="#">Knowledge Share</a></li>
                            <li><a style="margin-left: 0 !important;" href="#">Experience Share</a></li>
                            <li><a style="margin-left: 0 !important;" href="#">Social Empower</a></li>
                        </ul>
                    </li>
                    <li><a href="#gallery">Executive Members</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#teams">Event News</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Members <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a style="margin-left: 0 !important;" href="#">Member List</a></li>
                            <li><a style="margin-left: 0 !important;" href="#">Membership Form</a></li>
                            <li><a style="margin-left: 0 !important;" href="#">Membership Online Form</a></li>
{{--                            <li><a style="margin-left: 0 !important;" href="#">Social Empower</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="#contact">We Salute</a></li>

                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
    <!-- banner text -->


    @yield('slide_b')
</section>
@yield('content')
<!-- header section -->
<!-- intro section -->
{{--<section id="intro" class="section intro">--}}
{{--    <div class="container">--}}
{{--        <div class="col-md-8 col-md-offset-2 text-center">--}}
{{--            <h3>Looking to grow your business?</h3>--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- intro section -->
<!-- services section -->
{{--<section id="services" class="services service-section">--}}
{{--    <div class="container">--}}
{{--        <div class="section-header">--}}
{{--            <h2 class="wow fadeInDown animated">Our Services</h2>--}}
{{--            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>--}}
{{--                <div class="services-content">--}}
{{--                    <h5>Designing</h5>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>--}}
{{--                <div class="services-content">--}}
{{--                    <h5>Research</h5>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-tools"></span>--}}
{{--                <div class="services-content">--}}
{{--                    <h5>Development</h5>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-genius"></span>--}}
{{--                <div class="services-content">--}}
{{--                    <h5>Financial</h5>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>--}}
{{--                <div class="services-content">--}}
{{--                    <h5>Consulting</h5>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-trophy"></span>--}}
{{--                <div class="services-content">--}}
{{--                    <h5>Quality</h5>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- services section -->
<!--About-->
@yield('about')


<!-- package section -->
@yield('mission')
{{--<!-- package section -->--}}

<!-- gallery section -->
@yield('gallery')
<!-- gallery section -->
<!-- our team section -->
@yield('team')
<!-- our team section -->
{{--<section id="pricing5" data-section="pricing-5" class="data-section">--}}
{{--    <div class="container">--}}
{{--        <div class="section-header">--}}
{{--            <h2 class="wow fadeInDown animated">Pricing</h2>--}}
{{--            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3 col-md-offset-1">--}}
{{--                <div class="table">--}}
{{--                    <h3 class="editContent">Basic</h3>--}}
{{--                    <h2 class="editContent">$13</h2>--}}
{{--                    <p class="editContent">Per Month</p>--}}
{{--                    <ul class="table-content">--}}
{{--                        <li class="editContent"><i class="fa fa-hdd-o"></i> 10 GB Storage</li>--}}
{{--                        <li class="editContent"><i class="fa fa-pie-chart"></i> 500 GB Bandwidth</li>--}}
{{--                        <li class="editContent"><i class="fa fa-envelope-o"></i> Email Support</li>--}}
{{--                        <li class="editContent"><i class="fa fa-cogs"></i> 24x7 Support</li>--}}
{{--                    </ul>--}}

{{--                    <div class="text-center text-uppercase">--}}
{{--                        <a href="#" class="btn btn-default-green-transparent-tiny editContent">Signup Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-4">--}}
{{--                <div class="table long-table">--}}
{{--                    <h3 class="editContent">Premium</h3>--}}
{{--                    <h2 class="editContent">$23</h2>--}}
{{--                    <p class="editContent">Per Month</p>--}}
{{--                    <ul class="table-content">--}}
{{--                        <li class="editContent"><i class="fa fa-hdd-o"></i> 10 GB Storage</li>--}}
{{--                        <li class="editContent"><i class="fa fa-pie-chart"></i> 500 GB Bandwidth</li>--}}
{{--                        <li class="editContent"><i class="fa fa-envelope-o"></i> Email Support</li>--}}
{{--                        <li class="editContent"><i class="fa fa-cogs"></i> 24x7 Support</li>--}}
{{--                    </ul>--}}

{{--                    <div class="text-center text-uppercase">--}}
{{--                        <a href="#" class="btn btn-default-blue-tiny editContent">Signup Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-md-3">--}}
{{--                <div class="table">--}}
{{--                    <h3 class="editContent">Developer</h3>--}}
{{--                    <h2 class="editContent">$33</h2>--}}
{{--                    <p class="editContent">Per Month</p>--}}
{{--                    <ul class="table-content">--}}
{{--                        <li class="editContent"><i class="fa fa-hdd-o"></i> 10 GB Storage</li>--}}
{{--                        <li class="editContent"><i class="fa fa-pie-chart"></i> 500 GB Bandwidth</li>--}}
{{--                        <li class="editContent"><i class="fa fa-envelope-o"></i> Email Support</li>--}}
{{--                        <li class="editContent"><i class="fa fa-cogs"></i> 24x7 Support</li>--}}
{{--                    </ul>--}}

{{--                    <div class="text-center text-uppercase">--}}
{{--                        <a href="#" class="btn btn-default-green-transparent-tiny editContent">Signup Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Testimonials section -->
{{--<section id="testimonials" class="section testimonials no-padding">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row no-gutter">--}}
{{--            <div class="flexslider">--}}
{{--                <ul class="slides">--}}
{{--                    <li>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <blockquote>--}}
{{--                                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa--}}
{{--                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>--}}
{{--                                <p>Chris Mentsl</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <blockquote>--}}
{{--                                <h1>"Praesent eget risus vitae massa Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa--}}
{{--                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>--}}
{{--                                <p>Kristean velnly</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <blockquote>--}}
{{--                                <h1>"Consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa--}}
{{--                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>--}}
{{--                                <p>Markus Denny</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <blockquote>--}}
{{--                                <h1>"Vitae massa semper aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa--}}
{{--                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>--}}
{{--                                <p>John Doe</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Testimonials section -->

<!-- contact section -->
{{--<section id="contact" class="section">--}}
{{--    <div class="container">--}}
{{--        <div class="section-header">--}}
{{--            <h2 class="wow fadeInDown animated">Contact Us</h2>--}}
{{--            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 col-md-offset-2 conForm">--}}
{{--                <div id="message"></div>--}}
{{--                <form method="post" action="https://webthemez.com/demo/enroll-html-corporate-website-template/php/contact.php" name="cform" id="cform">--}}
{{--                    <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >--}}
{{--                    <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >--}}
{{--                    <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>--}}
{{--                    <input type="submit" id="submit" name="send" class="submitBnt" value="Send">--}}
{{--                    <div id="simple-msg"></div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- contact section -->
<!-- Footer section -->
<footer class="footer">
    <div class="container-fluid">
        <div id="map-row" class="row">
            <div class="col-sm-8">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=15+Springfield+Way,+Hythe,+CT21+5SH&amp;aq=t&amp;sll=52.8382,-2.327815&amp;sspn=8.047465,13.666992&amp;ie=UTF8&amp;hq=&amp;hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.077429,1.121722&amp;output=embed"></iframe>

            </div>
            <div class="col-sm-4">
                <h2 style="margin-top:0;color:#fff;">Contact us</h2>
                <address style="color:#fff;">
                    <strong>Company name</strong><br>
                    1234 Street Dr.<br>
                    Vancouver, BC<br>
                    Canada<br>
                    V6G 1G9<br>
                    <abbr title="Phone">Tel:</abbr> (604) 555-4321
                </address>
                © 2018 Company Name. Template by <a target="_blank" href="http://webthemez.com/interior-design/" title="Bootstrap Themes and HTML Templates">WebThemez.com</a>
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
