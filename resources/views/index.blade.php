<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title> Home | Kevins Bed & Breakfast</title>

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

      <!-- Hero -->
      <section class="section-hero">
        <div class="container-fulid">
            <div class="row">
                <div class="col-12">
                    <div class="rx-slider">
                        <!-- Slide 1 - Welcome -->
                        <div class="rx-slide slide-1">
                            <img src="{{ asset('assets/img/hero/hero1.jpeg') }}" alt="Colorful houses on a hill in Andaman under blue sky" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>Welcome to KEVINS Bed & Breakfast</p>
                                                <h2>Your cosy island home in <span>Sri Vijaya</span> <span>Puram(Port Blair)</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                        <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 - Deluxe Room -->
                        <div class="rx-slide slide-2">
                            <img src="{{ asset('assets/img/hero/hero2.jpeg') }}" alt="Tranquil lake with wooden huts and boats, Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p> Wake Up by the Waves</p>
                                                <h2>Sunsets that <span> stay with </span> <span>you forever.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                    <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 - Standard Room -->
                        <div class="rx-slide slide-3">
                            <img src="{{ asset('assets/img/hero/hero3.jpeg') }}" alt="Scuba diver with colorful coral reef and fish, Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>Live the Island Dream</p>
                                                <h2> Your island Repeat <span> journey starts </span> <span>at KEVINS.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                         <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Slide 4 - Room Hall -->
                        <div class="rx-slide slide-4">
                            <img src="{{ asset('assets/img/hero/hero4.jpeg') }}" alt="Historic Cellular Jail, Sri Vijaya Puram (Port Blair), Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>Hidden by Nature</p>
                                                <h2>Step into <span> Andaman’s serene </span> <span>wilderness.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                         <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 - Restaurant -->
                        <div class="rx-slide slide-5">
                            <img src="{{ asset('assets/img/hero/hero5.jpeg') }}" alt="Boats on a calm river with forest, Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>Sail into Stillness</p>
                                                <h2>Moments of <span> calm on</span> <span>open waters.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                         <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Slide 6 - Restaurant -->
                        <div class="rx-slide slide-6">
                            <img src="{{ asset('assets/img/hero/hero6.jpeg') }}" alt="Boats on a calm river with forest, Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>Walk Through Time</p>
                                                <h2>Explore Andaman’s <span>colonial past</span> <span> and heritage.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                         <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Slide 7 - Restaurant -->
                        <div class="rx-slide slide-7">
                            <img src="{{ asset('assets/img/hero/hero7.jpeg') }}" alt="Boats on a calm river with forest, Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>Adventure Starts Here</p>
                                                <h2>Glide through <span>glowing waters</span> <span>by night.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                         <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Slide 5 - Restaurant -->
                        <div class="rx-slide slide-8">
                            <img src="{{ asset('assets/img/hero/hero8.jpeg') }}" alt="Boats on a calm river with forest, Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>  Dive into the Action</p>
                                                <h2>Discover<span> Andaman’s vibrant  </span> <span>marine life.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                         <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Slide 5 - Restaurant -->
                     


                        <!-- Slide 5 - Restaurant -->
                        <div class="rx-slide slide-10">
                            <img src="{{ asset('assets/img/hero/hero10.jpeg') }}" alt="Boats on a calm river with forest, Andaman" class="banner-arrow-img">
                            <div class="rx-hero-contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner-contact slider-animation">
                                                <p>Rooted in Pride</p>
                                                <h2>Celebrate India’s <span>spirit by</span> <span> the sea.</span></h2>
                                                <div class="booking-now">
                                                    <div class="ico">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                    <div class="booking-text">
                                                         <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank"><p>Book Now</p></a>
                                                        <span>993 328 3649</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.sf_booking_form')

    <!-- About -->
     
    
    <section class="section-about padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-about-contact">
                        <div class="rx-banner">
                            <!-- <p>The Royalx Hotel</p> -->
                            <h4 id="why-choose-kevins">Welcome to <span>Kevins Bed & Breakfast</span>  - Your Gateway
                            to <span>the Andamans</span> </h4>
                        </div>
                        <div class="inner-contact">
                        <p>
                        When you stay at KEVINS, your Andaman experience takes center stage. Whetheryou’ve come to Port Blair to explore historic sites like Cellular Jail, relax at Corbyn’sCove Beach, or catch the ferry to Havelock and Neil Islands, KEVINS Bed &amp; Breakfastplaces you exactly where you need to be. Conveniently located near Port Blair Airport,the city’s main attractions, and major ferry terminals, we offer you a calm, stress-freebase at one of the best budget hotels in Port Blair.
                        </p>
                        <p>
                        Our clean, comfortable rooms are thoughtfully designed for families, couples, and solo
