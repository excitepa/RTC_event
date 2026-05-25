@extends('web.layout.overall')
@section("page_title", "Resources")
@section('content')

<section class="page-title" style="position: relative; background-image: url(/public/images/background/min.jpg); background-size: cover; background-position: center;">

    <!-- Dark overlay using ::before -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="auto-container" style="position: relative; z-index: 1;">
        <h1>RTM 2025 Resources</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>RTM 2025 Resources</li>
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
                <h2>Day 2 Panel Session 2</h2>
            </div>

            <div class="row">

                <iframe width="1200" height="600" src="https://www.youtube.com/embed/qTZor4UL8ww?si=GN1bN1ECWBUIo80y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/TanIWFkmNF8?si=Z5JyMuf3sVrZAkuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->

                <!-- News Block Three -->
                {{-- <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/day1.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h4><a href="#">Building a Consumer-Centric Route to <br> Market - Narendra Nagarkar</a></h4>
                            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="download" data-presentation-url="assets/resources/day1.pdf">
                                Download Presentation</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/day2.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h4><a href="#">Building Resilience in West Africa’s Dynamic Markets - Oghale Elueni</a></h4>
                            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="download" data-presentation-url="assets/resources/day2.pdf">
                                Download Presentation</a></div>
                        </div>
                    </div>
                </div> --}}

                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/CLp0y0h57tE?si=H3b6O6UBpGg2s5iA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
            </div>
        </div>
    </section>
    <!--End News Section -->

    <section>
        <div class="container">
            <div class="row text-center">
                <div id="modal-switch" tabindex="-1" role="dialog" aria-labelledby="modal-switch-label" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title centered">One last step</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- <p>Modal body text goes here.</p> --}}
                                <form action="{{ route('resources.lead') }}" method="POST" id="leadForm" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    <input type="hidden" name="resource_type" id="resource_type">
                                    <input type="hidden" name="video_url" id="video_url">
                                    
                                    <div class="mb-3">
                                        <input type="text" name="full_name" class="form-control" id="exampleFormControlInput1" placeholder="Fullname">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="company" class="form-control" id="exampleFormControlInput1" placeholder="Company/Organization">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Company Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="role" class="form-control" id="exampleFormControlInput1" placeholder="Role">
                                    </div>
                                        <br/> 
                                        <button class="btn btn-dark btn-medium uppercase" id="recaptcha-button-lead" type="submit">
                                        <i class="fa fa-paper-plane"></i> Submit
                                        </button>
                                </form>

                                @push('scripts')
                                @endpush
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
                                </script> 

                                <script>
                                    document.querySelectorAll('.download-btn').forEach(button => {
                                        button.addEventListener('click', function () {
                                            const type = this.getAttribute('data-type');
                                            const videoUrl = this.getAttribute('data-video-url') || "";

                                            document.getElementById('resource_type').value = type;
                                            document.getElementById('video_url').value = videoUrl;
                                        });
                                    });
                                </script>
                                {{-- <script>
                                    // When any download button is clicked
                                    document.querySelectorAll('.download-btn').forEach(button => {
                                        button.addEventListener('click', function () {
                                            const url = this.getAttribute('data-presentation-url');
                                            document.getElementById('presentation-url').value = url;
                                        });
                                    });
                                </script> --}}
                            </div>
                        </div>
                    </div>
                </div>                  
                
            </div>
        </div>
    </section>

@endsection
