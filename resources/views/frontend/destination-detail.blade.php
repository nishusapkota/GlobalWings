@extends('frontend.layouts.master')
@section('title','GrowthWings')
@section('header')
@include('frontend.layouts.header.mainheader')
@endsection
@section('content')
  <!--Page Title-->
  <section class="page-title centred" style="background-image: url( {{asset('frontend/assets/images/background/page-title-4.jpg')}} ;">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Study in Australia</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('destination')}}">Destinations</a></li>
                <li>Australia</li>
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
                        <figure class="image-box"><img src="{{asset('frontend/assets/images/Destinations/Australia/Australia.png')}}" alt=""></figure>
                        <div class="sec-title left">
                            <h2>Study in Australia</h2>
                        </div>
                        <div class="text">
                            <p>Standing proud with 8 of the top 100 universities in the world, Australia is much more than just kangaroos. An increasing number of Indian students are opting for Australia to study abroad for its world-class education, post-study work opportunities and excellent quality of living. Whatever course you choose to undertake, you’ll be assured of unbeatable academic excellence and support system for international students. When you opt to study in Australia, you get to choose from 22,000 courses available in 1,100 universities and institutions, acquire globally-recognised degrees, explore various scholarship opportunities and receive education from the best instructors in the world. Australian government spends over £200,000,000 annually on international scholarships. This ensures that even the students with humble backgrounds are able to experience a world-class education without having to worry about funds arrangement. While most scholarships cover tuition fee, students enrolling for research programs may also be able to get their living expenses covered.</p>
                        </div>
                        <div>
                            <h4 class="mb-4">Fun fact About Australia</h4>
                            <ul class="list-item clearfix">
                                <li>47% per cent of the total population of Australia is born outside the country.</li>
                                <li>Women in Australia got the right to vote in 1902, second after New Zealand.</li>
                                <li>Over 80% of its population lives within 100 kilometers of the coast which makes it the most urbanized coastal dwelling populations.</li>
                                <li>Looking for a mail box near you? The Great Barrier Reef has one!</li>
                                <li>The sports capital of the world has 70% of its total population participating at least once a week in a particular recreational activity or sport.</li>
                                <li>4 out of 10 Australians are migrants.</li>
                            </ul>
                        </div>
                    </div>
                    
                  
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <div class="sidebar-categories">
                        <div>
                            <h3 class="mb-4">Study Destination</h3>
                            <ul class="categories-list clearfix">
                                <li><a href="australia.html" class="active">Study in Australia</a></li>
                                <li><a href="canada.html">Study in Canada</a></li>
                                <li><a href="usa.html">Study in USA</a></li>
                                <li><a href="uk.html">Study in UK</a></li>
                                <li><a href="new-zealand.html">Study in New Zealand</a></li>
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