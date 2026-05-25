<!-- Main Header-->
<header class="main-header header-style-two">
    <div class="main-box">
        <div class="auto-container clearfix">
            <div class="logo-box">
                <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('/public/images/logo1.png') }}" alt="" title=""></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu-button"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li><a href="{{ route('index') }}">Home</a>
                            <li class="dropdown"><a href="{{ route('about') }}">About</a>
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('sponsor.detail') }}">Sponsor Package</a></li>
                                    {{-- <li><a href="{{ route('faq') }}">FAQ's</a></li> --}}
                                    
                                </ul>
                            </li>
                            <li><a href="{{ route('speakers') }}">Speakers</a></li>
                            <li><a href="{{ route('schedule') }}">Schedule</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Outer box -->
                <div class="outer-box">
                    <!--Search Box-->
                    {{-- <div class="search-box-btn"><span class="flaticon-search"></span></div> --}}

                    <!-- Button Box -->
                    <div class="btn-box">
                        <a href="{{ route('sponsor.detail') }}" class="theme-btn btn-style-three"><span class="btn-title">Be a Sponsor</span></a>
                    </div>

                    <div class="btn-box">
                        <a href="{{ route('register') }}" class="theme-btn btn-style-two"><span class="btn-title">Register</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('/public/images/logo1.png') }}" alt="" title=""></a></div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!--End Main Header -->