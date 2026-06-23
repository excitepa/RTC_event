@extends('web.layout.overall')
@section("page_title", "Register for Route to Market West Africa 2026")
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
            <h1>Register</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Register</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    
        <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-3 col-md-12 col-sm-12 order-2">
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
                                <p><a href="tel:+2347056592645">+(234) 705 659 2645</a>
                                </p>
                            </li>
                            
                            <!--<li>-->
                            <!--    <span class="icon fa fa-phone-volume"></span>-->
                            <!--    <p><strong>Call Us</strong></p>-->
                            <!--    <p><a href="tel:+2347056592645">+(234) 705 659 2645</a>-->
                            <!--    </p>-->
                            <!--</li>-->

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

                        {{-- <ul class="social-icon-two social-icon-colored">
                            <li><a href="#"><i class="fab fa-brands fa-facebook fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-brands fa-x-twitter fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-brands fa-linkedin fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-brands fa-instagram fa-2x"></i></a></li>
                        </ul> --}}
                        <ul class="social-icon-one">
                            <li><a href="https://www.facebook.com/share/1KvLwvioCh/?mibextid=wwXIfr"><span class="fab fa-facebook-f" style="background-color: #19184d; color: #fff"></span></a></li>
                            <!--<li><a href="#"><span class="fab fa-x-twitter" style="background-color: #19184d; color: #fff"></span></a></li>-->
                            <li><a href="https://www.instagram.com/rtmwa_summit?igsh=MWdwZnMxMTE5N3ppMQ=="><span class="fab fa-instagram" style="background-color: #19184d; color: #fff"></span></a></li>
                            <li><a href="https://www.linkedin.com/company/route-to-market-westafrica/"><span class="fab fa-linkedin-in" style="background-color: #19184d; color: #fff"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-9 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Secure your Spot</h2>
                            </div>
                            <!--<form method="POST" action="{{ route('attendee.signup') }}" id="registertestForm" enctype="multipart/form-data">-->
                            <!--    @csrf-->
                            <!--    <div class="row clearfix">-->
                            <!--        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">-->
                            
                            <!--        <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
                            <!--            <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" required-->
                            <!--                pattern="^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$"-->
                            <!--                title="Please enter your full name (first and last name)"-->
                            <!--                oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">-->
                            <!--        </div>-->

                                    <!-- Phone -->
                            <!--        <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
                            <!--            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" required -->
                            <!--                pattern="^\+?[0-9]{7,15}$" -->
                            <!--                title="Enter a valid phone number (without spaces or letters)"-->
                            <!--                inputmode="numeric"-->
                            <!--                oninput="this.value = this.value.replace(/[^0-9+]/g, '')">-->
                            <!--        </div>-->
                            
                                    <!-- Email -->
                            <!--        <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
                            <!--            <input type="email" name="email" value="{{ old('email') }}" placeholder="Work Email" required -->
                            <!--                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" -->
                            <!--                title="Enter a valid company email (e.g., user@company.com)">-->
                            <!--        </div>-->
                            
                                    <!-- Company -->
                            <!--        <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
                            <!--            <input type="text" name="company" value="{{ old('company') }}" placeholder="Organization" required -->
                            <!--                pattern="[A-Za-z\s]{2,}" -->
                            <!--                title="Enter a valid company name"-->
                            <!--                oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">-->
                            <!--        </div>-->
                            
                                    <!-- Industry -->
                            <!--        <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
                            <!--            <select class="form-select" name="industry" aria-label="Select your industry" required -->
                            <!--                title="Choose the industry you belong to">-->
                            <!--                <option value="" disabled selected>Choose your industry</option>-->
                            <!--                <option value="Tech & Payment Service Providers">Tech & Payment Service Providers</option>-->
                            <!--                <option value="FMCG Companies">FMCG Companies</option>-->
                            <!--                <option value="Policy Makers/Regulatory">Policy Makers/Regulatory</option>-->
                            <!--                <option value="Mobility & Fleet Industry">Mobility & Fleet Industry</option>-->
                            <!--                <option value="Banking, financial services (BFS)">Banking, financial services (BFS)</option>-->
                            <!--                <option value="Manufacturing Industries">Manufacturing Industries</option>-->
                            <!--                <option value="Distribution Companies">Distribution Companies</option>-->
                            <!--                <option value="Marketing Agencies">Marketing Agencies</option>-->
                            <!--                <option value="Logistics Companies">Logistics Companies</option>-->
                            <!--                <option value="Others">Others</option>-->
                            <!--            </select>-->
                            <!--        </div>-->
                            
                                    <!-- Job Title -->
                            <!--        <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
                            <!--            <input type="text" name="job_title" value="{{ old('job_title') }}" placeholder="Job Title/Role" required -->
                            <!--                pattern="[A-Za-z\s]{2,}" -->
                            <!--                title="Role at above company"-->
                            <!--                oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">-->
                            <!--        </div>-->
                            
                                    <!-- Country -->
                            <!--        <div class="col-lg-12 col-md-12 col-sm-12 form-group">-->
                            <!--            <select class="form-select" name="country" aria-label="Select your country" required>-->
                            <!--                <option value="" disabled selected>Choose your country</option>-->
                            <!--                @foreach ($countries as $country)-->
                            <!--                    <option value="{{ $country->name }}">{{ $country->name }}</option>-->
                            <!--                @endforeach-->
                            <!--            </select>-->
                            <!--        </div>-->
                            
                                    <!-- Attendance Days -->
                            <!--        <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
                            <!--            <label for="attendance-days">What day(s) will you be attending</label><br>-->
                            <!--            <input type="checkbox" name="attendance_days[]" value="Day 1"> <label>Day 1</label><br>-->
                            <!--            <input type="checkbox" name="attendance_days[]" value="Day 2"> <label>Day 2</label>-->
                            <!--        </div>-->
                            
                                    <!-- How did you hear about the webinar -->
                            <!--        <div class="col-lg-12 col-md-12 col-sm-12 form-group">-->
                            <!--            <select class="form-select" name="about_webinar" aria-label="How did you hear about the event" required -->
                            <!--                title="Tell us how you heard about the event">-->
                            <!--                <option value="" disabled selected>How did you hear about the event</option>-->
                            <!--                <option value="Social Media(Linkedln, Instagram, Facebook)">Social Media (Linkedln, Instagram, Facebook)</option>-->
                            <!--                <option value="Colleague">Colleague</option>-->
                            <!--                <option value="Printed Media">Print Media</option>-->
                            <!--                <option value="Email Invitation">Email Invitation</option>-->
                            <!--                <option value="Online Search">Online Search</option>-->
                            <!--                <option value="Others">Others</option>-->
                            <!--            </select>-->
                            <!--        </div>-->
                            
                                    <!-- Submit Button -->
                            <!--        <div class="col-lg-12 col-md-12 col-sm-12 form-group">-->
                            <!--            <button class="theme-btn btn-style-three" id="recaptcha-button" type="submit">-->
                            <!--                <span class="btn-title">Submit Now</span>-->
                            <!--            </button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</form>-->
                            
                            {{-- <form method="POST" action="{{ route('attendee.signup') }}" id="registertestForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" required
                                            pattern="^[A-Za-z0-9\s\.\-&]{2,}$"
                                            title="Please enter your full name (first and last name)"
                                            oninput="this.value = this.value.replace(/[^A-Za-z0-9\s\.\-&]/g, '')">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Work Email" required 
                                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" 
                                            title="Enter a valid company email (e.g., user@company.com)">
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" required 
                                            pattern="^\+?[0-9]{7,15}$" 
                                            title="Enter a valid phone number (without spaces or letters)"
                                            inputmode="numeric"
                                            oninput="this.value = this.value.replace(/[^0-9+]/g, '')">
                                    </div>
                            
                                    <!-- Company -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="company" value="{{ old('company') }}" placeholder="Organization" required 
                                            pattern="[A-Za-z\s]{2,}" 
                                            title="Enter a valid company name"
                                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                    </div>

                                    <!-- Country -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <select class="form-select" name="country" aria-label="Select your country" required>
                                            <option value="" disabled selected>Location</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            
                                    <!-- Industry -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <select class="form-select" name="industry" id="industry" required>
                                            <option value="" disabled selected>Industry</option>

                                            <option value="FMCG">FMCG</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Distribution">Distribution</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Logistics">Logistics</option>

                                            <option value="Technology Providers">Technology Providers</option>
                                            <option value="Financial Services">Banking & Financial Services</option>
                                            <option value="Consulting">Consulting</option>
                                            <option value="Mobility & Fleet">Mobility & Fleet</option>

                                            <option value="Government">Government</option>
                                            <option value="Regulatory">Regulatory</option>

                                            <option value="Other">Other (please specify)</option>
                                        </select>

                                        <input type="text" name="industry_other" id="industry_other"
                                            class="form-control mt-2"
                                            placeholder="Please specify your industry"
                                            style="display:none;">
                                    </div>

                                    <!-- Company Size -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <select class="form-select" name="company_size" aria-label="Select your company size" required 
                                            title="Choose the size of your company">
                                            <option value="" disabled selected>Company size</option>
                                            <option value="1-10">1-10 employees</option>
                                            <option value="11-50">11-50 employees</option>
                                            <option value="51-200">51-200 employees</option>
                                            <option value="201-500">201-500 employees</option>
                                            <option value="501-1000">501-1000 employees</option>
                                            <option value="1001+">1001+ employees</option>
                                        </select>
                                    </div>
                            
                                    <!-- Job Title -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="job_title" value="{{ old('job_title') }}" placeholder="Job Title/Role" required 
                                            pattern="[A-Za-z\s]{2,}" 
                                            title="Role at above company"
                                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                    </div>

                                    <!-- Seniority Level -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <select class="form-select" name="seniority_level" id="seniority_level" required>
                                            <option value="" disabled selected>Seniority level</option>
                                            <option value="C-Suite">C-Suite</option>
                                            <option value="Executive Director">Executive Director</option>
                                            <option value="Head of Department">Head of Department</option>
                                            <option value="Senior Manager">Senior Manager</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Specialist">Specialist</option>
                                            <option value="Consultant">Consultant</option>
                                            <option value="Others">Others</option>
                                        </select>

                                        <input type="text" name="seniority_other" id="seniority_other"
                                            class="form-control mt-2"
                                            placeholder="Please specify your seniority level"
                                            style="display:none;">
                                    </div>
                            
                                    <!-- How did you hear about the webinar -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <select class="form-select" name="about_webinar" id="about_webinar" required>
                                            <option value="" disabled selected>How did you hear about the event</option>
                                            <option value="Social Media(Linkedln, Instagram, Facebook)">Social Media (Linkedln, Instagram, Facebook)</option>
                                            <option value="Colleague">Colleague</option>
                                            <option value="Printed Media">Print Media</option>
                                            <option value="Email Invitation">Email Invitation</option>
                                            <option value="Online Search">Online Search</option>
                                            <option value="Others">Others</option>
                                        </select>

                                        <input type="text" name="about_webinar_other" id="about_webinar_other"
                                            class="form-control mt-2"
                                            placeholder="Please specify"
                                            style="display:none;">
                                    </div>

                                    <!-- Attendance Days -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="attendance-days">What day(s) will you be attending</label><br>
                                        <input type="checkbox" name="attendance_days[]" value="Day 1"> <label>Day 1</label><br>
                                        <input type="checkbox" name="attendance_days[]" value="Day 2"> <label>Day 2</label>
                                    </div>
                            
                                    <!-- Submit Button -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-three" id="recaptcha-button" type="submit">
                                            <span class="btn-title">Submit Now</span>
                                        </button>
                                    </div>
                                </div>
                            </form> --}}

                            <script>
                                function toggleOther(selectId, inputId, triggerValue = 'Other') {
                                    const select = document.getElementById(selectId);
                                    const input = document.getElementById(inputId);

                                    select.addEventListener('change', function () {
                                        if (this.value === triggerValue || this.value === 'Others') {
                                            input.style.display = 'block';
                                            input.setAttribute('required', 'required');
                                        } else {
                                            input.style.display = 'none';
                                            input.removeAttribute('required');
                                            input.value = '';
                                        }
                                    });
                                }

                                toggleOther('industry', 'industry_other', 'Other');
                                toggleOther('seniority_level', 'seniority_other', 'Others');
                                toggleOther('about_webinar', 'about_webinar_other', 'Others');
                            </script>

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
                            
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            
                            @if ($errors->any())
                            <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Registration Error',
                                    html: `{!! implode('<br>', $errors->all()) !!}`,
                                    confirmButtonText: 'OK'
                                });
                            });
                            </script>
                            @endif
                            
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