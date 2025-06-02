<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>Deluxe Room | Kevins Bed & Breakfast</title>

    <!-- site Favicon -->
    <link rel="icon" href="assets/img/logo/logo.png" type="image/x-icon">
    
    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.min.css">
    <link rel="stylesheet" href="assets/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Ad-popup CSS moved to style.css -->
</head>
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
        <div class="rx-breadcrumb-image" style="background: url('{{ asset('assets/img/room-banner.jpg') }}') no-repeat center; background-size: cover;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Deluxe Rooms</h2>
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
                                        <h4>Deluxe Rooms</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>Deluxe Rooms</li>
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
                        <h4>Deluxe <span>Rooms</span></h4>
                    </div>
                </div>
                
                
                <!-- Deluxe Room -->
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/Room3.png') }}" alt="Deluxe Room">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Deluxe Room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/Room3.png') }}" alt="Deluxe Room">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Deluxe Room</h5>
                                        <ul>
                                            <li>King-size Bed</li>
                                            <li>Luxury Bath Amenities</li>
                                            <li>Ensuite Bathroom</li>
                                            <li>Perfect for Families</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" class="inner-button" target="_blank">Book Now</a>
                                        <a href="{{ route ('deluxe-room')}}" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-amenities-contact">
                        <div class="inner-banner">
                            <h4>Deluxe Rooms</h4>
                        </div>
                        <p>Our Deluxe Rooms offer a perfect blend of comfort and sophistication. Each room is fully ensuite with a clean and sanitized bathroom. A plush king-size bed with a spring mattress and soft pillows ensures a restful sleep, while luxury bath amenities add an elegant touch to your stay. Ideal for families or small groups.</p>
                        <div class="rx-about-inner-box">
                            <h5 class="mb-3">Room Features & Amenities:</h5>
                            <div class="row mb-minus-24">
                                <div class="col-sm-6 col-12 mb-24">
                                    <ul>
                                        <li>✓ Free Welcome Drink</li>
                                        <li>✓ Air Conditioning</li>
                                        <li>✓ Free WiFi Access</li>
                                        <li>✓ Complimentary Tea</li>
                                        <li>✓ Extra Long Bed</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-12 mb-24">
                                    <ul>
                                        <li>✓ Laundry Service</li>
                                        <li>✓ Coffee/Tea Maker</li>
                                        <li>✓ Smoke Detector</li>
                                        <li>✓ Complimentary Breakfast</li>
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
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/smoothscroll.min.js"></script>
    <script src="assets/js/vendor/jquery.fancybox.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/owl.carousel.min.js"></script>
    <script src="assets/js/vendor/swiper-bundle.min.js"></script>

    <!-- main-js -->
    <script src="assets/js/main.js"></script>
    
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
    