travelers looking for a value-for-money hotel in Port Blair that doesn’t compromise on
comfort or service. Each stay includes a complimentary homemade breakfast,
personalized local guidance, easy ferry bookings, and quick airport transfers, allowing
you to focus entirely on enjoying your Andaman holiday while we handle the details.
</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-about-contact">
                        <div class="rx-banner">
                            <h4><span>Exceptional Comfort.</span>  Personalized Service.  <span>Effortless
                            Stays.</span></h4>
                        </div>
                        <div class="inner-contact">
                            <p>At KEVINS, you are always our priority. Whether you&#39;re here for a relaxing family
vacation, a romantic escape, or a short business trip, our attentive team is dedicated to
making your stay smooth, comfortable, and memorable. With thoughtful touches, a
peaceful atmosphere, and genuine care, KEVINS has become one of the most trusted
options for travelers searching for a homestay in Port Blair near the airport, a
guesthouse close to the ferry terminal, or a reliable Bed &amp; Breakfast in Andaman &amp;
Nicobar Islands.</p>
                            <p>From exploring pristine beaches and vibrant markets to visiting enriching museums,
historic landmarks, and island-hopping adventures, your stay is entirely yours to design.
At KEVINS Bed &amp; Breakfast, we simply make it easy, comfortable, and unforgettable,
ensuring your Andaman story begins in the best possible way.
                            </p>
                            
                            <div class="text-center">
                                <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" target="_blank" class="rx-btn-two">Book Your Stay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    <!-- Services -->
    <section class="section-services padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Facilities<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Our Best <span>Services</span></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="flip-left" data-aos-duration="1000">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/1.svg') }}" alt="services-1" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Basic Facilities</h5>
                            <!-- <ul>
                                <li>- 24-hour front desk assistance.</li>
                                <li>- Room Service</li>
                                <li>- Housekeeping</li>
                                <li>- Wi-Fi & Parking</li>
                            </ul> -->
                            <ul>
                                <li>- 24-hour front desk assistance</li>
                                <li>- Free high-speed Wi-Fi</li>
                                <li>- Daily housekeeping services</li>
                                <li>- Free parking facility</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/2.svg') }}" alt="services-2" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Room Amenities</h5>
                            <!-- <ul>
                                <li>- Comfortable Bedding</li>
                                <li>- Bathroom & Pool</li>
                                <li>- Tv, Ac & Heathing</li>
                                <li>- Mini Bar & Safe</li>
                            </ul> -->
                            <ul>
                                <li>- Air-conditioned rooms</li>
                                <li>- En-suite bathrooms</li>
                                <li>- LED TVs with cable</li>
                                <li>- Comfortable bedding</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/3.svg') }}" alt="services-3" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Dining Options</h5>
                            <!-- <ul>
                                <li>- Complimentary breakfast.</li>
                                <li>- Restaurant & Cafe</li>
                                <li></li>
                                <li></li>
                            </ul> -->
                            <ul>
                                <li>- Complimentary breakfast</li>
                                <li>- Restaurant & Cafe</li>
                                <li>- Room service</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="{{ asset('assets/img/services/7.svg') }}" alt="services-7" class="svg-img">
                        </div>
                        <div class="services-contact">
                            <h5>Additional Services</h5>
                            <!-- <ul>
                                <li>- Concierge</li>
                                <li>- Laundry & Dry Cleaning</li>
                                <li>- Shuttle Service</li>
                                <li>- Pet-Friendly</li>
                            </ul> -->
                            <ul>
                                <li>- Airport pickup/drop-off</li>
                                <li>- Travel desk for tours</li>
                                <li>- Water sports bookings</li>
                                <li>- Laundry & Dry Cleaning</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
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
                </div> -->
            </div>
        </div>
    </section>
    <style>
        /* Ensure all service cards are the same height */
        .rx-services-row-equalheight {
            display: flex;
            flex-wrap: wrap;
        }
        .rx-services-row-equalheight > [class*='col-'] {
            display: flex;
        }
        .rx-services {
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 100%;
        }
        .rx-services .services-contact {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
    </style>

    <!-- Rooms -->
    <section class="section-room padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Comfortable Stay<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Our <span>Rooms</span></h4>
                    </div>
                </div>
                
                <!-- Standard Room -->
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/Room1.png') }}" alt="Standard Room">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Standard Room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/Room1.png') }}" alt="Standard Room">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Standard Room</h5>
                                        <ul>
                                            <li>Free WiFi Access</li>
                                            <li>Air Conditioning</li>
                                            <li>Complimentary Breakfast</li>
                                            <li>Queen-size Bed</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="https://bookingengine.stayflexi.com/?hotel_id=20862&checkin=10-14-2020&checkout=10-15-2020&num_nights=1&checkinSlot=10&checkinSlot=10&num_guests=1&widget=true" class="inner-button" target="_blank">Book Now</a>
                                        <a href="{{ route ('standard-room')}}" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-amenities-contact">
                        <div class="inner-banner">
                            <h4>Standard Rooms</h4>
                        </div>
                        <p>Our Standard Rooms provide a cozy and well-equipped stay with all essential comforts. Each room features air conditioning, a private shower, and free WiFi for a seamless experience. Enjoy entertainment on a flat-screen TV with international channels, rest comfortably on a queen-size bed, and store your belongings in a spacious wardrobe. Perfect for solo travellers or couples.</p>
                        <div class="rx-about-inner-box">
                            <h5 class="mb-3">Room Features & Amenities:</h5>
                            <div class="row mb-minus-24">
                                <div class="col-sm-6 col-12 mb-24">
                                    <ul>
                                        <li>✓ Free Welcome Drink</li>
                                        <li>✓ Air Conditioning</li>
                                        <li>✓ Free WiFi Access</li>
                                        <li>✓ Complimentary Tea</li>
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

    <!-- Amenities -->
    <!-- <section class="section-amenities padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Luxury Comforts<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Our <span>Amenities</span></h4>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="owl-carousel rx-amenities-slider">
                        <div class="row mb-minus-24">
                            <div class="col-lg-8 col-12 mb-24">
                                <div class="rx-amenities-img">
                                    <img src="{{ asset('assets/img/amenities/1.jpg') }}" alt="amenities-1">
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-24">
                                <div class="rx-amenities-contact amenities-animation">
                                    <div class="inner-banner">
                                        <h4>Restro & Cafe</h4>
                                    </div>
                                    <p>Welcome to The Gourmet Haven, where culinary excellence
                                        meets a serene and inviting ambiance. Nestled in the heart
                                        of the city, our restaurant offers a delightful escape from the
                                        hustle and bustle, providing a perfect setting for any
                                        occasion.</p>
                                    <div class="amenities-btn">
                                        <a href="room-details.html" class="rx-btn-two">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-minus-24">
                            <div class="col-lg-8 col-12 mb-24">
                                <div class="rx-amenities-img">
                                    <img src="{{ asset('assets/img/amenities/2.jpg') }}" alt="amenities-2">
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-24">
                                <div class="rx-amenities-contact amenities-animation">
                                    <div class="inner-banner">
                                        <h4>Spa & Beauty</h4>
                                    </div>
                                    <p>Welcome to The Gourmet Haven, where culinary excellence
                                        meets a serene and inviting ambiance. Nestled in the heart
                                        of the city, our restaurant offers a delightful escape from the
                                        hustle and bustle, providing a perfect setting for any
                                        occasion.</p>
                                    <div class="amenities-btn">
                                        <a href="room-details.html" class="rx-btn-two">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-minus-24">
                            <div class="col-lg-8 col-12 mb-24">
                                <div class="rx-amenities-img">
                                    <img src="{{ asset('assets/img/amenities/3.jpg') }}" alt="amenities-3">
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-24">
                                <div class="rx-amenities-contact amenities-animation">
                                    <div class="inner-banner">
                                        <h4>Gym & Fitness</h4>
                                    </div>
                                    <p>Welcome to The Gourmet Haven, where culinary excellence
                                        meets a serene and inviting ambiance. Nestled in the heart
                                        of the city, our restaurant offers a delightful escape from the
                                        hustle and bustle, providing a perfect setting for any
                                        occasion.</p>
                                    <div class="amenities-btn">
                                        <a href="room-details.html" class="rx-btn-two">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-minus-24">
                            <div class="col-lg-8 col-12 mb-24">
                                <div class="rx-amenities-img">
                                    <img src="{{ asset('assets/img/amenities/4.jpg') }}" alt="amenities-4">
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-24">
                                <div class="rx-amenities-contact amenities-animation">
                                    <div class="inner-banner">
                                        <h4>Swimming Pool</h4>
                                    </div>
                                    <p>Welcome to The Gourmet Haven, where culinary excellence
                                        meets a serene and inviting ambiance. Nestled in the heart
                                        of the city, our restaurant offers a delightful escape from the
                                        hustle and bustle, providing a perfect setting for any
                                        occasion.</p>
                                    <div class="amenities-btn">
                                        <a href="room-details.html" class="rx-btn-two">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Dining -->
    <section class="section-amenities padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Culinary Experience<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Our <span>Dining</span></h4>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="row mb-minus-24">
                        <div class="col-lg-6 col-12 mb-24">
                            <div class="rx-rooms-main-box">
                                <div class="rooms-box-front">
                                    <img src="{{ asset('assets/img/Restaurant1.png') }}" alt="dining-experience">
                                    <div class="content-wrap">
                                        <div class="inner-contact">
                                            <h4>Breakfast & Dining</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="rooms-box-back">
                                    <img src="{{ asset('assets/img/Restaurant1.png') }}" alt="dining-experience">
                                    <div class="content-wrap">
                                        <div class="box-overlay"></div>
                                        <div class="inner-back-side">
                                            <div class="sub-inner-contact">
                                                <h5>Dining Features</h5>
                                                <ul>
                                                    <li>Complimentary breakfast</li>
                                                    <li>Local cuisine recommendations</li>
                                                    <li>Fresh, locally-sourced ingredients</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-24">
                            <div class="rx-amenities-contact">
                                <div class="inner-banner">
                                    <h4>Breakfast & Dining</h4>
                                </div>
                                <p>Kickstart your day with a delicious complimentary breakfast, served with warmth and care. Our warm and friendly staff is always ready to recommend the best local dining spots, ensuring you experience the rich flavors of the Andamans.</p>
                                <div class="rx-about-inner-box">
                                    <h5 class="mb-3">Dining Features:</h5>
                                    <div class="row mb-minus-24">
                                        <div class="col-sm-6 col-12 mb-24">
                                            <ul>
                                                <li>✓ Complimentary breakfast</li>
                                                <li>✓ Local cuisine recommendations</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-12 mb-24">
                                            <ul>
                                                
                                                <li>✓ Fresh, locally-sourced ingredients</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="section-reviews padding-tb-50" style="background:#f8f9fa;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="rx-banner text-center rx-banner-effects">
                        <h4>What Our <span>Guests Say</span></h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="review-card p-4 h-100 shadow-sm bg-white rounded">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/img/avatar1.png') }}" alt="Guest" class="rounded-circle me-3" width="48" height="48">
                            <div>
                                <h6 class="mb-0">Amit Sharma</h6>
                                <div class="text-warning small">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"A wonderful stay! The staff was friendly and the rooms were spotless. Highly recommended for families visiting Port Blair."</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="review-card p-4 h-100 shadow-sm bg-white rounded">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/img/avatar2.png') }}" alt="Guest" class="rounded-circle me-3" width="48" height="48">
                            <div>
                                <h6 class="mb-0">Priya Menon</h6>
                                <div class="text-warning small">
                                    ★★★★☆
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"Loved the breakfast and the location. The virtual tour helped us plan our trip better. Will visit again!"</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="review-card p-4 h-100 shadow-sm bg-white rounded">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/img/avatar3.png') }}" alt="Guest" class="rounded-circle me-3" width="48" height="48">
                            <div>
                                <h6 class="mb-0">John Dsouza</h6>
                                <div class="text-warning small">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"Great hospitality and very comfortable rooms. The staff went out of their way to make our stay memorable."</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .review-card { transition: box-shadow 0.2s; }
            .review-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.12); }
        </style>
    </section>



    <!-- Check-in/Check-out Information -->
    <section class="section-services padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Important Information<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Check-in & <span>Check-out</span></h4>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 mb-24 mx-auto" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-services text-center">
                        <div class="services-contact">
                            <div class="row">
                                <div class="col-6">
                                    <div class="check-time">
                                        <h5>Check-in</h5>
                                        <p>10:00 AM</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="check-time">
                                        <h5>Check-out</h5>
                                        <p>08:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Extra Services -->
    <!-- <section class="section-extra-services padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Our Pricing<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
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
    </section> -->

    <!-- Testimonials -->
    <!-- <section class="section-testimonials padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Testimonials<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
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
                                            amet alias aut."</p>
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
                                            amet alias aut."</p>
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
                                            amet alias aut."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->
 
    <!-- Blog -->
    <!-- <section class="section-blog padding-t-50 padding-b-100">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">New Blogs<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Latest <span>News</span></h4>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="owl-carousel rx-blog-slider" id="rxblogslider">
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="blog-1" id="myImage">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 28,2024 - Restaurant</span>
                                <h4><a href="blog-details.html">Best way to solve business deal issue in market.</a>
                                </h4>
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
    </section> -->


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
    <!-- <div class="rx-tools-sidebar-overlay"></div>
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
                            <img src="assets/img/tools/ltr.png" alt="ltr">
                            <p>LTR</p>
                        </div>
                        <div class="mode-primary rx-tools-item mode rtl" data-rx-mode-tool="rtl">
                            <img src="assets/img/tools/rtl.png" alt="rtl">
                            <p>RTL</p>
                        </div>
                    </div>
                </div>
                <div class="rx-tools-block">
                    <h3>Dark Modes</h3>
                    <div class="rx-tools-dark">
                        <div class="mode-primary rx-tools-item mode active-dark-mode light" data-rx-mode-tool="light">
                            <img src="assets/img/tools/light.png" alt="light">
                            <p>Light</p>
                        </div>
                        <div class="rx-tools-item mode dark" data-rx-mode-tool="dark">
                            <img src="assets/img/tools/dark.png" alt="dark">
                            <p>Dark</p>
                        </div>
                    </div>
                </div>
                <div class="rx-tools-block">
                    <h3>Box Design</h3>
                    <div class="rx-tools-box">
                        <div class="rx-tools-item default active-box" data-bry-mode-tool="default">
                            <img src="assets/img/tools/box-0.png" alt="box-0">
                            <p>Default</p>
                        </div>
                        <div class="rx-tools-item box-1" data-bry-mode-tool="box-1">
                            <img src="assets/img/tools/box-1.png" alt="box-1">
                            <p>Box-1</p>
                        </div>
                    </div>
                </div>
                <div class="rx-tools-block">
                    <h3>Backgrounds</h3>
                    <div class="rx-tools-bg">
                        <div class="rx-tools-item bg-0 active-bg">
                            <img src="assets/img/tools/bg-0.png" alt="bg-0">
                            <p>Default</p>
                        </div>
                        <div class="rx-tools-item bg-1">
                            <img src="assets/img/tools/bg-1.png" alt="bg-1">
                            <p>Bg-1</p>
                        </div>
                        <div class="rx-tools-item bg-2">
                            <img src="assets/img/tools/bg-2.png" alt="bg-2">
                            <p>Bg-2</p>
                        </div>
                        <div class="rx-tools-item bg-3">
                            <img src="assets/img/tools/bg-3.png" alt="bg-3">
                            <p>Bg-3</p>
                        </div>
                        <div class="rx-tools-item bg-4">
                            <img src="assets/img/tools/bg-4.png" alt="bg-4">
                            <p>Bg-4</p>
                        </div>
                        <div class="rx-tools-item bg-5">
                            <img src="assets/img/tools/bg-5.png" alt="bg-5">
                            <p>Bg-5</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    -->

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



<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:07 GMT -->
</html>