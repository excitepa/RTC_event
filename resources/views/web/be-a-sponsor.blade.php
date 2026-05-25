@extends('web.layout.overall')
@section("page_title", "Participate")
@section('content')
<!--Page Title-->
<section class="page-title" style="position: relative; background-image: url(images/background/bg2.png); background-size: cover; background-position: center;">

    <!-- Dark overlay using ::before -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="auto-container" style="position: relative; z-index: 1;">
        <h1 style="color: white">Participate</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Sponsor & Exhibit</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Why Choose Us -->
<!--<section class="why-choose-us">-->
<!--    <div class="auto-container">-->
<!--        <div class="row">-->
<!--            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">-->
<!--                <div class="inner-column">-->
<!--                    <div class="sec-title" style="margin-bottom: 10px;">-->
<!--                        <span class="title">PARTNER WITH US</span>-->
<!--                        <h2 style="font-size: 32px; line-height: 1.5em">Sponsor the Route to Market West Africa event and Amplify Your Brand</h2>-->
<!--                        <div class="text">RTM WEST AFRICA is not just another industry event, it is a high-impact platform designed to position your brand at the center of decision-making in the Consumer Packaged Goods ecosystem. As a sponsor, you gain direct access to the executives shaping the future of distribution, sales, and market expansion across the region.-->
<!--                        </div>-->
<!--                        <div class="text" style="margin-top: 10px;"><h5>Why Sponsor RTM West Africa 2026?</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <ul class="list-style-one">-->
<!--                        <li>Own the Room, Not Just Attend </li>-->
<!--                        <li>Turn Conversations into Commercial Opportunities</li>-->
<!--                        <li>Position Your Brand as a Market Authority</li>-->
<!--                        <li>Amplify Your Brand Beyond the Event</li>-->
<!--                        <li>Generate Quality Leads, Not Just Contacts</li>-->
<!--                        <li>Align with Industry Transformation</li>-->
<!--                    </ul>-->
<!--                    <div class="btn-box">-->
<!--                        <a href="#registerSection" class="theme-btn btn-style-two"><span class="btn-title">Be a Sponsor</span></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="image-column col-lg-6 col-md-12 col-sm-12">-->
<!--                <div class="image-box">-->
<!--                    <figure class="image"><img src="images/sponsor.jpg" alt=""></figure>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
@if($year == 2025)
<section class="why-choose-us">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title" style="margin-bottom: 10px;">
                        <span class="title">PARTNER WITH US</span>
                        <h2 style="font-size: 32px; line-height: 1.5em">Sponsor the Route to Market West Africa event and Amplify Your Brand</h2>
                        <div class="text">RTM WEST AFRICA is the most anticipated events in the Consumer and Packaged good Industry, bringing together Industry Leaders, Key stakeholders, Service providers and decision-makers for this event themed <strong>Building a Consumer-Centric Route-to-Market</strong>
                        </div>
                        <div class="text" style="margin-top: 10px;"><h5>Why Sponsor?</h5>
                        </div>
                    </div>
                    <ul class="list-style-one">
                        <li>Massive Exposure – Get your brand in front of +1000 attendees </li>
                        <li>High-Value Networking – Connect with industry leaders</li>
                        <li>Thought Leadership – Showcase your expertise</li>
                        <li>Media Exposure – Benefit from press coverage</li>
                    </ul>
                    <div class="btn-box">
                        <a href="#registerSection" class="theme-btn btn-style-two"><span class="btn-title">Be a Sponsor</span></a>
                    </div>
                </div>
            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/sponsor.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="why-choose-us">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title" style="margin-bottom: 10px;">
                        <span class="title">PARTNER WITH US</span>
                        <h2 style="font-size: 32px; line-height: 1.5em">Sponsor the Route to Market West Africa event and Amplify Your Brand</h2>
                        <div class="text">RTM WEST AFRICA is not just another industry event, it is a high-impact platform designed to position your brand at the center of decision-making in the Consumer Packaged Goods ecosystem. As a sponsor, you gain direct access to the executives shaping the future of distribution, sales, and market expansion across the region.
                        </div>
                        <div class="text" style="margin-top: 10px;"><h5>Why Sponsor RTM West Africa 2026?</h5>
                        </div>
                    </div>
                    <ul class="list-style-one">
                        <li>Own the Room, Not Just Attend </li>
                        <li>Turn Conversations into Commercial Opportunities</li>
                        <li>Position Your Brand as a Market Authority</li>
                        <li>Amplify Your Brand Beyond the Event</li>
                        <li>Generate Quality Leads, Not Just Contacts</li>
                        <li>Align with Industry Transformation</li>
                    </ul>
                    <div class="btn-box">
                        <a href="#registerSection" class="theme-btn btn-style-two"><span class="btn-title">Be a Sponsor</span></a>
                    </div>
                </div>
            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/participate1.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title" style="margin-bottom: 10px;">
                        <span class="title">EXHIBIT WITH US</span>
                        <h2 style="font-size: 32px; line-height: 1.2em">Showcase Your Solutions Where Decisions Are Made</h2>
                        <div class="text">RTM West Africa is more than a conference, it’s a live marketplace of ideas, innovation and opportunity. This is your chance to move beyond visibility and create meaningful, face-to-face engagement that drives real business outcomes.
                        </div>
                        <div class="text" style="margin-top: 10px;"><h5>Why Exhibit at RTM West Africa 2026?</h5>
                        </div>
                    </div>
                    <ul class="list-style-one">
                        <li>Showcase Your Products in Action </li>
                        <li>Engage Directly with Decision-Makers </li>
                        <li>Drive Immediate Business Opportunities</li>
                        <li>Build Strategic Partnership</li>
                    </ul>
                    <div class="btn-box">
                        <a href="#registerSection" class="theme-btn btn-style-two"><span class="btn-title">Exhibit Now</span></a>
                    </div>
                </div>
            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/exhibit (2).jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- End Why Choose Us -->

