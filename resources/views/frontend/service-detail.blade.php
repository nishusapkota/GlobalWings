@extends('frontend.layouts.master')

@section('title', 'service')

@section('header')
    @include('frontend.layouts.header.mainheader')
@endsection

@section('content')
   <!--Page Title-->
   <section class="page-title centred" style="background-image: url({{asset('frontend/assets/images/background/page-title-4.jpg')}});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>IELTS</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li>IELTS</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- service-details -->
<section class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-style-one">
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/courses/IELTS.png')}}" alt=""></figure>
                        <div class="sec-title left">
                            <h2>IELTS</h2>
                        </div>
                        <div class="text">
                            <p>The International English Language Testing System (IELTS) is the world’s most popular high-stakes English-language proficiency test for study, work and migration, with more than 2.2 million tests taken each year. IELTS assesses all of your English skills — reading, writing, listening and speaking — and is designed to reflect real life use of English. The IELTS test is developed by some of the world’s leading experts in language assessment. It has an excellent international reputation, and is accepted by over 10,000 organisations worldwide, including schools, universities, employers, immigration authorities, and professional bodies. Over 1100 students did their IELTS courses with Growthwings in 2019 for a reason! The results we garnered in 2019 and year prior to that are exceptional. There is lot of emphasis on the IELTS Band Descriptors. Our mock testing is unique! Our students get a better feel of the real test than students who study their IELTS elsewhere. Our students get the real picture of the progress they have made in our classes and know exactly if they are prepared for the real test.</p>
                        </div>
                    </div>
                    
                  
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <div class="sidebar-categories">
                        <div>
                            <h3 class="mb-4">Test Preparation</h3>
                            <ul class="categories-list clearfix">
                                <li><a href="pte.html" >PTE Academic</a></li>
                                <li><a href="ielts.html" class="active">IELTS</a></li>
                                <li><a href="tofel.html">TOFEL IBT</a></li>
                                <li><a href="japanese.html">Japanese Language</a></li>
                                <li><a href="korean.html">Korean Language</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->


<!--form-section-->
<section class="form-section auto-container">
    <h3 class="mb-4">Speak with our experts</h3>

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
</section>
<!--form-section end-->


@endsection