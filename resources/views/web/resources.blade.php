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
                <h2>Keynote Presentations</h2>
            </div>

            <div class="row">

                <!-- News Block Three -->
                <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="/public/images/resource/day1.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h4><a href="#">Building a Consumer-Centric Route to <br> Market - Narendra Nagarkar</a></h4>
                            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" 
                                {{-- data-presentation-url="assets/resources/day1.pdf" --}}
                                >Download Presentation</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="/public/images/resource/day2.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h4><a href="#">Building Resilience in West Africa’s Dynamic Markets - Oghale Elueni</a></h4>
                            <div class="btn-box"><a href="#" data-toggle="modal" data-target="#modal-switch" class="read-more download-btn" 
                                {{-- data-presentation-url="assets/resources/day2.pdf" --}}
                                >Download Presentation</a></div>
                        </div>
                    </div>
                </div>
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

    {{-- @if(session('download_url'))
        <script>
            window.onload = function () {
                const downloadUrl = "{{ asset(session('download_url')) }}";
                const link = document.createElement('a');
                link.href = downloadUrl;
                link.download = '';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            };
        </script>
    @endif --}}

@endsection