<!-- Pricing Section -->
<!--<section class="pricing-section">-->
<!--    <div class="anim-icons">-->
<!--        <span class="icon icon-circle-green wow fadeIn"></span>-->
<!--        <span class="icon icon-circle-blue wow fadeIn"></span>-->
<!--        <span class="icon icon-circle-pink wow fadeIn"></span>-->
<!--    </div>-->

<!--    <div class="auto-container">-->
<!--        <div class="sec-title text-center">-->
<!--            <span class="title">Sponsor Packages</span>-->
<!--            <h2>Choose a Package</h2>-->
<!--        </div>-->

<!--        <div class="outer-box">-->
<!--            <div class="row">-->
                <!-- Pricing Block -->
<!--                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="icon-box">-->
<!--                            <div class="icon-outer"><img src="{{ asset('images/icons/bronze-medal.png') }}" alt=""></div>-->
<!--                        </div>-->
<!--                        <div class="price-box">-->
<!--                            <div class="title"> Bronze Package</div>-->
<!--                            {{-- <h4 class="price">$35.99</h4> --}}-->
<!--                        </div>-->
<!--                        <ul class="features">-->
<!--                            <li class="true">Premium Exhibition Space-->
<!--                            </li>-->
<!--                            <li class="true">Product Commercials During Event -->
<!--                            </li>-->
<!--                            <li class="true">Free Ad Opportunity on event brochure -->
<!--                            </li>-->
<!--                            <li class="true">Logo on event brochure -->
<!--                            </li>-->
<!--                            <li class="true">Sampling Opportunity-->
<!--                            </li>-->
<!--                            <li class="false">VIP Access Networking -->
<!--                            </li>-->
<!--                            <li class="false">Product Presentation Opportunity -->
<!--                            </li>-->
<!--                            <li class="false">Multiple Recognitions -->
<!--                            </li>-->
<!--                            <li class="false">Event Co-Branding-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        {{-- <div class="btn-box">-->
<!--                            <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>-->
<!--                        </div> --}}-->
<!--                    </div>-->
<!--                </div>-->

                <!-- Pricing Block -->
