<!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="utf-8">
<title>{{ env('APP_NAME') }} - Resources</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
<link rel="icon" href="images/logo1.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
 	<!-- Header span -->

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header header-style-two">
        <div class="main-box">
            <div class="auto-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('index') }}"><img src="images/logo1.png" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('index') }}">Home</a>
                                <li class="dropdown"><a href="{{ route('about') }}">About</a>
                                    <ul>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('sponsor.detail') }}">Sponsor Package</a></li>
                                        {{-- <li><a href="{{ route('faq') }}">FAQ's</a></li> --}}
                                        
                                    </ul>
                                </li>
                                <li><a href="{{ route('speakers') }}">Speakers</a></li>
                                <li><a href="{{ route('schedule') }}">Schedule</a></li>
                                <li class="dropdown"><a href="#">Event Resources</a>
                                    <ul>
                                        <li><a href="{{ route('keynote.resources') }}">Keynote Resources</a></li>
                                        <li><a href="{{ route('panel.resources') }}">Panel Resources</a></li>
                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                        {{-- <li><a href="{{ route('sponsor.detail') }}">Sponsor Package</a></li> --}}
                                        {{-- <li><a href="{{ route('faq') }}">FAQ's</a></li> --}}
                                        
                                    </ul>
                                </li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer box -->
                    <div class="outer-box">
                        <!--Search Box-->
                        {{-- <div class="search-box-btn"><span class="flaticon-search"></span></div> --}}

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="{{ route('sponsor.detail') }}" class="theme-btn btn-style-three"><span class="btn-title">Be a Sponsor</span></a>
                        </div>

                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn btn-style-two"><span class="btn-title">Register</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="images/logo1.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

    @include('web.includes.errors')

    <!--Page Title-->
    {{-- <section class="page-title" style="background-image:url(images/background/bg1.png);">
        <div class="auto-container">
            <h1>Register</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Register</li>
            </ul>
        </div>
    </section> --}}
    <!--End Page Title-->

    <!--Error Section-->
    <section class="error-section" style="padding-top: 50px;">
        {{-- <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div> --}}
        <div class="row justify-content-center">
            <div class="result-container pt-3">
                <img src="{{ asset('/images/check.png') }}" alt="" style="height: 200px; width: 200px;" class="img img-fluid">
                {{-- <img-fluid></img-fluid> --}}
            </div>
        </div>

        <div class="auto-container">
            <h2>Thank You for Your Interest!</h2>
            <div class="text" style="font-size: 20px;">
                The keynote presentations from the <strong>Building a Consumer-Centric Route-to-Market</strong> event have been sent to the email address you provided.
            </div>
            <div class="text" style="font-size: 20px;">
                Please check your inbox (and your spam folder just in case) for the download link. We hope you find the insights valuable and inspiring. <br> If you have any questions or need further assistance, feel free to reach out.
            </div>
            {{-- <div class="text" style="font-size: 20px;">
                If you have any questions or need further assistance, feel free to reach out.
            </div> --}}
            <a href="{{ route('index') }}" class="theme-btn btn-style-three">
                <span class="btn-title">Return to Home</span>
            </a>
            <a href="{{ route('faq') }}" class="theme-btn btn-style-two">
                <span class="btn-title">Contact Support</span>
            </a>
        </div>
    </section>
    <!--Error Section-->

    <!-- Map Section -->
    {{-- <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1599237324751!5m2!1sen!2s" height="540"></iframe>
            </div>
        </div>
    </section> --}}
    <!-- End Map Section -->

    <!-- Main Footer -->
    <footer class="main-footer style-two">
        <div class="auto-container">
            <!-- Footer Content -->
            <div class="footer-content">
                <div class="footer-logo"><a href="{{ route('index') }}"><img src="images/logo_blue_inverse.png" alt=""></a></div>
                <ul class="footer-nav">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('schedule') }}">Schedule</a></li>
                    <li><a href="{{ route('speakers') }}">Speakers</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
                <div class="copyright-text">© Copyright 2025 All Rights Reserved by <a href="index.html">Expert-Themes</a></div>
                <ul class="social-icon-one">
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Demo</h6>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now</a>
</div><!-- End Color Switcher -->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Seo</a></li>
                <li><a href="#">Bussiness</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Digital</a></li>
                <li><a href="#">Conferance</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>

<script>
    document.querySelectorAll('.alert').forEach(alert => {
    let delay = alert.dataset.delay;
    let timer = alert.dataset.timer;
    let animateExit = alert.dataset.animateExit;

    if (timer > 0) {
        setTimeout(() => {
            alert.classList.remove('show');
            alert.classList.add(animateExit);
            setTimeout(() => {
                alert.remove();
            }, delay);
        }, timer);
    }
});

</body>
</html>
