@extends('web.layout.overall')
@section("page_title", "Participate")
@section("page_title", "Participate")
@section('content')

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
                <img src="{{ asset('/public/images/check.png') }}" alt="" style="height: 200px; width: 200px;" class="img img-fluid">
                {{-- <img-fluid></img-fluid> --}}
            </div>
        </div>

         <div class="auto-container">
    <h2>Thank You for Your Submission!</h2>
    
    <p style="font-size: 16px; color: #666;">
        We’ve received your information and our team is currently reviewing your request.
    </p>

    <div class="text" style="font-size: 20px;">
        If your application meets our criteria, we’ll be in touch shortly with next steps.
    </div>

    <p style="font-size: 16px; color: #666; margin-top: 10px;">
        Please keep an eye on your email for updates.
    </p>

    <a href="{{ route('index') }}" class="theme-btn btn-style-three">
        <span class="btn-title">Back to Home</span>
    </a>

    <a href="{{ route('faq') }}" class="theme-btn btn-style-two">
        <span class="btn-title">Contact Us</span>
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
    
    <script>
        fbq('track', 'CompleteRegistration');
    </script>

    @endsection
