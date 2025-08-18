<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>{{ $room->name }} | Kevins Bed & Breakfast</title>

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo/logo.png') }}" type="image/x-icon">
    
    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Ad-popup CSS moved to style.css -->
</head>
<style>
    .room-image {
    width: 634px;
    height: 400px;
    object-fit: cover; /* crop & keep aspect ratio */
    border-radius: 8px; /* optional for styling */
}
    </style>
<body>
 @include('partials.book-now')
    @include('partials.taldar-popup')


     <!-- Loader -->
    <div class="rx-loader">
        <span class="loader"></span>
    </div>

     <!-- Header -->    
     @include('partials.header')

     <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="rx-breadcrumb-image" style="background: url('{{ asset($room->image_url) }}') no-repeat center; background-size: cover;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>{{ $room->name }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rx-banner-breadcrumb">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb-contact">
                                    <div class="main-heading">
                                        <h4>{{ $room->name }}</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li>{{ $room->name }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms -->
    <section class="section-room padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Comfortable Stay<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>{{ $room->name }} <span>Rooms</span></h4>
                    </div>
                </div>
                
                
            
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset($room->image_url) }}" alt="{{ $room->name }}" class="room-image">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>{{ $room->name }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset($room->image_url) }}" alt="{{ $room->name }}" class="room-image">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>{{ $room->name }}</h5>
                                        <ul>
                                            @foreach (array_slice($room->amenities, 0, 4) as $amenity)
                                                <li>{{ $amenity }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        {{-- @if($room->booking_url) --}}
                                            <a href="{{ $room->booking_url }}" class="inner-button" target="_blank">Book Now</a>
                                        {{-- @endif --}}
                                        <a href="{{ route('rooms-details', $room->id) }}" class="inner-button">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-amenities-contact">
                        <div class="inner-banner">
                            <h4>{{ $room->name }}</h4>
                        </div>
                        <p>{{ $room->description }}</p>
                        <div class="rx-about-inner-box">
                            <h5 class="mb-3">Room Features & Amenities:</h5>
                            <div class="row mb-minus-24">
                                <div class="col-sm-6 col-12 mb-24">
                                    <ul>
                                        @foreach (array_slice($room->amenities, 0, 5) as $amenity)
                                            <li>✓ {{ $amenity }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-12 mb-24">
                                    <ul>
                                        @foreach (array_slice($room->amenities, 5) as $amenity)
                                            <li>✓ {{ $amenity }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 text-center mt-4" data-aos="fade-up" data-aos-duration="1000">
                    <p class="rx-about-contact">Experience comfort, luxury, and personalized hospitality at Kevins.</p>
                </div>
            </div>
        </div>
    </section>  
    
 <!-- Footer -->
    @include('partials.footer')

    <!-- Back to top  -->
    <a href="#Top" class="back-to-top result-placeholder">
        <i class="ri-arrow-up-double-fill"></i>
        <div class="back-to-top-wrap active-progress">
            <svg viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>
    </a>








 <!-- Plugins -->
 <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
<script src="{{ asset('assets/js/vendor/smoothscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


    <!-- main-js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.ad-popup-close').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var popup = btn.closest('.ad-popup');
                    if (popup) popup.style.display = 'none';
                });
            });
        });
    </script>
    
</body>
</html>
    