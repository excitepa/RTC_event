@extends('web.layout.overall')
@section("page_title", "Resources")
@section('content')

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
                <span class="title">RTM 2025 Resources</span>
                <h2>Panel Sessions</h2>
            </div>

            <div class="row">

                {{-- <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="images/resource/day1keynote.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h4><a href="#">Building a Consumer-Centric Route to Market <br> Day 1 - Keynote Speech</a></h4>
                            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="video" data-video-url="https://www.youtube.com/embed/tteHJUCQjUc?si=yThlfBPJ104Y9AuM" data-session="keynote1">
                                Watch Full Session</a></div>
                        </div>
                    </div>
                </div> --}}

                <!-- News Block Three -->
                <div class="news-block col-lg-12 col-md-12 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="images/resource/macro.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h4><a href="#">Economic Factors Impacting Consumer Markets. <br> Day 1 - Panel Session 1</a></h4>
                            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" data-type="video" data-video-url="https://www.youtube.com/embed/CLp0y0h57tE?si=H3b6O6UBpGg2s5iA" data-session="panel1">
                                Watch Full Session</a></div>
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

                                    <input type="hidden" name="resource_type" id="resource_type">
                                    <input type="hidden" name="video_url" id="video_url">
                                    <input type="hidden" name="session_type" id="session_type">

                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    {{-- <input type="hidden" name="presentation_url" id="presentation-url"> --}}
                                    <div class="mb-3">
                                        {{-- <label for="exampleFormControlInput1" class="form-label">Email address</label> --}}
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
                                    document.getElementById("recaptcha-button-lead").addEventListener("click", function(e) {
                                        e.preventDefault();
                    
                                        const form = document.getElementById("leadForm");
                    
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

                                <script>
                                    document.querySelectorAll('.download-btn').forEach(button => {
                                        button.addEventListener('click', function () {
                                            const type = this.getAttribute('data-type');
                                            const videoUrl = this.getAttribute('data-video-url') || "";
                                            const sessionType = this.getAttribute('data-session') || "";

                                            document.getElementById('resource_type').value = type;
                                            document.getElementById('video_url').value = videoUrl;
                                            document.getElementById('session_type').value = sessionType;
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
