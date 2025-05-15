<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>Nearby Restaurants | Kevins Bed & Breakfast</title>

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

    
    <!-- Book Now Floating Button -->
    <div class="book-now-fixed">
        <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank" class="book-now-circle" title="Book Now">
            <div>BOOK NOW</div>
        </a>
    </div>
    <!-- Loader -->
    <div class="rx-loader">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    @include('partials.header')

    <!-- After the header, keep the breadcrumb section -->
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="rx-breadcrumb-image" style="background: url('assets/img/Restaurant1.png') no-repeat center; background-size: cover;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Nearby Restaurants</h2>
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
                                        <h4>Restaurants</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>Nearby Restaurants</li>
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

    <!-- Restaurant Section -->
    <section class="section-room padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="assets/img/banner/left-shape.svg" alt="banner-left-shape"
                                class="svg-img left-side">Local Dining<img src="assets/img/banner/right-shape.svg"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Nearby <span>Restaurants</span></h4>
                    </div>
                </div>

                <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-amenities-contact">
                        <p class="text-center">Explore the best local and international cuisine near KEVINS Bed & Breakfast. From traditional Andamanese seafood to continental delights, these restaurants offer something for every palate.</p>
                    </div>
                </div>

                <!-- Restaurant Cards -->
                <!-- Seafood Restaurants -->
                <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="section-subtitle">Seafood Specialties</h4>
                </div>

                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="assets/img/restaurants/new-lighthouse.jpg" alt="New Lighthouse Restaurant" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>New Lighthouse Restaurant</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="assets/img/restaurants/new-lighthouse.jpg" alt="New Lighthouse Restaurant">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>New Lighthouse Restaurant</h5>
                                        <ul>
                                            <li>Cuisine: Seafood, Indian</li>
                                            <li>Distance: 5 mins walk</li>
                                            <li>Popular for: Fresh seafood</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="assets/img/restaurants/sea-food-delight.jpg" alt="Sea Food Delight" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Sea Food Delight</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="assets/img/restaurants/sea-food-delight.jpg" alt="Sea Food Delight">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Sea Food Delight</h5>
                                        <ul>
                                            <li>Cuisine: Seafood, Local</li>
                                            <li>Distance: 8 mins walk</li>
                                            <li>Popular for: Local seafood specialties</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pure Vegetarian Restaurants -->
                <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="section-subtitle">Pure Vegetarian</h4>
                </div>

                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="assets/img/restaurants/annapurna.jpg" alt="Annapurna Restaurant" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Annapurna (Pure Veg)</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="assets/img/restaurants/annapurna.jpg" alt="Annapurna Restaurant">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Annapurna Restaurant</h5>
                                        <ul>
                                            <li>Cuisine: South Indian, North Indian</li>
                                            <li>Distance: 3 mins walk</li>
                                            <li>Popular for: Pure vegetarian food</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="assets/img/restaurants/blue-sea.jpg" alt="Hotel Blue Sea" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Hotel Blue Sea (Pure Veg)</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="assets/img/restaurants/blue-sea.jpg" alt="Hotel Blue Sea">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Hotel Blue Sea</h5>
                                        <ul>
                                            <li>Cuisine: Pure Vegetarian</li>
                                            <li>Distance: 7 mins walk</li>
                                            <li>Popular for: Gujarati & Jain food</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Multi-Cuisine Restaurants -->
                <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="section-subtitle">Multi-Cuisine Dining</h4>
                </div>

                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="assets/img/restaurants/driftwood.jpg" alt="Driftwood" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Driftwood</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="assets/img/restaurants/driftwood.jpg" alt="Driftwood">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Driftwood</h5>
                                        <ul>
                                            <li>Cuisine: Multi-cuisine</li>
                                            <li>Distance: 10 mins walk</li>
                                            <li>Popular for: Fine dining experience</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="assets/img/restaurants/haywizz.jpg" alt="Haywizz" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Haywizz</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="assets/img/restaurants/haywizz.jpg" alt="Haywizz">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Haywizz</h5>
                                        <ul>
                                            <li>Cuisine: Multi-cuisine</li>
                                            <li>Distance: 12 mins walk</li>
                                            <li>Popular for: Modern ambiance</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="assets/img/restaurants/adi-bengali.jpg" alt="ADI Bengali Hotel" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>ADI Bengali Hotel</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="assets/img/restaurants/adi-bengali.jpg" alt="ADI Bengali Hotel">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>ADI Bengali Hotel</h5>
                                        <ul>
                                            <li>Cuisine: Bengali, Indian</li>
                                            <li>Distance: 6 mins walk</li>
                                            <li>Popular for: Authentic Bengali cuisine</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Restaurant Information -->
                <div class="col-12 mt-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-amenities-contact">
                        <div class="rx-about-inner-box">
                            <h5 class="mb-3">Our Recommendations:</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>✓ Try local seafood specialties</li>
                                        <li>✓ Experience traditional Andamanese cuisine</li>
                                        <li>✓ Fresh catch of the day at seafood restaurants</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>✓ Various vegetarian options available</li>
                                        <li>✓ International cuisine choices</li>
                                        <li>✓ Authentic local flavors</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <p class="mb-3">Our front desk staff will be happy to make restaurant recommendations and reservations for you.</p>
                            <a href="#" class="rx-btn-one">Contact Front Desk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Footer -->
    @include('partials.footer')
