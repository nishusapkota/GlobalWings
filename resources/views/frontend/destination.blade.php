@extends('frontend.layouts.master')
@section('title','GrowthWings')
@section('header')
@include('frontend.layouts.header.mainheader')
@endsection
@section('content')
<!--Page Title-->
<section
class="page-title style-two centred"
style="background-image: url('{{asset('frontend/assets/images/background/page-title-5.jpg')}}"
>
<div class="auto-container">
  <div class="content-box clearfix">
    <h1>Study Destination</h1>
    <ul class="bread-crumb clearfix">
      <li><a href="{{route('index')}}">Home</a></li>
      <li>Destination</li>
    </ul>
  </div>
</div>
</section>
<!--End Page Title-->

<!-- destination-section -->
<section class="news-section blog-grid sec-pad">
<div class="auto-container">
  <div class="row clearfix">
    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
      <div
        class="news-block-one wow fadeInUp animated animated"
        data-wow-delay="00ms"
        data-wow-duration="1500ms"
      >
        <div class="inner-box">
          <figure class="image-box">
            <a href="{{route('destination-detail')}}"
              ><img src="{{asset('frontend/assets/images/Destinations/DestinationPage/newZealand.png')}}" alt=""
            /></a>
          </figure>
          <div class="lower-content">
            <h3>
              <a href="{{route('destination-detail')}}"
                >Study In NewZealand</a
              >
            </h3>
            <p>
              New Zealand New Zealand has made big strides in the area of international education in the last few years. From…
            </p>
            <div class="link">
              <a href="{{route('destination-detail')}}"
                ><i class="fas fa-arrow-right"></i
                ><span>Read More</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
      <div
        class="news-block-one wow fadeInUp animated animated"
        data-wow-delay="300ms"
        data-wow-duration="1500ms"
      >
        <div class="inner-box">
          <figure class="image-box">
            <a href="{{route('destination-detail')}}"
              ><img src="{{asset('frontend/assets/images/Destinations/DestinationPage/Canada.png')}}" alt=""
            /></a>
          </figure>
          <div class="lower-content">
            <h3>
              <a href="{{route('destination-detail')}}"
                >Study in Canada</a
              >
            </h3>
            <p>
              Canada Canada has many reasons to be counted among the best international study destinations. It offers a wide variety of…
            </p>
            <div class="link">
              <a href="{{route('destination-detail')}}"
                ><i class="fas fa-arrow-right"></i
                ><span>Read More</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
      <div
        class="news-block-one wow fadeInUp animated animated"
        data-wow-delay="600ms"
        data-wow-duration="1500ms"
      >
        <div class="inner-box">
          <figure class="image-box">
            <a href="{{route('destination-detail')}}"
              ><img src="{{asset('frontend/assets/images/Destinations/DestinationPage/UK.png')}}" alt=""
            /></a>
          </figure>
          <div class="lower-content">
            <h3>
              <a href="{{route('destination-detail')}}"
                >Study in UK</a
              >
            </h3>
            <p>
              UK has a rich legacy of universities of international repute such as the University of Oxford and the University of…
            </p>
            <div class="link">
              <a href="{{route('destination-detail')}}"
                ><i class="fas fa-arrow-right"></i
                ><span>Read More</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
      <div
        class="news-block-one wow fadeInUp animated animated"
        data-wow-delay="00ms"
        data-wow-duration="1500ms"
      >
        <div class="inner-box">
          <figure class="image-box">
            <a href="{{route('destination-detail')}}"
              ><img src="{{asset('frontend/assets/images/Destinations/DestinationPage/Australia.png')}}" alt=""
            /></a>
          </figure>
          <div class="lower-content">
            <h3>
              <a href="{{route('destination-detail')}}"
                >Study in Australia</a
              >
            </h3>
            <p>
              Standing proud with 8 of the top 100 universities in the world, Australia is much more than just kangaroos. An…
            </p>
            <div class="link">
              <a href="{{route('destination-detail')}}"
                ><i class="fas fa-arrow-right"></i
                ><span>Read More</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
      <div
        class="news-block-one wow fadeInUp animated animated"
        data-wow-delay="300ms"
        data-wow-duration="1500ms"
      >
        <div class="inner-box">
          <figure class="image-box">
            <a href="{{route('destination-detail')}}l"
              ><img src="{{asset('frontend/assets/images/Destinations/DestinationPage/USA.png')}}" alt=""
            /></a>
          </figure>
          <div class="lower-content">
            <h3>
              <a href="{{route('destination-detail')}}"
                >Study in USA</a
              >
            </h3>
            <p>
              The United States of America has been a global leader in the field of education and boasts of a lion’s…
            </p>
            <div class="link">
              <a href="{{route('destination-detail')}}"
                ><i class="fas fa-arrow-right"></i
                ><span>Read More</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="more-btn centred">
    <a href="blog-grid.html">Load More</a>
  </div> -->
</div>
</section>
<!-- news-section end -->

@endsection