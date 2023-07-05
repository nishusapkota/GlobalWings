@extends('frontend.layouts.master')
@section('title','GrowthWings')
@section('header')
@include('frontend.layouts.header.mainheader')
@endsection
@section('content')
 <!-- banner-section -->
 <section class="banner-section style-two">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        <div class="slide-item">
            <div class="image-layer" style="background-image: url('{{ asset('frontend/assets/images/banner/banner-4.jpg') }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h5>towards a bright future </h5>
                    <h1>A better future <br />starts here</h1>
                    <p>We support students by introducing Universities abroad and <br />provide help in choosing the best courses.</p>
                    <div class="btn-box">
                        <a href="{{route('enquiry')}}" class="theme-btn style-two"><i class="fas fa-atom"></i>Enquiry Now</a>
                    </div>
                </div>  
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:{{asset('frontend/assets/images/banner/banner-5.jpg')}}"></div>
            <div class="auto-container">
                <div class="content-box centred">
                    <h1>A better future <br />starts here</h1>
                    <p>We support students by introducing Universities abroad and <br />provide help in choosing the best courses.</p>
                    <div class="btn-box">
                        <a href="{{route('enquiry')}}" class="theme-btn style-two"><i class="fas fa-atom"></i>Enquiry Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:{{asset('frontend/assets/images/banner/banner-6.jpg')}}"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>A better future <br />starts here</h1>
                    <p>We support students by introducing Universities abroad and <br />provide help in choosing the best courses.</p>
                    <div class="btn-box">
                        <a href="{{route('enquiry')}}" class="theme-btn style-two mar-0"><i class="fas fa-atom"></i>Enquiry Now</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

  <!-- clients-section -->
  <section class="clients-section">
    <div class="auto-container">
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <figure class="client-logo"><a href="{{route('index')}}"><img src="{{asset('frontend/assets/images/clients/clients-1.png')}}" alt=""></a></figure>
            <figure class="client-logo"><a href="{{route('index')}}"><img src="{{asset('frontend/assets/images/clients/clients-2.png')}}" alt=""></a></figure>
            <figure class="client-logo"><a href="{{route('index')}}"><img src="{{asset('frontend/assets/images/clients/clients-3.png')}}" alt=""></a></figure>
            <figure class="client-logo"><a href="{{route('index')}}"><img src="{{asset('frontend/assets/images/clients/clients-4.png')}}" alt=""></a></figure>
            <figure class="client-logo"><a href="{{route('index')}}"><img src="{{asset('frontend/assets/images/clients/clients-5.png')}}" alt=""></a></figure>
        </div>
    </div>
</section>
<!-- clients-section end -->


<!-- Destination-Panel -->
<section class="feature-style-two">
    <div class="auto-container">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <h1 class="font-weight-bold">Our Destinations</h1>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/Destinations/newZealand.png')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="{{route('destination-detail')}}">Study in New Zealand</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/Destinations/canada.png')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="{{route('destination-detail')}}">Study in Canada</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/Destinations/uk.png')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="{{route('destination-detail')}}">Study in UK</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/Destinations/australia.png')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="{{route('destination-detail')}}">Study in Australia</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Destination-Panel end -->


<!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: {{asset('frontend/assets/images/shape/shape-4.png')}}"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div id="content_block_three">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>About GrowthWings</h5>
                            <h2>Learn New Skills to Go Ahead for Your Career</h2>
                        </div>
                        <div class="text">
                            <p>GrowthWings Education and Visa Services is leading education advisory and consulting service organization with unprecedented access to desirable students towards accredited top Universities and Colleges across the globe.</p>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-shield-1"></i></div>
                                        <h5><a href="">Skilled Instructor</a></h5>
                                        <p>Distinctively provide access mutfuncto uses whereas communicate leveraged services.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-broker"></i></div>
                                        <h5><a href="">SOP Guidance</a></h5>
                                        <p>Distinctively provide access mutfuncto uses whereas communicate leveraged services.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-safe-5"></i></div>
                                        <h5><a href="">High Visa Success Rate</a></h5>
                                        <p>Distinctively provide access mutfuncto uses whereas communicate leveraged services.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-briefcase"></i></div>
                                        <h5><a href="">Growing Succes</a></h5>
                                        <p>Distinctively provide access mutfuncto uses whereas communicate leveraged services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div id="image_block_two">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('frontend/assets/images/about/about.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->

   <!-- Course-section -->
   <section class="team-section">
    <div class="auto-container">
        <div class="upper-box clearfix">
            <div class="sec-title style-two pull-left">
                <h5>Test Preparation</h5>
                <h2>Pick A Course To Get Started</h2>
            </div>
        </div>
        <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/assets/images/courses/PTE.png')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="{{route('destination-detail')}}">PTE Academic</a></h3>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/assets/images/courses/IELTS.png')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="{{route('destination-detail')}}">IELTS</a></h3>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/assets/images/courses/TOEFL.png')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="{{route('destination-detail')}}">TOFEL IBT</a></h3>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/assets/images/courses/Japanese.png')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="japanese.html">Japanese Language</a></h3>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('frontend/assets/images/courses/korean.png')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="{{route('destination-detail')}}">Korean Language</a></h3>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Course-section end -->

   <!-- testimonial-style-two -->
   <section class="testimonial-style-two">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>testimonials</h5>
            <h2>What People Say</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
            <div class="testimonial-content">
                <div class="inner-box">
                    <div class="text">
                        <i class="fas fa-quote-right"></i>
                        <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                    </div>
                    <div class="author-info">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/testimonial-6.png')}}" alt=""></figure>
                        <h5>Nelson Edward</h5>
                        <span class="designation">Insurance Group</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-content">
                <div class="inner-box">
                    <div class="text">
                        <i class="fas fa-quote-right"></i>
                        <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                    </div>
                    <div class="author-info">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/testimonial-7.png')}}" alt=""></figure>
                        <h5>Thomas Saleh</h5>
                        <span class="designation">Insurance Group</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-content">
                <div class="inner-box">
                    <div class="text">
                        <i class="fas fa-quote-right"></i>
                        <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                    </div>
                    <div class="author-info">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/testimonial-8.png')}}" alt=""></figure>
                        <h5>Nelson Edward</h5>
                        <span class="designation">Insurance Group</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-content">
                <div class="inner-box">
                    <div class="text">
                        <i class="fas fa-quote-right"></i>
                        <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                    </div>
                    <div class="author-info">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/testimonial-6.png')}}" alt=""></figure>
                        <h5>Nelson Edward</h5>
                        <span class="designation">Insurance Group</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-content">
                <div class="inner-box">
                    <div class="text">
                        <i class="fas fa-quote-right"></i>
                        <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                    </div>
                    <div class="author-info">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/testimonial-7.png')}}" alt=""></figure>
                        <h5>Thomas Saleh</h5>
                        <span class="designation">Insurance Group</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-content">
                <div class="inner-box">
                    <div class="text">
                        <i class="fas fa-quote-right"></i>
                        <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                    </div>
                    <div class="author-info">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/testimonial-8.png')}}" alt=""></figure>
                        <h5>Nelson Edward</h5>
                        <span class="designation">Insurance Group</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-style-two end -->


@endsection