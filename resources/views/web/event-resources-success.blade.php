@extends('web.layout.overall')
@section("page_title", "Resources")
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
    
    @endsection