<!--                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="icon-box">-->
<!--                            <div class="icon-outer"><img src="{{ asset('images/icons/silver-medal.png') }}" alt=""></div>-->
<!--                        </div>-->
<!--                        <div class="price-box">-->
<!--                            <div class="title">Silver Package</div>-->
<!--                            {{-- <h4 class="price">$99.99</h4> --}}-->
<!--                        </div>-->
<!--                        <ul class="features">-->
<!--                            <li class="true">Premium Exhibition Space-->
<!--                            </li>-->
<!--                            <li class="true">Product Commercials During Event -->
<!--                            </li>-->
<!--                            <li class="true">Free Ad Opportunity on event brochure -->
<!--                            </li>-->
<!--                            <li class="true">Logo on event brochure -->
<!--                            </li>-->
<!--                            <li class="true">Sampling Opportunity-->
<!--                            </li>-->
<!--                            <li class="true">VIP Access Networking -->
<!--                            </li>-->
<!--                            <li class="true">Product Presentation Opportunity -->
<!--                            </li>-->
<!--                            <li class="false">Multiple Recognitions -->
<!--                            </li>-->
<!--                            <li class="false">Event Co-Branding-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        {{-- <div class="btn-box">-->
<!--                            <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>-->
<!--                        </div> --}}-->
<!--                    </div>-->
<!--                </div>-->

                <!-- Pricing Block -->
<!--                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="icon-box">-->
<!--                            <div class="icon-outer"><img src="{{ asset('images/icons/gold-medal.png') }}" alt=""></div>-->
<!--                        </div>-->
<!--                        <div class="price-box">-->
<!--                            <div class="title">Gold Package</div>-->
<!--                            {{-- <h4 class="price">$199.99</h4> --}}-->
<!--                        </div>-->
<!--                        <ul class="features">-->
<!--                            <li class="true">Premium Exhibition Space-->
<!--                            </li>-->
<!--                            <li class="true">Product Commercials During Event -->
<!--                            </li>-->
<!--                            <li class="true">Free Ad Opportunity on event brochure -->
<!--                            </li>-->
<!--                            <li class="true">Logo on event brochure -->
<!--                            </li>-->
<!--                            <li class="true">Sampling Opportunity-->
<!--                            </li>-->
<!--                            <li class="true">VIP Access Networking -->
<!--                            </li>-->
<!--                            <li class="true">Product Presentation Opportunity -->
<!--                            </li>-->
<!--                            <li class="true">Multiple Recognitions -->
<!--                            </li>-->
<!--                            <li class="true">Event Co-Branding-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        {{-- <div class="btn-box">-->
<!--                            <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>-->
<!--                        </div> --}}-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    
<!--</section>-->
<!--End Pricing Section -->

