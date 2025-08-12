@extends('web.layout.overall')
@section("page_title", "Home")
@section('content')
<!-- Banner Conference -->
<section>
    <div class="overlay_bg"></div>
    <video style="width: 100%; height: 85vh; object-fit:cover; position: absolute; opacity: 0.80;" autoplay="" loop="" muted="" src="{{ asset('/public/images/background/video.mp4') }}"></video>
    {{-- <source src="{{ asset('/public/images/background/Video 2.mp4') }}" type="video/mp4"> --}}
</section>
<section class="banner-conference" style="background-color: rgba(25, 24, 77, 0.8); height: 85vh">

    <div class="auto-container">
        <div class="content-box" style="margin-top: -4rem">
            {{-- <span class="title">January 20, 2020</span> --}}
            <h2 style="color: white"> Building a Consumer- <br>Centric Route-to-Market</h2>
            <h4 style="margin-top: -3rem; color: #F5A01C;">Harnessing Insights and Technology for success.</h4>
            {{-- <div class="time-counter"><div class="time-countdown clearfix" data-countdown="10/11/2021"></div></div>
            <div class="btn-box"><a href="{{ route('register') }}" class="theme-btn btn-style-two"><span class="btn-title">Register</span></a></div> --}}
        </div>

        <div class="content-box box-content" style="margin-top: 8rem">
            <div class="time-counter"><div class="time-countdown clearfix" data-countdown="06/19/2025"></div></div>
            <div class="scrollBtn">
                <a href="#more-about" class="jj-scroll" style="float: right"> <img src='{{ asset('images/scrolldown.png') }}'
                        alt=""> </a>
            </div>
            <div style="display: flex; gap: 1rem; margin-top: 2rem;" class="banner-buttons">
                <div class="btn-box">
                    <a href="{{ route('register') }}" class="theme-btn btn-style-two">
                        <span class="btn-title">Register to Attend</span>
                    </a>
                </div>
                <div class="btn-box">
                    <a href="{{ route('sponsor.detail') }}" class="theme-btn btn-style-three">
                        <span class="btn-title">Partner with Us</span>
                    </a>
                </div>
            </div>
            {{-- <div class="btn-box"><a href="{{ route('register') }}" class="theme-btn btn-style-two"><span class="btn-title">Register to Attend</span></a></div> --}}
            {{-- <div class="btn-box"><a href="{{ route('sponsor.detail') }}" class="theme-btn btn-style-three"><span class="btn-title">Partner with Us</span></a></div> --}}
        </div>

        
    </div>
</section>
<!--End Banner Conference -->

<!-- Fun Fact Section -->
<section class="fun-fact-section style-two" style="background-image: url(images/background/9.jpg);">
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

