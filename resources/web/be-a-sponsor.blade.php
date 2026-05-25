@extends('web.layout.overall')
@section("page_title", "Be a Sponsor")
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(/public/images/background/5.jpg);">
    <div class="auto-container">
        <h1>Sponsorship</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Be a sponsor</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Pricing Section -->
<section class="pricing-section">
    <div class="anim-icons">
        <span class="icon icon-circle-green wow fadeIn"></span>
        <span class="icon icon-circle-blue wow fadeIn"></span>
        <span class="icon icon-circle-pink wow fadeIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Sponsor Packages</span>
            <h2>Choose a Package</h2>
        </div>

        <div class="outer-box">
            <div class="row">
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><img src="{{ asset('/public/images/icons/bronze-medal.png') }}" alt=""></div>
                        </div>
                        <div class="price-box">
                            <div class="title"> Bronze Package</div>
                            {{-- <h4 class="price">$35.99</h4> --}}
                        </div>
                        <ul class="features">
                            <li class="true">Premium Exhibition Space
                            </li>
                            <li class="true">Product Commercials During Event 
                            </li>
                            <li class="true">Free Ad Opportunity on event brochure 
                            </li>
                            <li class="true">Logo on event brochure 
                            </li>
                            <li class="true">Sampling Opportunity
                            </li>
                            <li class="false">VIP Access Networking 
                            </li>
                            <li class="false">Product Presentation Opportunity 
                            </li>
                            <li class="false">Multiple Recognitions 
                            </li>
                            <li class="false">Event Co-Branding
                            </li>
                        </ul>
                        {{-- <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                        </div> --}}
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><img src="{{ asset('/public/images/icons/silver-medal.png') }}" alt=""></div>
                        </div>
                        <div class="price-box">
                            <div class="title">Silver Package</div>
                            {{-- <h4 class="price">$99.99</h4> --}}
                        </div>
                        <ul class="features">
                            <li class="true">Premium Exhibition Space
                            </li>
                            <li class="true">Product Commercials During Event 
                            </li>
                            <li class="true">Free Ad Opportunity on event brochure 
                            </li>
                            <li class="true">Logo on event brochure 
                            </li>
                            <li class="true">Sampling Opportunity
                            </li>
                            <li class="true">VIP Access Networking 
                            </li>
                            <li class="true">Product Presentation Opportunity 
                            </li>
                            <li class="false">Multiple Recognitions 
                            </li>
                            <li class="false">Event Co-Branding
                            </li>
                        </ul>
                        {{-- <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                        </div> --}}
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><img src="{{ asset('/public/images/icons/gold-medal.png') }}" alt=""></div>
                        </div>
                        <div class="price-box">
                            <div class="title">Gold Package</div>
                            {{-- <h4 class="price">$199.99</h4> --}}
                        </div>
                        <ul class="features">
                            <li class="true">Premium Exhibition Space
                            </li>
                            <li class="true">Product Commercials During Event 
                            </li>
                            <li class="true">Free Ad Opportunity on event brochure 
                            </li>
                            <li class="true">Logo on event brochure 
                            </li>
                            <li class="true">Sampling Opportunity
                            </li>
                            <li class="true">VIP Access Networking 
                            </li>
                            <li class="true">Product Presentation Opportunity 
                            </li>
                            <li class="true">Multiple Recognitions 
                            </li>
                            <li class="true">Event Co-Branding
                            </li>
                        </ul>
                        {{-- <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!--End Pricing Section -->

<!-- Register Section -->
<section class="register-section">
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
                        <form method="POST" action="{{ route('inquiry') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <span class="icon fa fa-user"></span>
                                <input type="text" name="full_name" placeholder="Full name" required="">
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
                                <span class="icon fa fa-gift"></span>
                                <input type="text" name="package" required="" placeholder="What package are you interested in...">
                            </div>

                            <div class="form-group">
                                <span class="icon fa fa-edit"></span>
                                <textarea name="message" placeholder="Additional Message"></textarea>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Submit</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Register Section -->
@endsection
