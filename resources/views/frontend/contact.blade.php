@extends('frontend.layouts.master')

@section('title', 'about')

@section('header')
    @include('frontend.layouts.header.mainheader')
@endsection

@section('content')
 <!--Page Title-->
 <section class="page-title centred" style="background-image: url({{asset('frontend/assets/images/background/page-title-5.jpg')}});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li>Get In Touch</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- contact-information -->
<section class="contact-information centred">
    <div class="auto-container">
        <div class="sec-title right">
            <h5>Get in touch with us</h5>
            <h2>We’re Always Eager To Hear From You!</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="far fa-map"></i></div>
                        <h3>Office Location</h3>
                        <p>Baneshwor, Kathmandu<br /> Nepal</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="fas fa-phone"></i></div>
                        <h3>Calling Support</h3>
                        <p>24/7 Line  <a href="tel:101005200369">+977 9841000000</a></p>
                        <p>Toll Free  <a href="tel:080098765">9841000000</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                        <h3>Email Information</h3>
                        <p><a href="mailto:support@my-domain.com">support@my-domain.com</a><br /><a href="mailto:reply@example.org">reply@example.org</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-information end -->

<!-- contact-style-two -->
<section class="contact-style-two" style="background-image: url({{asset('frontend/assets/images/background/contact-3.jpg')}});">
    <div class="auto-container">
        <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
            <div class="sec-title left light">
                <h5>try our service</h5>
                <h2>Drop Us a Line</h2>
                <p>Please feel free to reach out to us <br />if you have any queries.</p>
            </div>
            <form method="post" action="http://azim.commonsupport.com/Fionca/sendemail.php" id="contact-form" class="default-form"> 
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="username" placeholder="Your Name" required="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Email address" required="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="phone" placeholder="Phone" required="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="subject" placeholder="Subject" required="">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                        <button class="theme-btn style-one" type="submit" name="submit-form">Send Query</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- contact-style-two end -->
@endsection