<!-- Features Section -->
<section class="features-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            {{-- <span class="title">About Summit</span> --}}
            <h2>What to Expect</h2>
        </div>
        {{-- <div class="anim-icons">
            <span class="icon icon-shape-3 wow fadeIn"></span>
            <span class="icon icon-line-1 wow fadeIn"></span>
        </div> --}}

        <div class="row">
            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box" style="height: 24rem">
                    <div class="icon-box"><img src="{{ asset('/public/images/icons/engaging.png') }}" alt=""></div>
                    <h4><a href="">Engaging keynote speakers and panel discussions</a></h4>
                    <div class="text">Hear from leading experts and practitioners sharing insights, case studies, and best practices.</div>
                    {{-- <div class="link-box"><a href="" class="theme-btn">Read More</a></div> --}}
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box" style="height: 24rem">
                    <div class="icon-box"><img src="{{ asset('/public/images/icons/panel.png') }}" alt=""></div>
                    <h4><a href="">Panel discussions</a></h4>
                    <div class="text">A panel of experts from different sectors (FMCGs, tech companies, distributors) to discuss relevant subjects.</div>
                    {{-- <div class="link-box"><a href="" class="theme-btn">Read More</a></div> --}}
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box" style="height: 24rem">
                    <div class="icon-box"><img src="{{ asset('/public/images/icons/product.png') }}" alt=""></div>
                    <h4><a href="">Product Presentation</a></h4>
                    <div class="text">Get a firsthand look at an innovative solution 
                        that's making waves in the industry, plus the chance to learn from experts and network with other professionals.</div>
                    {{-- <div class="link-box"><a href="" class="theme-btn">Read More</a></div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box" style="height: 24rem">
                    <div class="icon-box"><<img src="{{ asset('/public/images/icons/interactive.png') }}" alt=""></div>
                    <h4><a href="">Interactive Question and Answers</a></h4>
                    <div class="text">Deep dive into specific topics & collaborate on solutions with like-minded peers. Feature industry experts to provide in-depth data and insights.</div>
                    {{-- <div class="link-box"><a href="" class="theme-btn">Read More</a></div> --}}
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box" style="height: 24rem">
                    <div class="icon-box"><img src="{{ asset('/public/images/icons/social.png') }}" alt=""></div>
                    <h4><a href="">Social media engagement</a></h4>
                    <div class="text">Online interaction using an event hashtag and live-tweeting key sessions.</div>
                    {{-- <div class="link-box"><a href="" class="theme-btn">Read More</a></div> --}}
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box" style="height: 24rem">
                    <div class="icon-box"><img src="{{ asset('/public/images/icons/networking.png') }}" alt=""></div>
                    <h4><a href="">Networking Lunch and Exhibitors Showcase</a></h4>
                    <div class="text">Opportunities for attendees to connect, network, and learn about solutions from relevant vendors and service providers.</div>
                    {{-- <div class="link-box"><a href="" class="theme-btn">Read More</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Features Section -->


<!-- Speakers Section -->
{{-- <section class="speakers-section-two">
    <div class="anim-icons">
        <span class="icon icon-circle-4 wow zoomIn"></span>
        <span class="icon icon-circle-3 wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Speakers</span>
            <h2>Todays Performers</h2>
        </div>

        <div class="row">

            <!-- Speaker Block -->
            <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="info-box">
                        <h4 class="name"><a href="speakers-detail.html">Dale Marke</a></h4>
                        <span class="designation">Event Manager</span>
                    </div>
                    <div class="image-box">
                        <figure class="image"><a href="speakers-detail.html"><img src="/public/images/resource/speaker-1.jpg" alt=""></a></figure>
                    </div>
                    <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Speaker Block -->
            <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="info-box">
                        <h4 class="name"><a href="speakers-detail.html">Natisha Decoux</a></h4>
                        <span class="designation">Event Manager</span>
                    </div>
                    <div class="image-box">
                        <figure class="image"><a href="speakers-detail.html"><img src="/public/images/resource/speaker-2.jpg" alt=""></a></figure>
                    </div>
                    <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Speaker Block -->
            <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="info-box">
                        <h4 class="name"><a href="speakers-detail.html">Adolfo Plahs</a></h4>
                        <span class="designation">Event Manager</span>
                    </div>
                    <div class="image-box">
                        <figure class="image"><a href="speakers-detail.html"><img src="/public/images/resource/speaker-4.jpg" alt=""></a></figure>
                    </div>
                    <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Speaker Block -->
            <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="info-box">
                        <h4 class="name"><a href="speakers-detail.html">Mitchell Hegg</a></h4>
                        <span class="designation">Event Manager</span>
                    </div>
                    <div class="image-box">
                        <figure class="image"><a href="speakers-detail.html"><img src="/public/images/resource/speaker-3.jpg" alt=""></a></figure>
                    </div>
                    <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Speakers Section -->

<!-- Schedule Section Style two -->
<section class="schedule-section style-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">About Summit</span>
            <h2>Schedule Plan</h2>
        </div>

        <div class="schedule-tabs style-two tabs-box">
            <div class="btns-box">
                <!--Tabs Box-->
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab-1">
                        <span class="day">Day 01</span>
                        <span class="date">19</span>
                        <span class="month">June</span> 2025
                    </li>

                    <li class="tab-btn" data-tab="#tab-2">
                        <span class="day">Day 02</span>
                        <span class="date">20</span>
                        <span class="month">June</span> 2025
                    </li>

                    {{-- <li class="tab-btn" data-tab="#tab-3">
                        <span class="day">Day 03</span>
                        <span class="date">03</span>
                        <span class="month">Jan</span> 2020
                    </li>

                    <li class="tab-btn" data-tab="#tab-4">
                        <span class="day">Day 04</span>
                        <span class="date">04</span>
                        <span class="month">Jan</span> 2020
                    </li> --}}
                </ul>
            </div>

            <div class="tabs-content">

                <!--Tab-->
                <div class="tab active-tab" id="tab-1">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">9.00 AM - 10.00 AM</div>
                                    <h5 class="name">Panel Session 1 : Consumer Behaviour</h5>
                                    {{-- <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-1.jpg" alt=""></figure>
                                        <h5 class="name">Consumer Behaviour</h5>
                                        <span class="designation">Panel Session 1</span>
                                    </div> --}}
                                    <h4><a href="{{ route('event.detail1') }}">Consumer-Centric Marketing Strategies</a></h4>
                                    <div class="text">Examine current consumer behaviors, preferences, and trends that influence purchasing decisions in the region.</div>
                                    {{-- <div class="btn-box">
                                        <a href="{{ route('event.detail1') }}" class="theme-btn">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                         <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">10.00 AM - 11.00 AM</div>
                                    <h5 class="name">Panel Session 5 : Macro Economics</h5>
                                    {{-- <div class="speaker-info"> --}}
                                        {{-- <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure> --}}
                                        {{-- <span class="designation">Panel Session 5 : Macro Economics</span> --}}
                                    {{-- </div> --}}
                                    <h4><a href="{{ route('event.detail2') }}">Economic Factors Impacting Consumer Markets</a></h4>
                                    <div class="text">Investigate macroeconomic trends such as inflation, currency fluctuations, and economic growth that affect consumer spending patterns.</div>
                                    {{-- <div class="btn-box">
                                        <a href="{{ route('event.detail2') }}" class="theme-btn">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">10.00 AM - 11.00 AM</div>
                                    <h5 class="name">Panel Session 2 : Technology</h5>
                                    {{-- <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Technology</h5>
                                        <span class="designation">Panel Session 2</span>
                                    </div> --}}
                                    <h4><a href="{{ route('event.detail3') }}">Leveraging Technology for Market Access</a></h4>
                                    <div class="text">Discuss the role of digital tools and platforms in enhancing market access and consumer engagement, including e-commerce and mobile technology.</div>
                                    {{-- <div class="btn-box">
                                        <a href="{{ route('event.detail2') }}" class="theme-btn">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-2">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">11.00 AM - 12.00 AM</div>
                                    <h5 class="name">Panel Session 4 : Marketing</h5>
                                    {{-- <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-1.jpg" alt=""></figure>
                                        <h5 class="name">Marketing</h5>
                                        <span class="designation">Panel Session 4</span>
                                    </div> --}}
                                    <h4><a href="{{ route('event.detail4') }}">Understanding Consumer Trends in West Africa</a></h4>
                                    <div class="text">Examine current consumer behaviors, preferences, and trends that influence purchasing decisions in the region.</div>
                                    {{-- <div class="btn-box">
                                        <a href="{{ route('event.detail3') }}" class="theme-btn">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                         <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">12.00 AM - 01.00 PM</div>
                                    <h5 class="name">Panel Session 3 : Analytics</h5>
                                    {{-- <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Analytics</h5>
                                        <span class="designation">Panel Session 3</span>
                                    </div> --}}
                                    <h4><a href="{{ route('event.detail5') }}">Data-Driven Decision Making</a></h4>
                                    <div class="text">Create high-performance teams to drive success in route-to-market strategies and maximize impact.</div>
                                    {{-- <div class="btn-box">
                                        <a href="{{ route('event.detail4') }}" class="theme-btn">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">12.00 AM - 01.00 PM</div>
                                    <h5 class="name">Panel Session 6 : Sales</h5>
                                    {{-- <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Sales</h5>
                                        <span class="designation">Panel Session 6</span>
                                    </div> --}}
                                    <h4><a href="{{ route('event.detail6') }}">Building Effective Sales Strategies</a></h4>
                                    <div class="text">Discuss innovative sales techniques and strategies that align with consumer needs and drive revenue growth in a competitive market.                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="{{ route('event.detail4') }}" class="theme-btn">Read More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!--Tab-->
                <div class="tab" id="tab-3">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">9.00 AM - 10.00 AM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-1.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">10.00 AM - 11.00 AM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">11.00 AM - 12.00 AM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-1.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">12.00 AM - 01.00 PM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-4">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">9.00 AM - 10.00 AM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-1.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">10.00 AM - 11.00 AM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">11.00 AM - 12.00 AM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-1.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">12.00 AM - 01.00 PM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="/public/images/resource/thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--End schedule Section -->

<!-- Pricing Section -->
{{-- <section class="pricing-section-two">
    <div class="anim-icons">
        <span class="icon icon-line-1 wow zoomIn"></span>
        <span class="icon icon-circle-1 wow zoomIn"></span>
        <span class="icon icon-dots wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Get Ticket</span>
            <h2>Choose a Ticket</h2>
        </div>

        <div class="outer-box">
            <div class="row">
                <!-- Pricing Block -->
                <div class="pricing-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="title"><span class="icon flaticon-movie-tickets"></span> Day Pass</div>
                        <div class="price-box">
                            <h4 class="price">$35.99</h4>
                        </div>
                        <ul class="features">
                            <li class="true">Conference Tickets</li>
                            <li class="true">Free Lunch And Coffee</li>
                            <li class="true">Certificate</li>
                            <li class="true">Easy Access</li>
                            <li class="true">Free Contacts</li>
                        </ul>
                        <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="title"><span class="icon flaticon-movie-tickets"></span> Full Pass</div>
                        <div class="price-box">
                            <h4 class="price">$99.99</h4>
                        </div>
                        <ul class="features">
                            <li class="true">Conference Tickets</li>
                            <li class="true">Free Lunch And Coffee</li>
                            <li class="true">Certificate</li>
                            <li class="true">Easy Access</li>
                            <li class="true">Free Contacts</li>
                        </ul>
                        <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="title"><span class="icon flaticon-movie-tickets"></span> Group Pass</div>
                        <div class="price-box">
                            <h4 class="price">$199.99</h4>
                        </div>
                        <ul class="features">
                            <li class="true">Conference Tickets</li>
                            <li class="true">Free Lunch And Coffee</li>
                            <li class="true">Certificate</li>
                            <li class="true">Easy Access</li>
                            <li class="true">Free Contacts</li>
                        </ul>
                        <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End Pricing Section -->


<section class="speakers-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                {{-- <span class="title">Speakers</span> --}}
                <h2>OUR PANELISTS</h2>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/feyiolubodun/"><img src="/public/images/background/feyi1.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/feyiolubodun/">Feyi Olubodun</a></h4>
                            <span class="designation">CEO, Managing Partner</span>
                            <span class="designation">Open Squares Africa</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/feyiolubodun/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/tola-bamigbaiye-elatuyi/"><img src="/public/images/background/tola1.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/tola-bamigbaiye-elatuyi/">Tola Bamigbaiye-Elatuyi</a></h4>
                            <span class="designation">Chair, Brand Advisory Board</span>
                            <span class="designation">Meristem Nigeria</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/tola-bamigbaiye-elatuyi/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/victorndukauba/"><img src="/public/images/background/victor1.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/victorndukauba/">Victor Ndukauba</a></h4>
                            <span class="designation">Deputy Managing Director</span>
                            <span class="designation">Afrinvest West Africa</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/victorndukauba/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/anthonilious-okojie-91654a13/"><img src="/public/images/background/antholinius.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/anthonilious-okojie-91654a13/">Anthonilious Okojie</a></h4>
                            <span class="designation">Country Head, Sales</span>
                            <span class="designation">Lafarge Africa PLC</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/anthonilious-okojie-91654a13/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/nwodoemeka/"><img src="/public/images/background/emeka1.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/nwodoemeka/">Emeka Nwodo</a></h4>
                            <span class="designation">Category Manager, Gum & Jellies</span>
                            <span class="designation">Perfetti Van Melle</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/nwodoemeka/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/bukola-akinpelu-%F0%9F%8F%A0-9707162a/"><img src="/public/images/background/bukola1.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/bukola-akinpelu-%F0%9F%8F%A0-9707162a/">Bukola Akinpelu</a></h4>
                            <span class="designation">Consumer & Market Insight Manager</span>
                            <span class="designation">Unilever</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/bukola-akinpelu-%F0%9F%8F%A0-9707162a/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/adesegun-orafidiya-mba-fbcs-3348049/"><img src="/public/images/background/adesegun1.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/adesegun-orafidiya-mba-fbcs-3348049/">Adesegun Orafidiya</a></h4>
                            <span class="designation">Head of Information and Technology</span>
                            <span class="designation">British American Tobacco (BAT)</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/adesegun-orafidiya-mba-fbcs-3348049/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/anselem-ikeotuonye-66212049/"><img src="/public/images/background/anslem.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/anselem-ikeotuonye-66212049/">Anselem Ikeotuonye</a></h4>
                            <span class="designation">Commercial Director</span>
                            <span class="designation">Nigerbev Limited</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/anselem-ikeotuonye-66212049/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/ayobamiaiyedogbon/"><img src="/public/images/background/ayobami.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/ayobamiaiyedogbon/">Ayobami Aiyedogbon</a></h4>
                            <span class="designation">Commercial Director</span>
                            <span class="designation">Danone</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/ayobamiaiyedogbon/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/franklinozekhome/"><img src="/public/images/background/franklin.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/franklinozekhome/">Franklin Ozekhome</a></h4>
                            <span class="designation">Pop Culture Strategist</span>
                            <span class="designation">Maskvrade</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/franklinozekhome/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/segun-ogunleye/"><img src="/public/images/background/segun.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/segun-ogunleye/">Segun Ogunleye</a></h4>
                            <span class="designation">Head of Marketing (Africa Partner Markets)</span>
                            <span class="designation">Diageo</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/segun-ogunleye/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/prahlad-gangadharan-12818014/"><img src="/public/images/background/prahlad.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/prahlad-gangadharan-12818014/">Prahlad Gangadharan</a></h4>
                            <span class="designation">CCO</span>
                            <span class="designation">OmniRetail</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/prahlad-gangadharan-12818014/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/austyne-umeh-51aa6619/"><img src="/public/images/background/austyne.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/austyne-umeh-51aa6619/">Austyne Umeh</a></h4>
                            <span class="designation">Digital & IT Transformation Head, Africa</span>
                            <span class="designation">PZ Cussons</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/austyne-umeh-51aa6619/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/omolara-adagunodo/"><img src="/public/images/background/omolara.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/omolara-adagunodo/">Omolara Adagunodo</a></h4>
                            <span class="designation">Data Insights Analytics and AI Manager</span>
                            <span class="designation">Coca Cola HBC </span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/omolara-adagunodo/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/omolara-adagunodo/"><img src="/public/images/background/modupe.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/omolara-adagunodo/">Modupe Femi-Okunbanjo</a></h4>
                            <span class="designation">Finance Controller</span>
                            <span class="designation">Unilever</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/omolara-adagunodo/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/ugodre-obi-chukwu-9a802326/"><img src="/public/images/background/ugo.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/ugodre-obi-chukwu-9a802326/">Ugodre Obi-Chukwu</a></h4>
                            <span class="designation">Founder/CEO</span>
                            <span class="designation">Nairametrics</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/ugodre-obi-chukwu-9a802326/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/barongasiodu/"><img src="/public/images/background/barong.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/barongasiodu/">Barong Asiodu</a></h4>
                            <span class="designation">Head, Corporate Planning & Strategy</span>
                            <span class="designation">Rite Foods Limited</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/barongasiodu/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/ezekiel-olajolo/"><img src="/public/images/background/ezekiel.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/ezekiel-olajolo/">Ezekiel Olajolo</a></h4>
                            <span class="designation">Product</span>
                            <span class="designation">Moniepoint</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/ezekiel-olajolo/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">JOIN THE EVENT</span>
                            <h2>Why Partner?</h2>
                            <div class="text">Access to more than 
                                200 companies serving over 1.8M retail points across West Africa.</div>
                        </div>
                        <ul class="list-style-one">
                            <li>Exhibition Opportunity</li>
                            <li>Unparalleled Audience Reach</li>
                            <li>Exclusive Networking Opportunities</li>
                            <li>Long-Term Partnership Opportunities</li>
                            <li>Community Engagement and Impact</li>
                            <li>Measurable ROI and Analytics</li>
                        </ul>
                        <div class="btn-box">
                            <a href="{{ route('sponsor.detail') }}" class="theme-btn btn-style-three"><span class="btn-title">Be a Sponsor</span></a>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="/public/images/background/why-sponsor.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!--Clients Section-->
    <section class="clients-section">
        {{-- <div class="anim-icons">
            <span class="icon icon-dots-3 wow zoomIn"></span>
            <span class="icon icon-circle-blue wow zoomIn"></span>
        </div> --}}
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">Clients</span>
                <h2>Official Sponsors</h2>
            </div>

            <div class="sponsors-outer">
                {{-- <h3>Gold Sponsors</h3> --}}
                <div class="row">
                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/idh.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/excite.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/tradesense.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/ennoventure.png" alt=""></a></figure>
                    </div>
                </div>
            </div>

            {{-- <div class="sponsors-outer">
                <h3>Silver Sponsors</h3>

                <div class="row">
                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/5.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/6.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/7.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/8.png" alt=""></a></figure>
                    </div>
                </div>
            </div>

            <div class="sponsors-outer">
                <h3>Bronze Sponsors</h3>

                <div class="row">
                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/9.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/10.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/11.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="/public/images/clients/12.png" alt=""></a></figure>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!--End Clients Section-->

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
                        <h4><a href="">Fin/Pay Tech</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box" style="height: 11rem">
                        <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                        <h4><a href="">CPG Tech providers</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box" style="height: 11rem">
                        <div class="icon-box"><span class="icon flaticon-search"></span></div>
                        <h4><a href="">Logistics Provider</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box" style="height: 11rem">
                        <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                        <h4><a href="">FMCG Companies</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box" style="height: 11rem">
                        <div class="icon-box"><span class="icon flaticon-success"></span></div>
                        <h4><a href="">Distribution Businesses</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box" style="height: 11rem">
                        <div class="icon-box"><span class="icon flaticon-employee"></span></div>
                        <h4><a href="">Financial Service</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Features Section -->

<!-- Event Info Section -->
<section class="event-info-section">
    <div class="auto-container">
        <div class="row">
            <!-- Info Column -->
            <div class="info-column col-lg-6 col-md-12 col-sm-12">
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
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <figure class="image"><img src="/public/images/icons/map-4.png" alt=""></figure>
            </div>
        </div>
    </div>
</section>
<!--End Event Info Section -->

<!--Clients Section-->
{{-- <section class="clients-section-two" style="background-image: url(/public/images/background/9.jpg);">
    <div class="auto-container">
        <div class="sponsors-outer">
            <div class="row">
                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-1.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-2.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-3.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-4.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-5.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-6.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-7.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-8.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-9.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-10.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-11.png" alt=""></a></figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <figure class="image-box"><a href="#"><img src="/public/images/clients/2-12.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End Clients Section-->

<!-- Gallery Section -->
{{-- <section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Gallery</span>
            <h2>Event Gallery</h2>
        </div>

        <div class="row">
            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="image-box">
                    <figure class="image"><img src="/public/images/gallery/1.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="/public/images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                <div class="image-box">
                    <figure class="image"><img src="/public/images/gallery/2.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="/public/images/gallery/2.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                <div class="image-box">
                    <figure class="image"><img src="/public/images/gallery/3.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="/public/images/gallery/3.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="image-box">
                    <figure class="image"><img src="/public/images/gallery/4.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="/public/images/gallery/4.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                <div class="image-box">
                    <figure class="image"><img src="/public/images/gallery/5.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="/public/images/gallery/5.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                <div class="image-box">
                    <figure class="image"><img src="/public/images/gallery/6.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="/public/images/gallery/6.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End Gallery Section -->

<!-- Testimonial Section -->
{{-- <section class="testimonial-section">
    <div class="bg-layer" style="background-image: url(/public/images/background/10.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Testimonials</span>
            <h2>What Clients Say </h2>
        </div>

        <div class="carousel-outer">
            <div class="single-item-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner">
                        <span class="icon fa fa-quote-left"></span>
                        <div class="text">Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam.</div>
                        <div class="name">Kamilah Longen</div>
                        <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner">
                        <span class="icon fa fa-quote-left"></span>
                        <div class="text">Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam.</div>
                        <div class="name">Roland Chopton</div>
                        <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner">
                        <span class="icon fa fa-quote-left"></span>
                        <div class="text">Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam.</div>
                        <div class="name">Cherlyn Ruddick</div>
                        <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Testimonial Section -->

<!-- News Section -->
{{-- <section class="news-section">
    <div class="anim-icons">
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Blogs</span>
            <h2>Latest News</h2>
        </div>

        <div class="row">

            <!-- News Block Three -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="blog-single.html"><img src="/public/images/resource/news-1.jpg" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-info">
                            <li><span class="far fa-user"></span> Admin</li>
                            <li><span class="far fa-comments"></span> Comment 03</li>
                        </ul>
                        <h4><a href="blog-single.html">International Conference on Art Business</a></h4>
                        <div class="btn-box"><a href="#" class="read-more">Read More</a></div>
                    </div>
                </div>
            </div>

            <!-- News Block Three -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="blog-single.html"><img src="/public/images/resource/news-2.jpg" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-info">
                            <li><span class="far fa-user"></span> Admin</li>
                            <li><span class="far fa-comments"></span> Comment 03</li>
                        </ul>
                        <h4><a href="blog-single.html">International Conference on Art Business</a></h4>
                        <div class="btn-box"><a href="#" class="read-more">Read More</a></div>
                    </div>
                </div>
            </div>

            <!-- News Block Three -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="blog-single.html"><img src="/public/images/resource/news-3.jpg" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-info">
                            <li><span class="far fa-user"></span> Admin</li>
                            <li><span class="far fa-comments"></span> Comment 03</li>
                        </ul>
                        <h4><a href="blog-single.html">International Conference on Art Business</a></h4>
                        <div class="btn-box"><a href="#" class="read-more">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End News Section -->

<!-- Subscribe Section -->
<section class="subscribe-section">
    <div class="auto-container">
        <div class="content-box">
            <div class="row">
                <div class="title-column col-lg-6 col-md-12">
                    <div class="sec-title">
                        <span class="icon fa fa-envelope"></span>
                        <h2>Subscribe to our newsletter</h2>
                    </div>
                </div>

                <div class="form-column col-lg-6 col-md-12">
                    <!--Newsletter Form-->
                    <div class="newsletter-form">
                        <form method="POST" action="{{ route('newsletter.submit') }}" id="newsletterForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                                <input type="email" name="email" value="" placeholder="Enter Your Email" required>
                                <button type="submit" id="recaptcha-button" class="theme-btn btn-style-three"><span class="btn-title">Subscribe</span></button>
                            </div>
                        </form>
                            @push('scripts')
                            @endpush
                            <script>
                                document.getElementById("recaptcha-button").addEventListener("click", function(e) {
                                    e.preventDefault();
                
                                    const form = document.getElementById("newsletterForm");
                
                                    // Validate the form before submitting
                                    if (form.checkValidity()) {
                                        grecaptcha.ready(function() {
                                            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'submit'}).then(function(token) {
                                                document.getElementById("g-recaptcha-response").value = token;
                                                form.submit();
                                            });
                                        });
                                    } else {
                                        form.reportValidity(); // Show validation messages
                                    }
                                });
                            </script> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Subscribe Section -->
@endsection