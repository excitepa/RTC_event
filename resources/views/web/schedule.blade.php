@extends('web.layout.overall')
@section("page_title", "Schedule")
@section('content')

    <!--Page Title-->
    {{-- <section class="page-title" style="background-image:url(images/background/bg5.png);">
        <div class="auto-container">
            <h1>Schedule</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li style="color: white;" onmouseover="this.style.color='#19184D';" onmouseout="this.style.color='white';">Schedule</li>
            </ul>
        </div>
    </section> --}}
    <!--End Page Title-->
    <section class="page-title" style="position: relative; background-image: url(images/background/bg5.png); background-size: cover; background-position: center;">

        <!-- Dark overlay using ::before -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
    
        <div class="auto-container" style="position: relative; z-index: 1;">
            <h1 style="color: white">Sponsorship</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Be a sponsor</li>
            </ul>
        </div>
    </section>

    <!-- schedule Section -->
    <section class="schedule-section">
        {{-- <div class="anim-icons">
            <span class="icon icon-circle-4 wow zoomIn"></span>
            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div> --}}

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">About Conference</span>
                <h2>Schedule Plan</h2>
            </div>

            <div class="schedule-tabs tabs-box">
                <div class="btns-box">
                    <!--Tabs Box-->
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <span class="day">Day 01</span>
                            <span class="date">01</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-2">
                            <span class="day">Day 02</span>
                            <span class="date">02</span>
                            <span class="month">Jan</span> 2020
                        </li>
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
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <h5 class="name">Panel Session 1 : Consumer Behaviour</h5>
                                        {{-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> --}}
                                        <h4><a href="{{ route('event.detail1') }}">Consumer-Centric Marketing Strategies
                                        </a></h4>
                                        <div class="text">Examine current consumer behaviors, preferences, and trends that influence purchasing decisions in the region.</div>
                                        {{-- <div class="btn-box">
                                            <a href="{{ route('event.detail1') }}" class="theme-btn">Read More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM <br> 11.00 AM</div>
                                        <h5 class="name">Panel Session 2 : Macro Economics</h5>
                                        {{-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> --}}
                                        <h4><a href="{{ route('event.detail2') }}">Economic Factors Impacting Consumer Markets
                                        </a></h4>
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
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <h5 class="name">Panel Session 3 : Technology</h5>
                                        {{-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> --}}
                                        <h4><a href="{{ route('event.detail3') }}">Leveraging Technology for Market Access
                                        </a></h4>
                                        <div class="text">Discuss the role of digital tools and platforms in enhancing market access and consumer engagement, including e-commerce and mobile technology.</div>
                                        {{-- <div class="btn-box">
                                            <a href="{{ route('event.detail1') }}" class="theme-btn">Read More</a>
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
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <h5 class="name">Panel Session 4 : Marketing</h5>
                                        {{-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> --}}
                                        <h4><a href="{{ route('event.detail4') }}">Understanding Consumer Trends in West Africa 
                                        </a></h4>
                                        <div class="text">Examine current consumer behaviors, preferences, and trends that influence purchasing decisions in the region.</div>
                                        {{-- <div class="btn-box">
                                            <a href="{{ route('event.detail3') }}" class="theme-btn">Read More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM <br> 11.00 AM</div>
                                        <h5 class="name">Panel Session 5 : Analytics</h5>
                                        {{-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> --}}
                                        <h4><a href="{{ route('event.detail5') }}">Data-Driven Decision Making
                                            </a></h4>
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
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <h5 class="name">Panel Session 6 : Sales</h5>
                                        {{-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> --}}
                                        <h4><a href="{{ route('event.detail6') }}">Building Effective Sales Strategies
                                        </a></h4>
                                        <div class="text">Discuss innovative sales techniques and strategies that align with consumer needs and drive revenue growth in a competitive market.</div>
                                        {{-- <div class="btn-box">
                                            <a href="{{ route('event.detail3') }}" class="theme-btn">Read More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End schedule Section -->

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        {{-- <div class="anim-icons full-width">
            <span class="icon icon-shape-3 wow fadeIn"></span>
            <span class="icon icon-line-1 wow fadeIn"></span>
        </div> --}}
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
                    <form method="post" action="contact.html">
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