<footer>
        <div class="rx-main-footer padding-tb-100">
            <div class="container">
                <div class="row mb-minus-24">
                    <div class="col-lg-3 col-sm-6 col-12 mb-24 footer-order-1">
                        <div class="rx-social-media">
                            <div class="rx-logo">
                                <h1 style="font-weight: 700; color: #fff;">Kevins Bed & Breakfast</h1>
                            </div>
                            <div class="inner-contact">
                                <p>Experience comfort, luxury, and personalized hospitality at Kevins.</p>
                            </div>
                            <div class="inner-info">
                                <h3 style="color: #fff;">Follow Us</h3>
                                <div class="rx-footer-social" style="padding-top: 1rem;">
                                    <a href="https://www.facebook.com/KevinsBedBreakfast" target="_blank"><i class="ri-facebook-fill" style="font-size: 1.5rem;"></i></a>
                                    <a href="https://www.instagram.com/kevinshomestay2016" target="_blank"><i class="ri-instagram-fill" style="font-size: 1.5rem;"></i></a>
                                    <a href="https://www.pinterest.com/KevinsAndaman" target="_blank"><i class="ri-pinterest-fill" style="font-size: 1.5rem;"></i></a>
                                    <a href="https://www.kevinsandaman.com" target="_blank"><i class="ri-global-line" style="font-size: 1.5rem;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 col-420-full mb-24 footer-order-2">
                        <div class="rx-footer-items">
                            <div class="rx-items-heading">
                                <h4>Explore</h4>
                            </div>
                            <div class="rx-items-contact">
                                <ul>
                                    <li><a href="rooms.html">Rooms</a></li>
                                    <li><a href="restaurants.html">Nearby Restaurants</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true">Book Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 col-420-full mb-24 footer-order-3">
                        <div class="rx-footer-items">
                            <div class="rx-items-heading">
                                <h4>Landmarks Nearby</h4>
                            </div>
                            <div class="rx-items-contact">
                                <ul>
                                    <li><a href="javascript:void(0)">Veer Savarkar Airport (10 min)</a></li>
                                    <li><a href="javascript:void(0)">Cellular Jail (5 min)</a></li>
                                    <li><a href="javascript:void(0)">Corbyn's Cove Beach (15 min)</a></li>
                                    <li><a href="javascript:void(0)">Ross Island (Ferry ride)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 col-420-full mb-24 footer-order-4">
                        <div class="rx-footer-items">
                            <div class="rx-items-heading">
                                <h4>Contact</h4>
                            </div>
                            <div class="rx-items-contact">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="javascript:void(0)">Directions</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 col-420-full mb-24 footer-order-5">
                        <div class="rx-footer-other-info">
                            <div class="inner-info">
                                <h5>Address</h5>
                                <p>KEVINS Bed & Breakfast, 99/5, J.N.Road, Near Makruzz/Airtel Office, Delanipur Port Blair, Andaman & Nicobar Islands, India - 744102.</p>
                            </div>
                            <div class="inner-info">
                                <h5>Email</h5>
                                <a href="mailto:kevinsandaman@gmail.com">kevinsandaman@gmail.com</a>
                            </div>
                            <div class="inner-info">
                                <h5>Phone</h5>
                                <a href="tel:+919933283649">+91 9933283649</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rx-footer-copy">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="rx-footer-inner-contact">
                            <div class="rx-footer-left-side-contact">
                                <p>&copy; 2025 <a href="index.html">Kevins Bed & Breakfast</a>, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <a href="#Top" class="back-to-top result-placeholder">
        <i class="ri-arrow-up-double-fill"></i>
        <div class="back-to-top-wrap active-progress">
            <svg viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>
    </a>

    <!-- Book Room Modal -->
    <div class="rx-modal modal fade" id="rx_booking_from">
        <div class="rx-modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Copy the entire modal content from index.html -->
            </div>
        </div>
    </div>

    <!-- Feature tools -->
    <div class="rx-tools-sidebar-overlay"></div>
    <div class="rx-tools-sidebar">
        <!-- Copy the entire tools sidebar content from index.html -->
    </div>

    <!-- Include all the same scripts as index.html -->

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
    
</body>
</html> 