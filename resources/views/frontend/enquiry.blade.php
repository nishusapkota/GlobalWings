@extends('frontend.layouts.master')

@section('title', 'about')

@section('header')
    @include('frontend.layouts.header.mainheader')
@endsection

@section('content')

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('frontend/assets/images/background/page-title-2.jpg')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Apply Now</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Enquiry</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


        <!-- support-section -->
        <section class="support-section service-page-1 mt-4 form-container">
            <div class="auto-container">
              <div class="inner-container">
                <div class="row clearfix">
                  <div class="col-lg-7 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                      <div class="sec-title light left">
                        <h5>enquiry</h5>
                        <h2>Message Us</h2>
                        <p>
                          If you have any queries related to our service then please
                          feel free to contact us anytime.
                        </p>
                      </div>
      
                      <form>
                        <div class="form-group">
                          <input type="text" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                          <input type="email" placeholder="Email address" />
                        </div>
                        <div class="form-group">
                          <input type="tel" placeholder="Phone" />
                        </div>
                        <div class="form-group">
                          <select>
                            <option selected disabled>Enquiry About</option> 
                            <option>VISA</option>
                            <option>COURSE</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select>
                            <option selected disabled>Preferred Destination</option>
                            <option>AUSTRALIA</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>CANADA</option>
                            <option>NEW ZEALAND</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="form-group message-btn">
                          <button type="submit" class="theme-btn style-one">
                            Submit
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 col-sm-12 info-column">
                    <div class="info-inner">
                      <figure class="image-box">
                        <img src="{{asset('frontend/assets/images/resource/info-1.jpg')}}" alt="" />
                      </figure>
                      <div class="info-box">
                        <figure class="info-logo">
                          <img src="{{asset('frontend/assets/images/icons/info-logo.png')}}" alt="" />
                        </figure>
                        <div class="icon-box"><i class="fas fa-phone"></i></div>
                        <h2><a href="tel:18003698527">(+977) 9841000000</a></h2>
                        <div class="email">
                          <a href="mailto:support@my-domain.net"
                            >support@my-domain.net</a
                          >
                        </div>
                        <ul class="list-item clearfix">
                          <li>.&nbsp;<a href="{{route('index')}}">Experienced</a>&nbsp;.</li>
                          <li><a href="{{route('index')}}">Specialized</a>&nbsp;.</li>
                          <li><a href="{{route('index')}}">Professional</a>&nbsp;.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- support-section end -->
@endsection