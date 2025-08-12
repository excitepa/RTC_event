@extends('web.layout.overall')
@section("page_title", "About")
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(/public/images/background/5.jpg);">
    <div class="auto-container">
        <h1>About Us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- About Section -->
<section class="about-section">
    <div class="anim-icons full-width">
        <span class="icon icon-circle-blue wow fadeIn"></span>
        <span class="icon icon-dots wow fadeInleft"></span>
        <span class="icon icon-circle-1 wow zoomIn"></span>
    </div>
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">ABOUT EVENT</span>
                        <h2>Building a Consumer-
                            Centric Route-to-Market</h2>
                        <div class="text">For many years, the Route to Market in West Africa
                            has remained fragmented and rigid, clinging to
                            traditional methods despite the evolving needs of the
                            modern consumer and graying out the partitions
                            between channels. However, with the emergence of
                            digitization, there's an opportunity to penetrate and
                            organize this chaotic landscape, paving the way for
                            easier navigation through the market.</div>
                    </div>
                    <ul class="list-style-one">
                        <li>Engaging keynote speakers and panel
                            discussions.</li>
                        <li>Panel discussions.</li>
                        <li>Product Presentation.</li>
                        <li>Interactive Question and Answers.</li>
                        <li>Social media engagement.</li>
                        <li>Networking Lunch and Exhibitors Showcase.</li>
                    </ul>
                    <div class="btn-box"><a href="{{ route('register') }}" class="theme-btn btn-style-two"><span class="btn-title">Register Now</span></a></div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image wow fadeIn"><img src="{{ asset('/public/images/resource/about.png') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Fun Fact Section -->
<section class="fun-fact-section style-two" style="background-image: url(/public/images/background/9.jpg);">
    <div class="auto-container">
        <div class="fact-counter">
            <div class="row clearfix">

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="count-box">
                        {{-- <span class="icon icon_headphones"></span> --}}
                        <span class="count-text">1000+</span>
                        <h4 class="counter-title">Attendees</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="count-box">
                        {{-- <span class="icon icon_ribbon_alt"></span> --}}
                        <span class="count-text">25+</span>
                        <h4 class="counter-title">Industry Expert Speakers and Panelists</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box">
                        {{-- <span class="icon icon_like"></span> --}}
                        <span class="count-text">20+</span>
                        <h4 class="counter-title">Exhibiting Companies</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        {{-- <span class="icon icon_book_alt"></span> --}}
                        <span class="count-text">21+</span>
                        <h4 class="counter-title">Networking Hours</h4>
                    </div>
                </div>

                {{-- <div class="counter-column col-lg-2 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <span class="icon icon_book_alt"></span>
                        <span class="count-text" data-speed="3000" data-stop="2">0</span>
                        <h4 class="counter-title">Days</h4>
                    </div>
                </div>

                <div class="counter-column col-lg-2 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <span class="icon icon_book_alt"></span>
                        <span class="count-text" data-speed="3000" data-stop="6">0</span>
                        <h4 class="counter-title">Panel Sessions</h4>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Features Section Two -->
{{-- <section class="features-section-two">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
            <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
        </div>

        <div class="title-block col-lg-4 col-md-12 col-sm-12 wow fadeInUp">
            <div class="inner-box">
                <div class="sec-title">
                    <span class="title">Sponsorship</span>
                    <h2>Ideal Sponsors</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Title Block -->
            
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box" style="height: 11rem">
                    <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                    <h4><a href="about.html">Fin/Pay Tech</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box" style="height: 11rem">
                    <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                    <h4><a href="about.html">CPG Tech providers</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box" style="height: 11rem">
                    <div class="icon-box"><span class="icon flaticon-search"></span></div>
                    <h4><a href="about.html">Logistics Provider</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box" style="height: 11rem">
                    <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                    <h4><a href="about.html">FMCG Companies</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box" style="height: 11rem">
                    <div class="icon-box"><span class="icon flaticon-success"></span></div>
                    <h4><a href="about.html">Distribution Businesses</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box" style="height: 11rem">
                    <div class="icon-box"><span class="icon flaticon-employee"></span></div>
                    <h4><a href="about.html">Financial Service</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End Features Section -->

<!-- Call to action -->
<section class="call-to-action" style="background-image: url(/public/images/background/11.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="text">The Maiden Edition of
                West African Route To Market
                Summit</div>
            <h2>Building a Consumer-
                Centric Route-to-Market:</h2>
            <h4 style="margin-top: -2.5rem">Harnessing Insights and Technology for success.</h4>
            <div class="btn-box">
                <a href="{{ route('sponsor.detail') }}" class="theme-btn btn-style-three"><span class="btn-title">Be a partner</span></a>
            </div>
        </div>
    </div>
</section>
<!--End Call to action -->

 <!-- Event Info Section -->
<section class="event-info-section">
    <div class="auto-container">
        <div class="row">
            <!-- Info Column -->
            <div class="info-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title style-two">
                        <span class="title">Reach us</span>
                        <h2>Direction for the <br>Event hall</h2>
                    </div>

                    <div class="event-info-tabs tabs-box">
                        <!--Tabs Box-->
                        <ul class="tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab1">Time</li>
                            <li class="tab-btn" data-tab="#tab2">Venue</li>
                            {{-- <li class="tab-btn" data-tab="#tab3">How to</li> --}}
                        </ul>

                        <div class="tabs-content">
                            <!--Tab-->
                            <div class="tab active-tab" id="tab1">
                                <h4><span class="icon far fa-calendar"></span> January 20, 2020</h4>
                                <div class="text">9.00 AM - 04.00 PM</div>
                                <ul class="info-list">
                                    <li><span class="icon icon_profile"></span> Dianne Ameter</li>
                                    <li><span class="icon icon_phone"></span> <a href="tel:+690-147-265-345">+123 456 7890</a></li>
                                    <li><span class="icon icon_mail"></span> <a href="mailto:sopport@Eventrox.com">sopport@Eventrox.com</a></li>
                                </ul>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab2">
                                <h4><span class="icon fa fa-map-marker-alt"></span>Pearl hotel, New york, USA</h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            </div>

                            <!--Tab-->
                            {{-- <div class="tab" id="tab3">
                                <h4><span class="icon fa fa-directions"></span> How to get there</h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="map-column col-lg-6 col-md-12 col-sm-12">
                <!--Map Outer-->
                <div class="map-outer">
                    <!--Map Canvas-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1599237324751!5m2!1sen!2s" height="435"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Event Info Section -->

<!-- App Section -->
{{-- <section class="app-section">
    <div class="auto-container">
        <div class="row">
            <!-- Content Box -->
            <div class="content-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">App Download</span>
                        <h2>Eventrox App</h2>
                    </div>
                    <div class="text-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class="link-box">
                        <a href="#"><img src="images/icons/app-store.png" alt=""></a>
                        <a href="#"><img src="images/icons/google-play.png" alt=""></a>
                    </div>
                </div>
            </div>

            <!-- Image Box -->
            <div class="image-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image wow fadeInRight"><img src="images/resource/app-mockup.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End App Section -->

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="anim-icons full-width">
        <span class="icon icon-shape-3 wow fadeIn"></span>
        <span class="icon icon-line-1 wow fadeIn"></span>
    </div>

    <div class="auto-container">
        <!--Subscribe Form-->
        <div class="subscribe-form wow fadeInUp" data-wow-delay="500ms">
            <div class="envelope-image"></div>
            <div class="form-inner">
                <div class="upper-box">
                    <div class="sec-title text-center">
                        <div class="icon-box"><span class="fa fa-envelope"></span></div>
                        <h2>Subscribe to our newsletter</h2>
                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm <br>tempor incididunt ut labore dolore magna.</div>
                    </div>
                </div>
                <form method="POST" action="{{ route('newsletter') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Your email" required>
                        <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End Newsletter Section -->
@endsection