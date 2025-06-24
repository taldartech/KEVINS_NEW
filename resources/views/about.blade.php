<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in Sri Vijaya Puram port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, Sri Vijaya Puram , hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>Kevins Bed & Breakfast - Best hotel in port blair/title>

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.png') }}" type="image/x-icon">

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

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    @include('partials.book-now')
    @include('partials.taldar-popup')

    <!-- Loader -->
    <div class="rx-loader">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header>
        <div class="rx-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="rx-inner-menu-desk">
                            <a href="index.html" class="rx-header-btn">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                            </a>
                            <button class="navbar-toggler shadow-none rx-toggle-menu" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-2-line"></i>
                            </button>
                            <div class="rx-main-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item rx-dropdown">
                                        <a class="nav-link rx-dropdown-item" href="javascript:void(0)">Home</a>
                                        <ul class="rx-dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html">Hotel</a></li>
                                            <li><a class="dropdown-item" href="demo-2.html">Restaurant</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item rx-dropdown">
                                        <a class="nav-link rx-dropdown-item" href="javascript:void(0)">Category</a>
                                        <ul class="rx-dropdown-menu">
                                            <li><a class="dropdown-item" href="gallery.html">Gallery 1</a></li>
                                            <li><a class="dropdown-item" href="gallery-2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item rx-dropdown">
                                        <a class="nav-link rx-dropdown-item" href="javascript:void(0)">Room</a>
                                        <ul class="rx-dropdown-menu">
                                            <li><a class="dropdown-item" href="rooms.html">Rooms 1</a></li>
                                            <li><a class="dropdown-item" href="rooms-2.html">Rooms 2</a></li>
                                            <li><a class="dropdown-item" href="rooms-3.html">Rooms 3</a></li>
                                            <li><a class="dropdown-item" href="room-details.html">Rooms details</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item rx-dropdown">
                                        <a class="nav-link rx-dropdown-item" href="javascript:void(0)">Pages</a>
                                        <ul class="rx-dropdown-menu">
                                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                            <li><a class="dropdown-item" href="services.html">Services</a></li>
                                            <li><a class="dropdown-item" href="facilities.html">Facilities</a></li>
                                            <li><a class="dropdown-item" href="team.html">Team</a></li>
                                            <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                                            <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                                            <li><a class="dropdown-item" href="spa.html">Spa</a></li>
                                            <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                            <li><a class="dropdown-item" href="signin.html">Login</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item rx-dropdown">
                                        <a class="nav-link rx-dropdown-item" href="javascript:void(0)">Blog</a>
                                        <ul class="rx-dropdown-menu">
                                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                            <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="restaurant.html">Restaurant</a>
                                    </li>
                                </ul>
                                <div class="header-button">
                                    <a href="javascript:void(0)" class="rx-btn-one" data-bs-toggle="modal" data-bs-target="#rx_booking_from">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rx-mobile-menu-overlay"></div>
        <div id="rx-mobile-menu" class="rx-mobile-menu">
            <div class="rx-menu-title">
                <span class="menu_title">My Menu</span>
                <button type="button" class="rx-close-menu">×</button>
            </div>
            <div class="rx-menu-inner">
                <div class="rx-menu-contact">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Hotel</a></li>
                                <li><a href="demo-2.html">Restaurant</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Category</a>
                            <ul class="sub-menu">
                                <li><a href="gallery.html">Gallery 1</a></li>
                                <li><a href="gallery-2.html">Gallery 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Room</a>
                            <ul class="sub-menu">
                                <li><a href="rooms.html">Rooms 1</a></li>
                                <li><a href="rooms-2.html">Rooms 2</a></li>
                                <li><a href="rooms-3.html">Rooms 3</a></li>
                                <li><a href="room-details.html">Rooms details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="facilities.html">Facilities</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="spa.html">Spa</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="signin.html">Login</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="restaurant.html">Restaurant</a>
                        </li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <section class="section-breadcrumb padding-b-50">
        <div class="rx-breadcrumb-image">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>About Us</h2>
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
                                        <h4>About Us</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>About Us</li>
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

    <!-- About -->
    <div class="section-about padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-about-img">
                        <img src="{{ asset('assets/img/about/about-two.png') }}" alt="about-two" class="rx-white-img">
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-about-page-contact">
                        <div class="rx-banner">
                            <p>The Royalx Hotel</p>
                            <h4>Where Elegance Meets <span>Excellence</span></h4>
                        </div>
                        <div class="inner-about-contact">
                            <p>Nestled in the heart of Delhi, Royalx stands as a beacon of 
                                elegance and sophistication. Our hotel seamlessly blends 
                                timeless charm with modern amenities, offering an 
                                unparalleled experience for discerning travelers.</p>
                            <p>Our hotel seamlessly blends timeless charm with modern 
                                amenities, offering an unparalleled experience for 
                                discerning travelers.</p>
                        </div>
                        <div class="items-details">
                            <h5>Mr. Oliver Carter</h5>
                            <p>(CEO)</p>
                            <img src="{{ asset('assets/img/about/sign.png') }}" alt="sign" class="rx-white-img">
                            <img src="{{ asset('assets/img/about/sign-dark.png') }}" alt="sign" class="rx-dark-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section class="section-services padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center">
                        <p>Facilities</p>
                        <h4>Our Best <span>Services</span></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/1.svg') }}" alt="services-1" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Basic Facilities</h5>
                            <ul>
                                <li>- Reception/Front Desk</li>
                                <li>- Room Service</li>
                                <li>- Housekeeping</li>
                                <li>- Wi-Fi & Parking</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/2.svg') }}" alt="services-2" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Room Amenities</h5>
                            <ul>
                                <li>- Comfortable Bedding</li>
                                <li>- Bathroom & Pool</li>
                                <li>- Tv, Ac & Heathing</li>
                                <li>- Mini Bar & Safe</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/3.svg') }}" alt="services-3" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Dining Options</h5>
                            <ul>
                                <li>- Restaurant & Cafe</li>
                                <li>- Bar & Lounge</li>
                                <li>- Cafe & Canteen</li>
                                <li>- Room service</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/4.svg') }}" alt="services-4" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Leisure Facilities</h5>
                            <ul>
                                <li>- Swimming pool</li>
                                <li>- Gym / Fitness center</li>
                                <li>- Spa & Beauty</li>
                                <li>- Sauna & Steam Room</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/5.svg') }}" alt="services-5" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Business Services</h5>
                            <ul>
                                <li>- Conference Hall</li>
                                <li>- Meeting Rooms</li>
                                <li>- Business Center</li>
                                <li>- Wi-Fi & Internet</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/6.svg') }}" alt="services-6" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Family Facilities</h5>
                            <ul>
                                <li>- Kids Club</li>
                                <li>- Babysitting Services</li>
                                <li>- Family Rooms</li>
                                <li>- Game zone</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/7.svg') }}" alt="services-7" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Additional Services</h5>
                            <ul>
                                <li>- Concierge</li>
                                <li>- Laundry & Dry Cleaning</li>
                                <li>- Shuttle Service</li>
                                <li>- Pet-Friendly</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/8.svg') }}" alt="services-8" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Special Features</h5>
                            <ul>
                                <li>- Custom Rooms</li>
                                <li>- Garden & Golf</li>
                                <li>- Terrace</li>
                                <li>- Event Spaces</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Extra Services -->
    <section class="section-extra-services padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape" class="svg-img left-side">Our Pricing<img src="{{ asset('assets/img/banner/right-shape.svg') }}" alt="banner-right-shape" class="svg-img right-side"></p>                        
                        <h4>Other <span>Services</span></h4>
                    </div>
                </div>
                <div class="col-12 mb-minus-24">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-md-3 col-sm-4 col-12 mb-24">
                            <div class="extra-services-img">
                                <img src="{{ asset('assets/img/extra-services/1.jpg') }}" alt="extra-services-1">
                            </div>                            
                        </div>
                        <div class="col-md-9 col-sm-8 col-12 mb-24">
                            <div class="extra-services-contact">
                                <div class="extra-services-absolute-contact">
                                    <p>Clean</p>
                                </div>
                                <div class="rx-services-price">
                                    <h2>$ 25 <span>/ Day</span></h2>
                                    <p>Room Cleaning</p>
                                </div>
                                <div class="rx-services-inner-contact">
                                    <ul>
                                        <li>- Surface Cleaning with quality product</li>
                                        <li>- Replenishing Supplies glassware and cups</li>
                                        <li>- Curtain and Upholstery Cleaning</li>
                                        <li>- Laundry and Dry Cleaning</li>
                                    </ul>
                                </div>
                                <div class="rx-services-ico">
                                    <a href="services.html" class="ico"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="col-md-3 col-sm-4 col-12 mb-24">
                            <div class="extra-services-img">
                                <img src="{{ asset('assets/img/extra-services/2.jpg') }}" alt="extra-services-2">
                            </div>                            
                        </div>
                        <div class="col-md-9 col-sm-8 col-12 mb-24">
                            <div class="extra-services-contact">
                                <div class="extra-services-absolute-contact">
                                    <p>Order</p>
                                </div>
                                <div class="rx-services-price">
                                    <h2>$ 10 <span>/ Order</span></h2>
                                    <p>Food Ordering</p>
                                </div>
                                <div class="rx-services-inner-contact">
                                    <ul>
                                        <li>- Breakfast (7am To 10am)</li>
                                        <li>- Lunch (11am To 2pm)</li>
                                        <li>- Dinner (6pm To 9pm)</li>
                                    </ul>
                                </div>
                                <div class="rx-services-ico">
                                    <a href="services.html" class="ico"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="col-md-3 col-sm-4 col-12 mb-24">
                            <div class="extra-services-img">
                                <img src="{{ asset('assets/img/extra-services/3.jpg') }}" alt="extra-services-3">
                            </div>                            
                        </div>
                        <div class="col-md-9 col-sm-8 col-12 mb-24">
                            <div class="extra-services-contact">
                                <div class="extra-services-absolute-contact">
                                    <p>Event</p>
                                </div>
                                <div class="rx-services-price">
                                    <h2>$ 500 <span>/ 3 Hour</span></h2>
                                    <p>Events</p>
                                </div>
                                <div class="rx-services-inner-contact">
                                    <ul>
                                        <li>- Birthday Celebration Hall</li>
                                        <li>- Ring Ceremony & Marriage hall</li>
                                        <li>- Conference hall</li>
                                        <li>- Banquet hall (50 Persons)</li>
                                    </ul>
                                </div>
                                <div class="rx-services-ico">
                                    <a href="services.html" class="ico"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="col-md-3 col-sm-4 col-12 mb-24">
                            <div class="extra-services-img">
                                <img src="{{ asset('assets/img/extra-services/4.jpg') }}" alt="extra-services-4">
                            </div>                            
                        </div>
                        <div class="col-md-9 col-sm-8 col-12 mb-24">
                            <div class="extra-services-contact">
                                <div class="extra-services-absolute-contact">
                                    <p>Party</p>
                                </div>
                                <div class="rx-services-price">
                                    <h2>$ 899 <span>/ 5 Hour</span></h2>
                                    <p>Terrace Party</p>
                                </div>
                                <div class="rx-services-inner-contact">
                                    <ul>
                                        <li>- Party (50 Person Limit)</li>
                                        <li>- 12 Types of Drink</li>
                                        <li>- Candle Light Dinner</li>
                                    </ul>
                                </div>
                                <div class="rx-services-ico">
                                    <a href="services.html" class="ico"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="section-team padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape" class="svg-img left-side">Our Team<img src="{{ asset('assets/img/banner/right-shape.svg') }}" alt="banner-right-shape" class="svg-img right-side"></p>                        
                        <h4>Exceptional <span>Experts</span></h4>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="owl-carousel rx-team-slider">
                        <div class="rx-team-card">
                            <div class="rx-team-img">
                                <img src="{{ asset('assets/img/team/1.jpg') }}" alt="team-1">
                                <div class="rx-team-social-media">
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-facebook-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-linkedin-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="rx-team-contact">
                                <h5>Mr. Oliver Carter</h5>
                                <p>(CEO)</p>
                            </div>
                        </div>
                        <div class="rx-team-card">
                            <div class="rx-team-img">
                                <img src="{{ asset('assets/img/team/2.jpg') }}" alt="team-2">
                                <div class="rx-team-social-media">
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-facebook-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-linkedin-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="rx-team-contact">
                                <h5>Amma Wilso</h5>
                                <p>(Manager)</p>
                            </div>
                        </div>
                        <div class="rx-team-card">
                            <div class="rx-team-img">
                                <img src="{{ asset('assets/img/team/3.jpg') }}" alt="team-3">
                                <div class="rx-team-social-media">
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-facebook-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-linkedin-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="rx-team-contact">
                                <h5>Sunita Roy</h5>
                                <p>(Receptionist)</p>
                            </div>
                        </div>
                        <div class="rx-team-card">
                            <div class="rx-team-img">
                                <img src="{{ asset('assets/img/team/4.jpg') }}" alt="team-4">
                                <div class="rx-team-social-media">
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-facebook-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-linkedin-line"></i></a>
                                    </div>
                                    <div class="social-media-item">
                                        <a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="rx-team-contact">
                                <h5>Nick Tyson</h5>
                                <p>(Team Leader)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-testimonials padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape" class="svg-img left-side">Testimonials<img src="{{ asset('assets/img/banner/right-shape.svg') }}" alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Echoes of <span>Brilliance</span></h4>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="owl-carousel rx-testimonials-slider">
                        <div class="row mb-minus-24">
                            <div class="col-md-4 col-12 mb-24">
                                <div class="rx-testimonials-img">
                                    <img src="{{ asset('assets/img/testimonials/1.jpg') }}" alt="testimonials-1">
                                </div>
                            </div>
                            <div class="col-md-8 col-12 mb-24">
                                <div class="rx-testimonials-contact">
                                    <div class="rx-inner-banner">
                                        <h4>Isabella Bianchi</h4>
                                        <span>(Manager)</span>
                                    </div>
                                    <div class="inner-contact">
                                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                            at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                            amet alias aut quaerat maiores blanditiis."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-minus-24">
                            <div class="col-md-4 col-12 mb-24">
                                <div class="rx-testimonials-img">
                                    <img src="{{ asset('assets/img/testimonials/2.jpg') }}" alt="testimonials-2">
                                </div>
                            </div>
                            <div class="col-md-8 col-12 mb-24">
                                <div class="rx-testimonials-contact">
                                    <div class="rx-inner-banner">
                                        <h4>Saddika Alard</h4>
                                        <span>(Team Leader)</span>
                                    </div>
                                    <div class="inner-contact">
                                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                            at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                            amet alias aut quaerat maiores blanditiis."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-minus-24">
                            <div class="col-md-4 col-12 mb-24">
                                <div class="rx-testimonials-img">
                                    <img src="{{ asset('assets/img/testimonials/3.jpg') }}" alt="testimonials-3">
                                </div>
                            </div>
                            <div class="col-md-8 col-12 mb-24">
                                <div class="rx-testimonials-contact">
                                    <div class="rx-inner-banner">
                                        <h4>Stephen Smith</h4>
                                        <span>(Co Founder)</span>
                                    </div>
                                    <div class="inner-contact">
                                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                            at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                            amet alias aut quaerat maiores blanditiis."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="section-blog padding-t-50 padding-b-100">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape" class="svg-img left-side">New Blogs<img src="{{ asset('assets/img/banner/right-shape.svg') }}" alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Latest <span>News</span></h4>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="owl-carousel rx-blog-slider">
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="blog-1">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 28,2024 - Restaurant</span>
                                <h4><a href="blog-details.html">Best way to solve business deal issue in market.</a></h4>
                            </div>
                        </div>
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="blog-2">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 30,2021 - Gym</span>
                                <h4><a href="blog-details.html">Marketing Guide 5 steps to Success</a></h4>
                            </div>
                        </div>
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="blog-3">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 16,2021 - Spa</span>
                                <h4><a href="blog-details.html">Best Way to solve Business deal.</a></h4>
                            </div>
                        </div>
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="blog-4">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 10,2025 - Golf</span>
                                <h4><a href="blog-details.html">customer service stats know in 2019.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="rx-main-footer padding-tb-100">
            <div class="container">
                <div class="row mb-minus-24">
                    <div class="col-lg-3 col-sm-6 col-12 mb-24 footer-order-1">
                        <div class="rx-social-media">
                            <div class="rx-logo">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                            </div>
                            <div class="inner-contact">
                                <p>Our hotel seamlessly blends timeless 
                                    charm with modern amenities, offering 
                                    an unparalleled experience for travelers.</p>
                            </div>
                            <div class="rx-social-logo">
                                <div class="inner-logo">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('assets/img/logo/logo-footer-1.png') }}" alt="logo-footer-1">
                                    </a>
                                </div>
                                <div class="inner-logo">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('assets/img/logo/logo-footer-2.png') }}" alt="logo-footer-2">
                                    </a>
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
                                    <li>
                                        <a href="spa.html">Spa & Beauty</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Gym & Fitness</a>
                                    </li>
                                    <li>
                                        <a href="rooms.html">Rooms & Suites</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Book Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 col-420-full mb-24 footer-order-3">
                        <div class="rx-footer-items">
                            <div class="rx-items-heading">
                                <h4>City Branches</h4>
                            </div>
                            <div class="rx-items-contact">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Bharat</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Mexico</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Venezuela</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Germany</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Austraila</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Califarnia</a>
                                    </li>
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
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Car Rentals</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 col-420-full mb-24 footer-order-5">
                        <div class="rx-footer-other-info">
                            <div class="inner-info">
                                <h5>Address</h5>
                                <p>987-A, Dudhivadar, Rajkot, Gujarat, 
                                    Bharat - 360410.</p>
                            </div>
                            <div class="inner-info">
                                <h5>Email</h5>
                                <a href="javascript:void(0)">example@rx-email.com</a>
                            </div>
                            <div class="inner-info">
                                <h5>Phone No</h5>
                                <a href="javascript:void(0)">+91(1234)(567)(890)</a>
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
                                <p>&copy; 2024 <a href="index.html">Royalx</a>, All Rights Reserved.</p>
                            </div>
                            <div class="rx-footer-last-logo">
                                <div class="rx-inner-footer-logo">
                                    <a href="javascript:void(0)"><i class="ri-facebook-line"></i></a>
                                </div>
                                <div class="rx-inner-footer-logo">
                                    <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                </div>
                                <div class="rx-inner-footer-logo">
                                    <a href="javascript:void(0)"><i class="ri-linkedin-line"></i></a>
                                </div>
                                <div class="rx-inner-footer-logo">
                                    <a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top  -->
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
                <div class="sub-title">
                    <h4>Check Availability</h4>
                </div>
                <button type="button" class="qty-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
                <div class="modal-body">
                    <div class="rx-booking-from">
                        <form action="#">
                            <div class="rx-inner-input">
                                <label for="checkin">Check in*</label>
                                <input type="text" id="checkin" class="rx-from-control datepicker">
                            </div>
                            <div class="rx-inner-input">
                                <label for="checkout">Check Out*</label>
                                <input type="text" id="checkout" class="rx-from-control datepicker">
                            </div>
                            <div class="rx-inner-input">
                                <label for="rooms">Room Type*</label>
                                <select class="rx-from-control form-select" aria-label="Select Method" id="rooms">
                                    <option selected>Select</option>
                                    <option value="1">Junior Suite</option>
                                    <option value="2">Twin Room</option>
                                    <option value="3">Quad Room</option>
                                    <option value="4">Deluxe Room</option>
                                    <option value="5">Executive Room</option>
                                    <option value="6">Presidential Room</option>
                                </select>
                            </div>
                            <div class="rx-inner-input">
                                <label for="adults">Adults*</label>
                                <select class="rx-from-control form-select" aria-label="Select Method" id="adults">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="rx-inner-input">
                                <label for="children">Children*</label>
                                <select class="rx-from-control form-select" aria-label="Select Method" id="children">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="rx-inner-button">
                                <a href="javascript:void(0)" class="rx-btn-two">Book Room</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature tools -->
    <div class="rx-tools-sidebar-overlay"></div>
    <div class="rx-tools-sidebar">
        <a href="javascript:void(0)" class="rx-tools-sidebar-toggle in-out">
            <i class="ri-settings-line"></i>
        </a>
        <div class="rx-inner-tools-sidebar">
            <div class="rx-bar-title">
                <h6>Tools</h6>
                <a href="javascript:void(0)" class="close-tools"><i class="ri-close-line"></i></a>
            </div>
            <div class="rx-tools-detail">
                <div class="rx-tools-block">
                    <h3>Select Color</h3>
                    <ul class="rx-color">
                        <li class="color-primary active-color"></li>
                        <li class="color-1"></li>
                        <li class="color-2"></li>
                        <li class="color-3"></li>
                        <li class="color-4"></li>
                        <li class="color-5"></li>
                        <li class="color-6"></li>
                        <li class="color-7"></li>
                        <li class="color-8"></li>
                        <li class="color-9"></li>
                    </ul>
                </div>
                <div class="rx-tools-block">
                    <h3>Modes</h3>
                    <div class="rx-tools-rtl">
                        <div class="mode-primary rx-tools-item mode active-mode ltr" data-rx-mode-tool="ltr">
                            <img src="{{ asset('assets/img/tools/ltr.png') }}" alt="ltr">
                            <p>LTR</p>
                        </div>
                        <div class="mode-primary rx-tools-item mode rtl" data-rx-mode-tool="rtl">
                            <img src="{{ asset('assets/img/tools/rtl.png') }}" alt="rtl">
                            <p>RTL</p>
                        </div>
                    </div>
                </div>
                <div class="rx-tools-block">
                    <h3>Dark Modes</h3>
                    <div class="rx-tools-dark">
                        <div class="mode-primary rx-tools-item mode active-dark-mode light" data-rx-mode-tool="light">
                            <img src="{{ asset('assets/img/tools/light.png') }}" alt="light">
                            <p>Light</p>
                        </div>
                        <div class="rx-tools-item mode dark" data-rx-mode-tool="dark">
                            <img src="{{ asset('assets/img/tools/dark.png') }}" alt="dark">
                            <p>Dark</p>
                        </div>
                    </div>
                </div>
                <div class="rx-tools-block">
                    <h3>Box Design</h3>
                    <div class="rx-tools-box">
                        <div class="rx-tools-item default active-box" data-bry-mode-tool="default">
                            <img src="{{ asset('assets/img/tools/box-0.png') }}" alt="box-0">
                            <p>Default</p>
                        </div>
                        <div class="rx-tools-item box-1" data-bry-mode-tool="box-1">
                            <img src="{{ asset('assets/img/tools/box-1.png') }}" alt="box-1">
                            <p>Box-1</p>
                        </div>
                    </div>
                </div>
                <div class="rx-tools-block">
                    <h3>Backgrounds</h3>
                    <div class="rx-tools-bg">
                        <div class="rx-tools-item bg-0 active-bg">
                            <img src="{{ asset('assets/img/tools/bg-0.png') }}" alt="bg-0">
                            <p>Default</p>
                        </div>
                        <div class="rx-tools-item bg-1">
                            <img src="{{ asset('assets/img/tools/bg-1.png') }}" alt="bg-1">
                            <p>Bg-1</p>
                        </div>
                        <div class="rx-tools-item bg-2">
                            <img src="{{ asset('assets/img/tools/bg-2.png') }}" alt="bg-2">
                            <p>Bg-2</p>
                        </div>
                        <div class="rx-tools-item bg-3">
                            <img src="{{ asset('assets/img/tools/bg-3.png') }}" alt="bg-3">
                            <p>Bg-3</p>
                        </div>
                        <div class="rx-tools-item bg-4">
                            <img src="{{ asset('assets/img/tools/bg-4.png') }}" alt="bg-4">
                            <p>Bg-4</p>
                        </div>
                        <div class="rx-tools-item bg-5">
                            <img src="{{ asset('assets/img/tools/bg-5.png') }}" alt="bg-5">
                            <p>Bg-5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- main-js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
</body>


<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:16 GMT -->
</html>