@extends('web.layout.overall')
@section("page_title", "Speakers")
@section('content')

<!--Page Title-->
<!--<section class="page-title" style="background-image:url(/public/images/background/bg7.png);">-->
<!--    <div class="auto-container">-->
<!--        <h1>Speakers</h1>-->
<!--        <ul class="bread-crumb clearfix">-->
<!--            <li><a href="{{ route('index') }}">Home</a></li>-->
<!--            <li style="color: white;" onmouseover="this.style.color='#19184D';" onmouseout="this.style.color='white';">Speakers</li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</section>-->
<section class="page-title" style="position: relative; background-image: url(/public/images/background/bg7.png); background-size: cover; background-position: center;">

    <!-- Dark overlay using ::before -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="auto-container" style="position: relative; z-index: 1;">
        <h1 style="color: white">Speakers</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Speakers</li>
        </ul>
    </div>
</section>
<!--End Page Title-->


    <section class="speakers-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                {{-- <span class="title">Speakers</span> --}}
                <h2>Key note Speakers</h2>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/narendranagarkar/"><img src="/public/images/background/nevara.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/narendranagarkar/">Narendra Nagarkar</a></h4>
                            <span class="designation">Chief Executive Officer</span>
                            <span class="designation">Bhojsons Group Plc</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/narendranagarkar/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/oghale-elueni-72203243/"><img src="/public/images/background/Oghale.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/oghale-elueni-72203243/">Oghale Elueni</a></h4>
                            <span class="designation">Managing Director</span>
                            <span class="designation">PZ Cussons</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/oghale-elueni-72203243/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <section class="speakers-section-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                {{-- <span class="title">Speakers</span> --}}
                <h2>Moderators</h2>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/oluwafemi-ogundoro-1039944b"><img src="/public/images/background/femi.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/oluwafemi-ogundoro-1039944b">Femi Ogundoro</a></h4>
                            <span class="designation">Group Managing Director</span>
                            <span class="designation">Maxima Media Group</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/oluwafemi-ogundoro-1039944b"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/olatunji-gbesan/"><img src="/public/images/background/gbesan.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/olatunji-gbesan/">Olatunji Gbesan</a></h4>
                            <span class="designation">Managing Partner</span>
                            <span class="designation">Crimson Oak Partners</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/olatunji-gbesan/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/ifeanyi-benjamin-10639966/"><img src="/public/images/background/ifeanyi.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/ifeanyi-benjamin-10639966/">Ifeanyi Benjamin</a></h4>
                            <span class="designation">Value to Market Platforms Director</span>
                            <span class="designation">Coca-Cola Company</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/ifeanyi-benjamin-10639966/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="speaker-block-three col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="/public/images/background/mark.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="#">Mark Wilhem</a></h4>
                            <span class="designation">Managing Director</span>
                            <span class="designation">MarkWandCo</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="speaker-block-three col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.linkedin.com/in/c-abrianna-adeola-bossman-6a12497/"><img src="/public/images/background/abrianna.png" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="https://www.linkedin.com/in/c-abrianna-adeola-bossman-6a12497/">Abrianna Bossman</a></h4>
                            <span class="designation">Human Resources Practitioner</span>
                            <span class="designation"></span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="https://www.linkedin.com/in/c-abrianna-adeola-bossman-6a12497/"><i class="fab fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <section class="speakers-section-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                {{-- <span class="title">Speakers</span> --}}
                <h2>Panelists</h2>
            </div>

                <div class="row">

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/feyiolubodun/"><img src="/public/images/background/feyi1.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/feyiolubodun/">Feyi Olubodun</a></h4>
                                <span class="designation">CEO, Managing Partner</span>
                                <span class="designation">Open Squares Africa</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/feyiolubodun/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/tola-bamigbaiye-elatuyi/"><img src="/public/images/background/tola1.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/tola-bamigbaiye-elatuyi/">Tola Bamigbaiye-Elatuyi</a></h4>
                                <span class="designation">Chair, Brand Advisory Board</span>
                                <span class="designation">Meristem Nigeria</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/tola-bamigbaiye-elatuyi/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/victorndukauba/"><img src="/public/images/background/victor1.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/victorndukauba/">Victor Ndukauba</a></h4>
                                <span class="designation">Deputy Managing Director</span>
                                <span class="designation">Afrinvest West Africa</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/victorndukauba/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/anthonilious-okojie-91654a13/"><img src="/public/images/background/antholinius.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/anthonilious-okojie-91654a13/">Anthonilious Okojie</a></h4>
                                <span class="designation">Country Head, Sales</span>
                                <span class="designation">Lafarge Africa PLC</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/anthonilious-okojie-91654a13/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/nwodoemeka/"><img src="/public/images/background/emeka1.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/nwodoemeka/">Emeka Nwodo</a></h4>
                                <span class="designation">Category Manager, Gum & Jellies</span>
                                <span class="designation">Perfetti Van Melle</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/nwodoemeka/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/bukola-akinpelu-%F0%9F%8F%A0-9707162a/"><img src="/public/images/background/bukola1.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/bukola-akinpelu-%F0%9F%8F%A0-9707162a/">Bukola Akinpelu</a></h4>
                                <span class="designation">Consumer & Market Insight Manager</span>
                                <span class="designation">Unilever</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/bukola-akinpelu-%F0%9F%8F%A0-9707162a/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/adesegun-orafidiya-mba-fbcs-3348049/"><img src="/public/images/background/adesegun1.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/adesegun-orafidiya-mba-fbcs-3348049/">Adesegun Orafidiya</a></h4>
                                <span class="designation">Head of Information and Technology</span>
                                <span class="designation">British American Tobacco (BAT)</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/adesegun-orafidiya-mba-fbcs-3348049/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Speaker Block -->
                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/anselem-ikeotuonye-66212049/"><img src="/public/images/background/anslem.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/anselem-ikeotuonye-66212049/">Anselem Ikeotuonye</a></h4>
                                <span class="designation">Commercial Director</span>
                                <span class="designation">Nigerbev Limited</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/anselem-ikeotuonye-66212049/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/ayobamiaiyedogbon/"><img src="/public/images/background/ayobami.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/ayobamiaiyedogbon/">Ayobami Aiyedogbon</a></h4>
                                <span class="designation">Commercial Director</span>
                                <span class="designation">Danone</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/ayobamiaiyedogbon/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/franklinozekhome/"><img src="/public/images/background/franklin.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/franklinozekhome/">Franklin Ozekhome</a></h4>
                                <span class="designation">Pop Culture Strategist</span>
                                <span class="designation">Maskvrade</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/franklinozekhome/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/peter-research/"><img src="/public/images/background/mofoke.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/peter-research/">Peter Mokofe</a></h4>
                                <span class="designation">Research Director, Insights</span>
                                <span class="designation">Kantar</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/peter-research/"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/adebola-arotiowa-a67aa1196/"><img src="/public/images/background/arotiowa.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/adebola-arotiowa-a67aa1196/">Bola Arotiowa</a></h4>
                                <span class="designation">Chief Commercial Officer</span>
                                <span class="designation">Chivita|Hollandia</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/adebola-arotiowa-a67aa1196/"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/godson-nkeokelonye-3b444922/"><img src="/public/images/background/godson.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/godson-nkeokelonye-3b444922/">Godson Nkeokelonye</a></h4>
                                <span class="designation">MD/CEO</span>
                                <span class="designation">Excite Panacea</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/godson-nkeokelonye-3b444922/"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/segun-ogunleye/"><img src="/public/images/background/segun.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/segun-ogunleye/">Segun Ogunleye</a></h4>
                                <span class="designation">Head of Marketing (Africa Partner Markets)</span>
                                <span class="designation">Diageo</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/segun-ogunleye/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/prahlad-gangadharan-12818014/"><img src="/public/images/background/prahlad.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/prahlad-gangadharan-12818014/">Prahlad Gangadharan</a></h4>
                                <span class="designation">CCO</span>
                                <span class="designation">OmniRetail</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/prahlad-gangadharan-12818014/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/austyne-umeh-51aa6619/"><img src="/public/images/background/austyne.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/austyne-umeh-51aa6619/">Austyne Umeh</a></h4>
                                <span class="designation">Digital & IT Transformation Head, Africa</span>
                                <span class="designation">PZ Cussons</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/austyne-umeh-51aa6619/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/omolara-adagunodo/"><img src="/public/images/background/omolara.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/omolara-adagunodo/">Omolara Adagunodo</a></h4>
                                <span class="designation">Data Insights Analytics and AI Manager</span>
                                <span class="designation">Coca Cola HBC </span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/omolara-adagunodo/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/omolara-adagunodo/"><img src="/public/images/background/modupe.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/omolara-adagunodo/">Modupe Femi-Okunbanjo</a></h4>
                                <span class="designation">Finance Controller</span>
                                <span class="designation">Unilever</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/omolara-adagunodo/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/ugodre-obi-chukwu-9a802326/"><img src="/public/images/background/ugo.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/ugodre-obi-chukwu-9a802326/">Ugodre Obi-Chukwu</a></h4>
                                <span class="designation">Founder/CEO</span>
                                <span class="designation">Nairametrics</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/ugodre-obi-chukwu-9a802326/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/barongasiodu/"><img src="/public/images/background/barong.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/barongasiodu/">Barong Asiodu</a></h4>
                                <span class="designation">Head, Corporate Planning & Strategy</span>
                                <span class="designation">Rite Foods Limited</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/barongasiodu/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/ezekiel-olajolo/"><img src="/public/images/background/ezekiel.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/ezekiel-olajolo/">Ezekiel Olajolo</a></h4>
                                <span class="designation">Product</span>
                                <span class="designation">Moniepoint</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/ezekiel-olajolo/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="speaker-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="https://www.linkedin.com/in/maureenifada/"><img src="/public/images/background/maureen.png" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="https://www.linkedin.com/in/maureenifada/">Maureen Ifada</a></h4>
                                <span class="designation">Marketing Director</span>
                                <span class="designation">FrieslandCampina</span>
                            </div>
                            <div class="social-box">
                                <ul class="social-links social-icon-colored">
                                    <li><a href="https://www.linkedin.com/in/maureenifada/"><i class="fab fa-linkedin"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>
<!-- End Speakers Section -->

@endsection