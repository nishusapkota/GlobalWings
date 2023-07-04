@extends('frontend.layouts.master')

@section('title', 'about')

@section('header')
    @include('frontend.layouts.header.mainheader')
@endsection

@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url('{{ asset('frontend/assets/images/background/page-title.jpg') }}');">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- about-style-two -->
    <section class="about-style-two mt-5">
        <div class="pattern-layer" style="background-image: url('{{ asset('frontend/assets/images/shape/shape-4.png') }}');"></div>
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
                            <figure class="image"><img src="{{ asset('frontend/assets/images/about/about.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->
@endsection
