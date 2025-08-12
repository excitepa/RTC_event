@extends('web.layout.overall')
@section("page_title", "FAQ's")
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(/public/images/background/5.jpg);">
    <div class="auto-container">
        <h1>FAQ's</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>FAQ's</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- FAQ's Section -->
<section class="faq-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <span class="title">FAQ'S</span>
            <h2>General <span>Questions</span></h2>
        </div>

        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!--Accordian Box-->
                    <ul class="accordion-box">
                        <!--Block-->
                        <li class="accordion block wow fadeInUp">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What is the theme of the summit?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Building a Consumer-
                                        Centric Route-to-Market:Harnessing Insights and Technology for success.
                                       </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block active-block wow fadeInUp">
                            <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>When and where will the summit take place?</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block wow fadeInUp">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>Who should attend this summit?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Sales Analysts,
                                        RTM Managers,
                                        Innovation Leaders,
                                        Distribution Expert,
                                        Commercial Leaders,
                                        Consultants,
                                        Supply Chain Expert,
                                        Marketing Managers,
                                        CPG Stakeholders,
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block wow fadeInUp">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>Is there a virtual attendance option?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, virtual attendees can participate in live sessions, Q&A, and interact via our event platform. More information will be provided upon registration.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!--Accordian Box-->
                    <ul class="accordion-box">
                        <!--Block-->
                        <li class="accordion block active-block wow fadeInUp">
                            <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What topics will be covered at the summit?</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">
                                        - Supply Chain Resilience: Strengthening CPG Operations Amidst Macroeconomic Uncertainty<br>
                                        - Data-Driven Decision Making: Leveraging Analytics to Enhance Route-to-Consumer Effectiveness<br>
                                        - Digital Disruption in Route-to-Market Strategies: Evolving Trends in Distribution and Channels.<br>
                                        - Building High-Performance Teams for Effective Route-to-Market Strategies<br>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block wow fadeInUp">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>How can I register for the summit?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">By visiting the register page on the event website at <a href="{{ route('register') }}">Registeration Link</a> or contacting our registration team via email at events@rtmwestafrica.com.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block wow fadeInUp">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>Will there be networking opportunities?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, there will be dedicated networking sessions including coffee breaks.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block wow fadeInUp">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>How can I become a sponsor or exhibitor?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">To explore sponsorship or exhibitor opportunities, please visit this link <a href="{{ route('sponsor.detail') }}">Sponsor/Exhibitor Form</a> and fill out the form.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ's Section -->

<!-- Faq Form Section -->
<section class="faq-form-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Didn’t Find Your Answer?</h2>
        </div>
        <!-- Faq Form -->
        <div class="faq-form">
            <form method="POST" action="{{ route('contact') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-12 col-md-12">
                        <input type="text" name="full_name" placeholder="Name" required>
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <textarea name="message" placeholder="Question Detail"></textarea>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 text-right">
                        <button class="theme-btn btn-style-three" type="submit"><span class="btn-title">Get an Answer</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--End Contact Section -->

@endsection