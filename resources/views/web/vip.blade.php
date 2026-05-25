@extends('web.layout.overall')
@section("page_title", "VIP for Route to Market West Africa 2026")
@section('content')

    <!--Page Title-->
    <!--<section class="page-title" style="background-image:url(/public/images/background/5.jpg);">-->
    <!--    <div class="auto-container">-->
    <!--        <h1>Contact Us</h1>-->
    <!--        <ul class="bread-crumb clearfix">-->
    <!--            <li><a href="{{ route('index') }}">Home</a></li>-->
    <!--            <li>Contact Us</li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="page-title" style="position: relative; background-image: url(/public/images/background/5.jpeg); background-size: cover; background-position: center;">

        <!-- Dark overlay using ::before -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
    
        <div class="auto-container" style="position: relative; z-index: 1;">
            <h1>VIP</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>VIP</li>
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
                                <p>+2347056592645
                                </p>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p><a href="mailto:events@rtmwestafrica.com">events@rtmwestafrica.com
                                </a></p>
                            </li>

                            {{-- <li>
                                <span class="icon fa fa-clock"></span>
                                <p><strong>Opening Time</strong></p>
                                <p>Mon - Sat: 09.00am to 18.00pm</p>
                            </li> --}}
                        </ul>

                        <ul class="social-icon-one">
                            <li><a href="https://www.facebook.com/profile.php?id=61575320217529" target="_blank"><span class="fab fa-facebook-f" style="background-color: #19184d; color: #fff"></span></a></li>
                            <li><a href="#"><span class="fab fa-x-twitter" style="background-color: #19184d; color: #fff"></span></a></li>
                            <li><a href="https://www.instagram.com/rtmwa_summit25/" target="_blank"><span class="fab fa-instagram" style="background-color: #19184d; color: #fff"></span></a></li>
                            <li><a href="https://www.linkedin.com/company/107009848/admin/dashboard/" target="_blank"><span class="fab fa-linkedin-in" style="background-color: #19184d; color: #fff"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>VIP Attendance Confirmation</h2>
                            </div>
                            <form method="POST" action="{{ route('vip.submit') }}" id="vipForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            
                                    <!-- Full Name -->
                                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" required 
                                            pattern="[A-Za-z\s]{2,}" 
                                            title="Name should contain only letters and spaces"
                                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                    </div> --}}
                            
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" required
                                            pattern="^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$"
                                            title="Please enter your full name (first and last name)"
                                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                    </div>
                            
                                    <!-- Email -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Work Email" required 
                                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" 
                                            title="Enter a valid company email (e.g., user@company.com)">
                                    </div>
                            
                                    <!-- Company -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="company" value="{{ old('company') }}" placeholder="Organization" required 
                                            pattern="[A-Za-z\s]{2,}" 
                                            title="Enter a valid company name"
                                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                    </div>
                            
                                    <!-- Job Title -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="job_title" value="{{ old('job_title') }}" placeholder="Job Title/Role" required 
                                            pattern="[A-Za-z\s]{2,}" 
                                            title="Role at above company"
                                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                    </div>
                            
                                    <!-- Attendance Days -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="attendance-days">What day(s) will you be attending</label><br>
                                        <input type="radio" name="attendance_days[]" value="Day 1"> <label>Day 1</label><br>
                                        <input type="radio" name="attendance_days[]" value="Day 2"> <label>Day 2</label><br>
                                        <input type="radio" name="attendance_days[]" value="Day 1 and 2"> <label>Day 1 and 2</label>
                                    </div>
                            
                                    <!-- Submit Button -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-three" id="recaptcha-button" type="submit">
                                            <span class="btn-title">Confirm</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            
                            @push('scripts')
                            @endpush
                            <script>
                                document.getElementById("recaptcha-button").addEventListener("click", function(e) {
                                    e.preventDefault();
                
                                    const form = document.getElementById("vipForm");
                
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

        @endsection
