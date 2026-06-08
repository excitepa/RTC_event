<header class="main-header header-style-two">
    @php
        $editionYear = request()->route('year');
    @endphp

    @php
        $routePrefix = $editionYear ? 'rtm.' : '';
    @endphp

     @if($year == 2025)
        <div class="main-box">
    @else
        <div class="main-box" style="background-color: #19184d">
    @endif
        <div class="auto-container clearfix">
            <div class="logo-box">
            @if($year == 2025)
                <div class="logo"><a href="{{ route('index') }}"><img src="{{asset('/public/images/logo1.png') }}" alt="" title=""></a></div>
            @else
                <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('/public/images/logo_blue_inverse.png') }}" alt="" title=""></a></div>
            @endif
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
                            <li>
                                @if($year == 2025)
                                <a href="{{ $editionYear ? route('rtm.index', ['year' => $editionYear]) : route('index') }}">
                                    Home
                                </a>
                                @else
                                <a href="{{ route('index') }}" 
                                style="{{ $year != 2025 ? 'color: white' : '' }}">
                                    Home
                                </a>
                                @endif
                            </li>

                            <li class="dropdown">
                                @if($year == 2025)
                                <a href="{{ $editionYear ? route('rtm.about', ['year' => $editionYear]) : route('about') }}">
                                    About
                                </a>
                                @else
                                <a href="{{ route('about') }}" 
                                style="{{ $year != 2025 ? 'color: white' : '' }}">
                                    About
                                </a>
                                @endif

                                <ul>
                                    <li><a href="{{ $editionYear ? route('rtm.about', ['year' => $editionYear]) : route('about') }}">About Us</a></li>
                                    <li><a href="{{ $editionYear ? route('rtm.sponsor.detail', ['year' => $editionYear]) : route('sponsor.detail') }}">Sponsor Package</a></li>
                                </ul>
                            </li>

                            @if($year == 2025)
                            <li>
                                <a href="{{ $editionYear ? route('rtm.speakers', ['year' => $editionYear]) : route('speakers') }}">Speakers</a>
                            </li>
                            @else
                            {{-- <li>
                                <a href="{{ route('speakers') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Speakers</a>
                            </li> --}}
                            <li>
                                <a href="{{ $editionYear ? route('rtm.speakers', ['year' => $editionYear]) : route('speakers') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Speakers</a>
                            </li>
                            @endif

                            @if($year == 2025)
                            <li>
                                <a href="{{ $editionYear ? route('rtm.schedule', ['year' => $editionYear]) : route('schedule') }}">Schedule</a>
                            </li>
                            @else
                            <li>
                                <a href="{{ $editionYear ? route('rtm.schedule', ['year' => $editionYear]) : route('schedule') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Schedule</a>
                            </li>
                            @endif

                            <li class="dropdown">
                                <a href="#" style="{{ $year != 2025 ? 'color: white' : '' }}">Event Resources</a>
                                @if($year == 2025)
                                <ul>
                                    <li><a href="{{ route('keynote.resources') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Keynote Resources</a></li>
                                    <li><a href="{{ route('panel.resources') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Panel Resources</a></li>
                                    <li><a href="{{ route('gallery') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Gallery</a></li>
                                </ul>
                                @else
                                <ul style="background-color: #19184d">
                                    <li><a href="{{ route('keynote.resources') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Keynote Resources</a></li>
                                    <li><a href="{{ route('panel.resources') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Panel Resources</a></li>
                                    <li><a href="{{ route('gallery') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">Gallery</a></li>
                                </ul>
                                @endif
                            </li>

                            <li>
                                <a href="{{ route('faq') }}" style="{{ $year != 2025 ? 'color: white' : '' }}">FAQ</a>
                            </li>
                            {{-- @if($year == 2026) --}}
                            <li>
                                <a href="{{ route('rtm.index', ['year' => 2025]) }}" style="{{ $year != 2025 ? 'color: white' : '' }}">2025</a>
                            </li>
                            {{-- @else --}}
                            {{-- @endif --}}
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Outer box -->
                <div class="outer-box">
                    <!--Search Box-->
                    {{-- <div class="search-box-btn"><span class="flaticon-search"></span></div> --}}

                    <!-- Button Box -->
                    {{-- <div class="btn-box">
                        <a href="{{ route('sponsor.detail') }}" class="theme-btn btn-style-three"><span class="btn-title">Be a Sponsor</span></a>
                    </div> --}}

                    <div class="btn-box">
                        <a href="{{ route('register') }}" class="theme-btn btn-style-two"><span class="btn-title">Register to Attend</span></a>
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
            <div class="nav-logo"><a href="{{ route('index') }}"><img src="images/logo1.png" alt="" title=""></a></div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div><!-- End Mobile Menu -->
</header>