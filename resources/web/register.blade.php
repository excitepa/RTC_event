<!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="utf-8">
<title>{{ env('APP_NAME') }} - Register</title>
<!-- Stylesheets -->
<link href="/public/css/bootstrap.css" rel="stylesheet">
<link href="/public/css/style.css" rel="stylesheet">
<link href="/public/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="/public/css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="/public/images/logo1.png" type="image/x-icon">
<link rel="icon" href="/public/images/logo1.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
 	<!-- Header span -->

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header header-style-two">
        <div class="main-box">
            <div class="auto-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('/public/images/logo1.png') }}" alt="" title=""></a></div>
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
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('/public/images/logo1.png') }}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

    @include('web.includes.errors')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(/public/images/background/5.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            {{-- <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <p><strong>32, Breaking Street,</strong></p>
                                <p>2nd cros, Newyork ,USA 10002</p>
                            </li> --}}

                            <li>
                                <span class="icon fa fa-phone-volume"></span>
                                <p><strong>Call Us</strong></p>
                                <p>+2348058743727
                                </p>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p><a href="mailto:support@example.com">events@rtmwestafrica.com
                                </a></p>
                            </li>

                            {{-- <li>
                                <span class="icon fa fa-clock"></span>
                                <p><strong>Opening Time</strong></p>
                                <p>Mon - Sat: 09.00am to 18.00pm</p>
                            </li> --}}
                        </ul>

                        <ul class="social-icon-two social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Get in Touch</h2>
                            </div>
                            <form method="POST" action="{{ route('attendee') }}" id="contact-form" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="full_name" placeholder="Full Name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Work Email" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="company" placeholder="Organization" required="">
                                    </div>

                                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <select class="form-select" name="industry" aria-label="Default select example" required="">
                                            <option selected>Choose your industry</option>
                                            <option value="Tech & Payment Service Providers">Tech & Payment Service Providers
                                            </option>
                                            <option value="FMCG Companies">FMCG Companies
                                            </option>
                                            <option value="Policy Makers/Regulatory ">Policy Makers/Regulatory 
                                            </option>
                                            <option value="Mobility & Fleet Industry ">Mobility & Fleet Industry 
                                            </option>
                                            <option value="Banking, financial services (BFS) ">Banking, financial services (BFS) 
                                            </option>
                                            <option value="Manufacturing Industries ">Manufacturing Industries 
                                            </option>
                                            <option value="Distribution Companies ">Distribution Companies 
                                            </option>
                                            <option value="Marketing Agencies ">Marketing Agencies 
                                            </option>
                                            <option value="Logistics Companies ">Logistics Companies 
                                            </option>
                                          </select>
                                    </div> --}}

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <select class="form-select" name="industry" aria-label="Select your industry" required>
                                            <option value="" disabled selected>Choose your industry</option>
                                            <option value="Tech & Payment Service Providers">Tech & Payment Service Providers</option>
                                            <option value="FMCG Companies">FMCG Companies</option>
                                            <option value="Policy Makers/Regulatory">Policy Makers/Regulatory</option>
                                            <option value="Mobility & Fleet Industry">Mobility & Fleet Industry</option>
                                            <option value="Banking, financial services (BFS)">Banking, financial services (BFS)</option>
                                            <option value="Manufacturing Industries">Manufacturing Industries</option>
                                            <option value="Distribution Companies">Distribution Companies</option>
                                            <option value="Marketing Agencies">Marketing Agencies</option>
                                            <option value="Logistics Companies">Logistics Companies</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="job_title" placeholder="Job Title/Role" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="country" placeholder="Country" required="">
                                    </div>

                                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="attendance-days">What day(s) will you be attending</label><br>
                                        <input type="checkbox" name="attendance_days[]" value="Day 1"> Day 1
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="attendance-days"></label><br>
                                        <input type="checkbox" name="attendance_days[]" value="Day 2"> Day 2
                                    </div> --}}

                                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="attendance-days">What day(s) will you be attending</label><br>
                                        <input type="checkbox" name="attendance_days[]" value="Day 1">
                                        <label for="attendance-days">Day 1</label>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="attendance-days"></label><br>
                                        <input type="checkbox" name="attendance_days[]" value="Day 2">
                                        <label for="attendance-days">Day 2</label>
                                    </div> --}}
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <div class="form-group">
                                            <label for="attendance-days">What day(s) will you be attending</label><br>
                                            <input type="checkbox" name="attendance_days[]" value="Day 1">
                                            <label for="attendance-days">Day 1</label>

                                            <label for="attendance-days"></label><br>
                                            <input type="checkbox" name="attendance_days[]" value="Day 2">
                                            <label for="attendance-days">Day 2</label>
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <select class="form-select" name="about_webinar" aria-label="Default select example" required="">
                                            <option selected>How did you hear about the event</option>
                                            <option value="Social Media(Linkedln, Instagram, Facebook)">Social Media(Linkedln, Instagram, Facebook)
                                            </option>
                                            <option value="Colleague">Colleague
                                            </option>
                                            <option value="Printed Media">Printed Media
                                            </option>
                                            <option value="Email Invitation">Email Invitation
                                            </option>
                                            <option value="Online Search">Online Search
                                            </option>
                                            <option value="Others">Others
                                            </option>
                                          </select>
                                    </div> --}}

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <select class="form-select" name="about_webinar" aria-label="How did you hear about the event" required>
                                            <option value="" disabled selected>How did you hear about the event</option>
                                            <option value="Social Media(Linkedln, Instagram, Facebook)">Social Media (Linkedln, Instagram, Facebook)</option>
                                            <option value="Colleague">Colleague</option>
                                            <option value="Printed Media">Print Media</option>
                                            <option value="Email Invitation">Email Invitation</option>
                                            <option value="Online Search">Online Search</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-three" type="submit"><span class="btn-title">Submit Now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

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
                <div class="footer-logo"><a href="{{ route('index') }}"><img src="/public/images/logo_blue_inverse.png" alt=""></a></div>
                <ul class="footer-nav">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('schedule') }}">Schedule</a></li>
                    <li><a href="{{ route('speakers') }}">Speakers</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
                <div class="copyright-text">© Copyright 2024 All Rights Reserved by <a href="index.html">Expert-Themes</a></div>
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
<script src="/public/js/jquery.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery-ui.js"></script>
<script src="/public/js/jquery.fancybox.js"></script>
<script src="/public/js/appear.js"></script>
<script src="/public/js/owl.js"></script>
<script src="/public/js/wow.js"></script>
<script src="/public/js/validate.js"></script>
<script src="/public/js/script.js"></script>
<!-- Color Setting -->
<script src="/public/js/color-settings.js"></script>

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
