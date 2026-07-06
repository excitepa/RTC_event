@extends('web.layout.overall')
@section("page_title", "Resources")
@section('content')

<section class="page-title" style="position: relative; background-image: url(/public/images/background/min.jpg); background-size: cover; background-position: center;">

    <!-- Dark overlay using ::before -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="auto-container" style="position: relative; z-index: 1;">
        <h1>RTM 2026 Resources</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>RTM 2026 Resources</li>
        </ul>
    </div>
</section>

<!-- News Section -->
    <section class="news-section">
        {{-- <div class="anim-icons">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn"></span>
            <span class="icon twist-line-3 wow zoomIn"></span>
        </div> --}}

        <div class="auto-container">
            <div class="sec-title text-center">
                <!--<span class="title">RTM 2025 Resources</span>-->
                <h2>Day 2 Keynote Presentation</h2>
            </div>

            <div class="row">

                <!-- News Block Three -->
                <!--<div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">-->
                <!--    <div class="inner-box">-->
                <!--        <div class="image-box">-->
                <!--            <figure class="image"><a href=""><img src="/public/images/resource/day1.png" alt=""></a></figure>-->
                <!--        </div>-->
                <!--        <div class="lower-content">-->
                            
                <!--            <h4><a href="#">Building a Consumer-Centric Route to <br> Market - Narendra Nagarkar</a></h4>-->
                <!--            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="download" data-presentation-url="assets/resources/day1.pdf" data-image="/public/images/resource/day1.png">-->
                <!--                Download Presentation</a></div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!-- News Block Three -->
                <!--<div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">-->
                <!--    <div class="inner-box">-->
                <!--        <div class="image-box">-->
                <!--            <figure class="image"><a href=""><img src="/public/images/resource/day2.png" alt=""></a></figure>-->
                <!--        </div>-->
                <!--        <div class="lower-content">-->
                            
                <!--            <h4><a href="#">Building Resilience in West Africa’s Dynamic Markets - Oghale Elueni</a></h4>-->
                <!--            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="download" data-presentation-url="assets/resources/day2.pdf" data-image="/public/images/resource/day2.png">-->
                <!--                Download Presentation</a></div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                <!--<div class="news-block col-lg-12 col-md-12 col-sm-12 wow fadeInRight">-->
                <!--    <div class="inner-box">-->
                <!--        <div class="image-box">-->
                <!--            <figure class="image"><a href=""><img src="/public/images/resource/day1keynote.png" alt=""></a></figure>-->
                <!--        </div>-->
                <!--        <div class="lower-content">-->
                            
                <!--            <h4><a href="#">Building a Consumer-Centric Route to Market. <br> Day 1 - Keynote Speech</a></h4>-->
                <!--            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="keynote1" data-video-url="https://www.youtube.com/embed/xiX7szAYI0Y?si=RP7tKxiZy59SIg61" data-session="keynote1" data-image="/public/images/resource/day1keynote.png">-->
                <!--                Watch Full Session</a></div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="news-block col-lg-12 col-md-12 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="/public/images/resource/day2Keynote.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h4><a href="#">THE SOVEREIGNTY OF SCALE: HOW MASTERING INTEGRATED SUPPLY CHAINS CREATES REGIONAL DOMINANCE IN FMCG - Kayode Oladapo</a></h4>
                            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="download" data-presentation-url="assets/resources/day2keynote.pdf" data-image="/public/images/resource/day2Keynote.png">
                                Download Presentation</a></div>
                        </div>
                    </div>
                </div>

                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/CLp0y0h57tE?si=H3b6O6UBpGg2s5iA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
            </div>
        </div>
    </section>
    <!--End News Section -->

    <section>
        <div class="container">
            <div class="row text-center">
                <div id="modal-switch" tabindex="-1" role="dialog" aria-labelledby="modal-switch-label" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

                            <!-- Modal Header -->
                            <div class="modal-header text-white" style="background: linear-gradient(135deg, #19184d, #2c2b73);">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('/public/images/logoorange.png') }}" alt="RTM Logo" style="height: 40px; margin-right: 10px;">
                                    <h5 class="modal-title fw-bold">One Last Step to Unlock Your Resource</h5>
                                </div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body row g-0">

                                <!-- Left Side: Visual & Highlights -->
                                <div class="col-md-5 bg-light p-4 text-start d-flex flex-column justify-content-center">
                                    <img src="{{ asset('images/resource/day2Keynote.png') }}" class="img-fluid mb-3 rounded-3 shadow-sm" alt="Resource Preview">
                                    <h6 class="fw-bold">What You'll Get:</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li>📄 <strong>Full conference presentation</strong></li>
                                        <li>🎥 <strong>On-demand session videos</strong></li>
                                        <li>💡 <strong>Key insights & takeaways</strong></li>
                                    </ul>
                                </div>

                                <!-- Right Side: Form -->
                                <div class="col-md-7 p-4">
                                    <p class="text-muted mb-4">Fill in your details and we’ll send your <strong>exclusive RTM Conference 2026 resource</strong> straight to your inbox. We respect your privacy — no spam.</p>

                                    <form action="{{ route('resources.lead') }}" method="POST" id="leadForm" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="resource_type" id="keynote2">
                                        <input type="hidden" name="session_type" id="keynote">
                                        <input type="hidden" name="lead_source" id="Day 2 Keynote">
                                        <input type="hidden" name="video_url" id="video_url">
                                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                                        <div class="mb-3">
                                            {{-- <input type="text" name="full_name" class="form-control" placeholder="Full Name" required> --}}
                                            <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" placeholder="Full Name" required
                                                pattern="^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$"
                                                title="Please enter your full name (first and last name)"
                                                oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                        </div>
                                        <div class="mb-3">
                                            {{-- <input type="text" name="company" class="form-control" placeholder="Company/Organization" required> --}}
                                            <input type="text" name="company" class="form-control" value="{{ old('company') }}" placeholder="Organization" required
                                                pattern="[A-Za-z\s]{2,}"
                                                title="Enter a valid company name"
                                                oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                        </div>
                                        <div class="mb-3">
                                            {{-- <input type="email" name="email" class="form-control" placeholder="Company Email" required> --}}
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Work Email" required
                                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                                                title="Enter a valid company email (e.g., user@company.com)">
                                        </div>
                                        <div class="mb-3">
                                            {{-- <input type="phone" name="phone" class="form-control" placeholder="Phone Number" required> --}}
                                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone" required
                                                pattern="^\+?[0-9]{7,15}$"
                                                title="Enter a valid phone number (without spaces or letters)"
                                                inputmode="numeric"
                                                oninput="this.value = this.value.replace(/[^0-9+]/g, '')">
                                        </div>
                                        <div class="mb-3">
                                            {{-- <input type="text" name="role" class="form-control" placeholder="Role" required> --}}
                                            <input type="text" name="role" class="form-control" value="{{ old('role') }}" placeholder="Role" required
                                                pattern="[A-Za-z\s]{2,}"
                                                title="Role at above company"
                                                oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                        </div>

                                        <button class="btn btn-dark w-100 fw-bold py-2" id="recaptcha-button-lead" type="submit" data-type="Presentation"
                                            data-session="Keynote"
                                            data-source="Day 2 Keynote"
                                            data-image="{{ asset('images/resource/day2Keynote.png') }}">
                                            <i class="fa fa-paper-plane me-2"></i> Send Me the Resource
                                        </button>
                                    </form>

                                    <script>
                                        document.getElementById('leadForm').addEventListener('submit', function(e) {
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

                                        document.querySelectorAll('.download-btn').forEach(button => {
                                            button.addEventListener('click', function () {
                                                const type = this.getAttribute('data-type');
                                                const videoUrl = this.getAttribute('data-video-url') || "";
                                                const sessionType = this.getAttribute('data-session') || "";
                                                const leadSource = this.getAttribute('data-source') || "";
                                                const imageSrc = this.getAttribute('data-image');

                                                document.getElementById('resource_type').value = type;
                                                document.getElementById('video_url').value = videoUrl;
                                                document.getElementById('session_type').value = sessionType;
                                                document.getElementById('lead_source').value = leadSource;

                                                document.querySelector('#modal-switch .modal-title').innerText =
                                                    `Get Your ${type} Resource`;

                                                const previewImg = document.querySelector('#modal-switch .modal-body img');
                                                if (previewImg) {
                                                    previewImg.src = imageSrc;
                                                }
                                            });
                                        });
                                    </script>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>
    </section>

@endsection