<!-- Register Section -->
<section class="register-section" id="registerSection">
    <div class="auto-container">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>
        <div class="outer-box">
            <div class="row no-gutters">
                <div class="title-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="sec-title light">
                            <div class="icon-box"><span class="icon flaticon-rocket-ship"></span></div>
                            <h2>REACH OUT</h2>
                            <div class="text">Access to more than 
                                200 companies serving over 1.8M retail points across West Africa.</div>
                        </div>
                    </div>
                </div>
                <!--Register Form-->
                <div class="register-form col-lg-8 col-md-6 col-sm-12">
                    <div class="form-inner">
                        <form method="POST" id="registertestForm" action="{{ route('inquiry') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            <div class="form-group">
                                <span class="icon fa fa-user"></span>
                                <input type="text" name="full_name" placeholder="Full name" required>
                            </div>
                            
                            <div class="form-group">
                                <span class="icon fa fa-building"></span>
                                <input type="text" name="company" value="" placeholder="Company Name" required>
                            </div>

                            <div class="form-group">
                                <span class="icon fa fa-envelope"></span>
                                <input type="email" name="email" value="" placeholder="Work mail" required>
                            </div>

                            <div class="form-group">
                                <span class="icon fa fa-phone"></span>
                                <input type="text" name="phone" placeholder="Phone" required="">
                            </div>

                            <div class="form-group">
                                <label for="">What package are you interested in...</label><br>
                                <input type="radio" id="sponsor" name="package" value="sponsor"/>
                                <label for="sponsort">Sponsor</label><br>
                                <input type="radio" id="exhibit" name="package" value="exhibit"/>
                                <label for="exhibit">Exhibit</label><br>
                                {{-- <input type="radio" id="bronze" name="package" value="bronze"/>
                                <label for="bronze">Bronze</label><br> --}}
                            </div>

                            <div class="form-group">
                                <span class="icon fa fa-edit"></span>
                                <textarea name="message" placeholder="Additional Message"></textarea>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" id="recaptcha-button" class="theme-btn btn-style-four">
                                    <span class="btn-title">Submit</span></button>
                            </div>
                        </form>
                        <!--<form method="POST" action="{{ route('inquiry') }}" enctype="multipart/form-data">-->
                        <!--    @csrf-->
                        <!--    <div class="form-group">-->
                        <!--        <span class="icon fa fa-user"></span>-->
                        <!--        <input type="text" name="full_name" placeholder="Full name" required="">-->
                        <!--    </div>-->

                        <!--    <div class="form-group">-->
                        <!--        <span class="icon fa fa-envelope"></span>-->
                        <!--        <input type="email" name="email" value="" placeholder="Work mail" required>-->
                        <!--    </div>-->

                        <!--    <div class="form-group">-->
                        <!--        <span class="icon fa fa-phone"></span>-->
                        <!--        <input type="text" name="phone" placeholder="Phone" required="">-->
                        <!--    </div>-->

                        <!--    <div class="form-group">-->
                        <!--        <label for="">What package are you interested in...</label><br>-->
                        <!--        <input type="radio" id="gold" name="package" value="gold"/>-->
                        <!--        <label for="gold">Gold</label><br>-->
                        <!--        <input type="radio" id="silver" name="package" value="silver"/>-->
                        <!--        <label for="silver">Silver</label><br>-->
                        <!--        <input type="radio" id="bronze" name="package" value="bronze"/>-->
                        <!--        <label for="bronze">Bronze</label><br>-->
                        <!--        {{-- <input type="radio" name="gold" value="Gold">-->
                        <!--        <label for="attendance-days">Gold</label><br>-->
                        <!--        <input type="radio" name="silver" value="Silver">-->
                        <!--        <label for="attendance-days">Silver</label><br>-->
                        <!--        <input type="radio" name="attendance_days[]" value="Bronze">-->
                        <!--        <label for="attendance-days">Bronze</label><br> --}}-->
                        <!--        {{-- <input type="text" name="package" required="" placeholder="What package are you interested in..."> --}}-->
                        <!--    </div>-->

                        <!--    <div class="form-group">-->
                        <!--        <span class="icon fa fa-edit"></span>-->
                        <!--        <textarea name="message" placeholder="Additional Message"></textarea>-->
                        <!--    </div>-->

                        <!--    <div class="form-group text-right">-->
                        <!--        <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Submit</span></button>-->
                        <!--    </div>-->
                        <!--</form>-->
                        
                         @push('scripts')
                        @endpush
                        <script>
                            document.getElementById('registertestForm').addEventListener('submit', function(e) {
                                e.preventDefault(); // stop normal submit

                                grecaptcha.ready(() => {
                                    grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' })
                                    .then((token) => {
                                        // set token in hidden input
                                        document.getElementById('g-recaptcha-response').value = token;

                                        // submit form AFTER token is set
                                        e.target.submit();
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Register Section -->
@endsection
