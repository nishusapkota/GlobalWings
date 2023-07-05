 <!-- main header -->
 <header class="main-header style-two">
    <div class="header-upper">
        <div class="auto-container">
            <div class="upper-inner clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="{{asset('frontend/assets/images/growth_wings_1.png')}}" alt=""></a></figure>
                </div>
                <div class="info-box pull-right">
                    <ul class="info-list clearfix">
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            <p>Call Our Support<br /><a href="tel:01005200369">9841000000</a></p>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Baneshwor, Kathmandu, <br />Nepal</p>
                        </li>
                        <li>
                            <i class="far fa-clock"></i>
                            <p>Our Working Hours <br />Mon - Sat: 8 am - 6 pm</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="outer-box">
            <div class="auto-container">
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{route('index')}}">Home</a>
                                </li> 
                                <li class="{{ request()->is('about') ? 'current' : '' }}"><a href="{{route('about')}}">About Us</a>
                                </li>
                                <li class="dropdown {{ request()->is('destination*') ? 'current' : '' }}"><a href="{{route('destination')}}">Destinations</a>
                                    <ul>
                                        <li class="{{ request()->is('/destination-detail') ? 'current' : '' }}"><a href="{{route('destination-detail')}}">Study in Australia</a></li>
                                        <li class="{{ request()->is('/destination-detail') ? 'current' : '' }}"><a href="{{route('destination-detail')}}">Study in Canada</a></li>
                                        <li class="{{ request()->is('/destination-detail') ? 'current' : '' }}"><a href="{{route('destination-detail')}}">Study in USA</a></li>
                                        <li class="{{ request()->is('/destination-detail') ? 'current' : '' }}"><a href="{{route('destination-detail')}}">Study in UK</a></li>
                                        <li class="{{ request()->is('/destination-detail') ? 'current' : '' }}"><a href="{{route('destination-detail')}}">Study in NewZealand</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown {{ request()->is('service*') ? 'current' : '' }}"><a href="{{route('service')}}">Test Preparations</a>
                                    <ul>
                                        <li {{ request()->is('/service-detail') ? 'current' : '' }}><a href="{{route('service-detail')}}">IELTS</a></li>
                                        <li {{ request()->is('/service-detail') ? 'current' : '' }}><a href="{{route('service-detail')}}">PTE Academic</a></li>
                                        <li {{ request()->is('/service-detail') ? 'current' : '' }}><a href="{{route('service-detail')}}">TOEFL IBT</a></li>
                                        <li {{ request()->is('/service-detail') ? 'current' : '' }}><a href="{{route('service-detail')}}">Japanese Language</a></li>
                                        <li {{ request()->is('/service-detail') ? 'current' : '' }}><a href="{{route('service-detail')}}">Korean Language</a></li>
                                        
                                    </ul>
                                </li>                             
                                <li class="{{ request()->is('contacts') ? 'current' : '' }}"><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="menu-right-content clearfix">
                        <div class="btn-box">
                            <a href="{{route('enquiry')}}" class="theme-btn style-two">Enquiry Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="{{asset('frontend/assets/images/growth_wings_1.png')}}" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="{{asset('frontend/assets/images/growth_wings_1.png') }}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Baneshwor, Kathmandu, Nepal</li>
                <li><a href="tel:+8801682648101">+977 9841000000</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
