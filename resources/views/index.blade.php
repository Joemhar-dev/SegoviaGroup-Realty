{{-- call the main layout  --}}
@extends('layout')
{{-- for the titile of the page  --}}
@section('title') Segovia Group Realty @parent @endsection
{{-- additional style here intended for this blade  --}}
@section('styles')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<style>
#home{
    color: #686de0;
  transform: scale(1.1);
  transition: 0.2s ease;
  }
#home-sidebar{
    color: #f3f3f7 ;
    background-color: #070152;
    transition: all 0.7s;
}
</style>
@endsection
{{-- for the content of the page  --}}
@section('content')
@include('component.header')
<section class="home">
    <div class="home-content">
        <h1>Your next home search starts here</h1>
        <div class="form-group">
        <a class="btn btn-warning btn-lg">For Sale</a>
        <a class="btn btn-warning btn-lg">For Lease</a>
        </div>
        <div class="search-item">
        <select class="form-select">
            <option style="display:none;">Property Type</option>
            <option>Building</option>
            <option>Commercial Lot</option>
            <option>Commercial Unit</option>
            <option>Condo</option>
            <option>Farm Lot</option>
            <option>House and Lot</option>
            <option>Office</option>
        </select>
        <select class="form-select">
            <option style="display:none;">Location</option>
            <option>Building</option>
            <option>Commercial Lot</option>
            <option>Commercial Unit</option>
            <option>Condo</option>
            <option>Farm Lot</option>
            <option>House and Lot</option>
            <option>Office</option>
        </select>
        <select class="form-select">
            <option style="display:none;">Bedrooms</option>
            <option>Building</option>
            <option>Commercial Lot</option>
            <option>Commercial Unit</option>
            <option>Condo</option>
            <option>Farm Lot</option>
            <option>House and Lot</option>
            <option>Office</option>
        </select>
        <a class="btn btn-primary btn-lg">Search</a>
        </div>
    </div>
</section>
 <section class="featured-properties">
    <div class="featured">
            <h3>Featured Properties</h3>
    </div>
    <div class="container swiper">
      <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
              <img src="{{ asset('images/back.jpg') }}" alt="" />
            </div>
            <div class="profile-details">
                <!-- <img src="{{ asset('images/back.jpg')}}" alt="" /> -->
              <div class="name-job">
                <h3 class="name">Property Name</h3>
                <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
                <!-- <img src="{{ asset('images/back.jpg')}}" alt="" /> -->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile3.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile4.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile5.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile5.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile5.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
    </section>
    <section class="recent">
    <div class="featured">
            <h3>Recent Properties</h3>
    </div>
    <div class="recents-card">
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
              <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
                <!-- <img src="{{ asset('images/back.jpg')}}" alt="" /> -->
              <div class="name-job">
                <h3 class="name">Property Name</h3>
                <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
                <!-- <img src="{{ asset('images/back.jpg')}}" alt="" /> -->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile3.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile4.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile5.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
          <h4 class="type">For Sale</h4>
            <div class="image-box">
                <img src="{{ asset('images/back.jpg')}}" alt="" />
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile5.jpg" alt="" />-->
              <div class="name-job">
              <h3 class="name">Property Name</h3>
              <h4 class="job">description</h4>
              </div>
            </div>
          </div>
        </div>
    </section>
@include('component.footer')
@endsection
@section("scripts")
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="script.js"></script>
@endsection
