<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tour Packages at Kevins Bed & Breakfast, Port Blair - Explore Andaman with curated tours.">
    <meta name="keywords" content="tour, package, andaman, port blair, kevins, sightseeing, island, travel">
    <title>Tour Packages | Kevins Bed & Breakfast</title>
    <link rel="icon" href="{{ asset('assets/img/logo/logo.png') }}" type="image/x-icon">
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
    <!-- Ad-popup CSS moved to style.css -->
    <style>
        .book-now-fixed {
            position: fixed;
            top: -40px;
            right: -24px;
            z-index: 2000;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .book-now-circle {
            background: #e6be3a;
            color: #fff;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(0,0,0,0.13);
            font-size: 1.3rem;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            text-align: center;
            transition: box-shadow 0.2s;
            cursor: pointer;
        }
        .book-now-circle:hover {
            box-shadow: 0 12px 48px rgba(230,190,58,0.25);
            background: #d1a800;
            color: #fff;
            text-decoration: none;
        }
        .book-now-number {
            margin-top: 10px;
            font-size: 1.25rem;
            font-weight: 500;
            letter-spacing: 1px;
            color: #fff;
            text-shadow: 0 1px 8px rgba(0,0,0,0.11);
        }
        @media (max-width: 768px) {
            .book-now-fixed {
                top: 10px;
                right: 10px;
            }
            .book-now-circle {
                width: 120px;
                height: 120px;
                font-size: 1rem;
            }
            .book-now-number {
                font-size: 1rem;
            }
        }
        .tour-package-card { border-radius: 18px; box-shadow: 0 4px 24px rgba(0,0,0,0.07); background: #fff; margin-bottom: 32px; transition: box-shadow 0.2s; }
        .tour-package-card:hover { box-shadow: 0 8px 32px rgba(230,190,58,0.12); }
        .tour-title { font-size: 1.4rem; font-weight: 600; color: #b48b13; }
        .tour-desc { color: #444; margin-bottom: 8px; }
        .tour-list li { margin-bottom: 4px; }
        .tour-price { color: #e6be3a; font-size: 1.2rem; font-weight: 500; }
        .tour-inquiry-btn { background: #e6be3a; color: #fff; border-radius: 8px; padding: 8px 24px; border: none; font-weight: 500; transition: background 0.2s; }
        .tour-inquiry-btn:hover { background: #b48b13; color: #fff; }
        .tour-img { border-radius: 18px 18px 0 0; width: 100%; height: 240px; object-fit: cover; }
    </style>
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
    

    <!-- Header (reuse from other pages) -->
    @include('partials.header')
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="rx-breadcrumb-image" style="background: url('{{ asset('assets/img/tour/tour-banner.jpg') }}') no-repeat center; background-size: cover;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Tour Packages</h2>
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
                                        <h4>Tours</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>Tour Packages</li>
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

    <!-- Tour Packages Section (card layout like restaurants.html) -->
    <section class="section-room padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape" class="svg-img left-side">Our Curated Tours<img src="{{ asset('assets/img/banner/right-shape.svg') }}" alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Special <span>Tour Packages</span></h4>
                    </div>
                </div>
                <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-amenities-contact">
                        <p class="text-center">Explore Andaman with our handpicked experiences. Enjoy seamless travel, expert guides, and unforgettable memories from Kevins Bed & Breakfast.</p>
                    </div>
                </div>
                <!-- Tour Package Cards -->
                <!-- Havelock Island Getaway -->
                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/tour/havelock.jpg') }}" alt="Havelock Island Tour" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Havelock Island Getaway</h4>
                                    <span class="tour-desc">2 Nights / 3 Days</span>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/tour/havelock.jpg') }}" alt="Havelock Island Tour">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Havelock Island Getaway</h5>
                                        <ul>
                                            <li>Ferry transfers</li>
                                            <li>Radhanagar Beach visit</li>
                                            <li>Snorkeling & water sports</li>
                                            <li>Beach resort stay</li>
                                            <li>Daily breakfast</li>
                                        </ul>
                                        <div class="tour-price">From ₹12,500 per person</div>
                                        <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20Havelock%20Island" class="tour-inquiry-btn mt-3">Inquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- North Bay & Ross Island -->
                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/tour/northbay.jpg') }}" alt="North Bay & Ross Island" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>North Bay & Ross Island</h4>
                                    <span class="tour-desc">1 Day Excursion</span>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/tour/northbay.jpg') }}" alt="North Bay & Ross Island">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>North Bay & Ross Island</h5>
                                        <ul>
                                            <li>Boat transfers</li>
                                            <li>Coral reef snorkeling</li>
                                            <li>Historic ruins tour</li>
                                            <li>Light snacks & water</li>
                                        </ul>
                                        <div class="tour-price">From ₹3,500 per person</div>
                                        <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20North%20Bay%20and%20Ross%20Island" class="tour-inquiry-btn mt-3">Inquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Port Blair City Tour -->
                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/tour/city.jpg') }}" alt="Port Blair City Tour" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Port Blair City Tour</h4>
                                    <span class="tour-desc">Half / Full Day</span>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/tour/city.jpg') }}" alt="Port Blair City Tour">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Port Blair City Tour</h5>
                                        <ul>
                                            <li>Cellular Jail & Light Show</li>
                                            <li>Corbyn’s Cove Beach</li>
                                            <li>Anthropological Museum</li>
                                            <li>Local shopping stops</li>
                                        </ul>
                                        <div class="tour-price">From ₹2,000 per person</div>
                                        <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20Port%20Blair%20City%20Tour" class="tour-inquiry-btn mt-3">Inquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Baratang Island Adventure -->
                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/tour/baratang.jpg') }}" alt="Baratang Island Tour" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Baratang Island Adventure</h4>
                                    <span class="tour-desc">1 Day Trip</span>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/tour/baratang.jpg') }}" alt="Baratang Island Tour">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Baratang Island Adventure</h5>
                                        <ul>
                                            <li>Limestone caves</li>
                                            <li>Mud volcano</li>
                                            <li>Jarawa reserve drive</li>
                                            <li>Breakfast & lunch included</li>
                                        </ul>
                                        <div class="tour-price">From ₹4,500 per person</div>
                                        <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20Baratang%20Island" class="tour-inquiry-btn mt-3">Inquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 Island Special -->
                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/tour/3island.jpg') }}" alt="3 Island Special" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>3 Island Special</h4>
                                    <span class="tour-desc">2 Days</span>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/tour/3island.jpg') }}" alt="3 Island Special">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>3 Island Special</h5>
                                        <ul>
                                            <li>Havelock, Neil & Ross Islands</li>
                                            <li>All transfers & sightseeing</li>
                                            <li>Accommodation included</li>
                                            <li>Breakfast & select meals</li>
                                        </ul>
                                        <div class="tour-price">From ₹16,000 per person</div>
                                        <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%203%20Island%20Special" class="tour-inquiry-btn mt-3">Inquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Custom Andaman Tour -->
                <div class="col-lg-4 col-md-6 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="{{ asset('assets/img/tour/custom.jpg') }}" alt="Custom Andaman Tour" style="height: 250px; object-fit: cover;">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Custom Andaman Tour</h4>
                                    <span class="tour-desc">Tailored to You</span>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="{{ asset('assets/img/tour/custom.jpg') }}" alt="Custom Andaman Tour">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="sub-inner-contact">
                                        <h5>Custom Andaman Tour</h5>
                                        <ul>
                                            <li>Personalized itinerary</li>
                                            <li>Private transfers</li>
                                            <li>Choice of activities</li>
                                            <li>Flexible duration & budget</li>
                                        </ul>
                                        <div class="tour-price">Contact for quote</div>
                                        <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20Custom%20Andaman%20Tour" class="tour-inquiry-btn mt-3">Inquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Package 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-package-card">
                        <img src="{{ asset('assets/img/tour/northbay.jpg') }}" alt="North Bay & Ross Island" class="tour-img">
                        <div class="p-4">
                            <div class="tour-title">North Bay & Ross Island</div>
                            <div class="tour-desc">1 Day Excursion</div>
                            <ul class="tour-list">
                                <li>Boat transfers</li>
                                <li>Coral reef snorkeling</li>
                                <li>Historic ruins tour</li>
                                <li>Light snacks & water</li>
                            </ul>
                            <div class="tour-price">From ₹3,500 per person</div>
                            <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20North%20Bay%20and%20Ross%20Island" class="tour-inquiry-btn mt-3">Inquire Now</a>
                        </div>
                    </div>
                </div>
                <!-- Package 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-package-card">
                        <img src="{{ asset('assets/img/tour/city.jpg') }}" alt="Port Blair City Tour" class="tour-img">
                        <div class="p-4">
                            <div class="tour-title">Port Blair City Tour</div>
                            <div class="tour-desc">Half / Full Day</div>
                            <ul class="tour-list">
                                <li>Cellular Jail & Light Show</li>
                                <li>Corbyn’s Cove Beach</li>
                                <li>Anthropological Museum</li>
                                <li>Local shopping stops</li>
                            </ul>
                            <div class="tour-price">From ₹2,000 per person</div>
                            <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20Port%20Blair%20City%20Tour" class="tour-inquiry-btn mt-3">Inquire Now</a>
                        </div>
                    </div>
                </div>
                <!-- Package 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-package-card">
                        <img src="{{ asset('assets/img/tour/baratang.jpg') }}" alt="Baratang Island Tour" class="tour-img">
                        <div class="p-4">
                            <div class="tour-title">Baratang Island Adventure</div>
                            <div class="tour-desc">1 Day Trip</div>
                            <ul class="tour-list">
                                <li>Limestone caves</li>
                                <li>Mud volcano</li>
                                <li>Jarawa reserve drive</li>
                                <li>Breakfast & lunch included</li>
                            </ul>
                            <div class="tour-price">From ₹4,500 per person</div>
                            <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20Baratang%20Island" class="tour-inquiry-btn mt-3">Inquire Now</a>
                        </div>
                    </div>
                </div>
                <!-- Package 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-package-card">
                        <img src="{{ asset('assets/img/tour/3island.jpg') }}" alt="3 Island Special" class="tour-img">
                        <div class="p-4">
                            <div class="tour-title">3 Island Special</div>
                            <div class="tour-desc">2 Days</div>
                            <ul class="tour-list">
                                <li>Havelock, Neil & Ross Islands</li>
                                <li>All transfers & sightseeing</li>
                                <li>Accommodation included</li>
                                <li>Breakfast & select meals</li>
                            </ul>
                            <div class="tour-price">From ₹16,000 per person</div>
                            <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%203%20Island%20Special" class="tour-inquiry-btn mt-3">Inquire Now</a>
                        </div>
                    </div>
                </div>
                <!-- Package 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-package-card">
                        <img src="{{ asset('assets/img/tour/custom.jpg') }}" alt="Custom Andaman Tour" class="tour-img">
                        <div class="p-4">
                            <div class="tour-title">Custom Andaman Tour</div>
                            <div class="tour-desc">Tailored for you</div>
                            <ul class="tour-list">
                                <li>Personalized itinerary</li>
                                <li>Family, honeymoon, or group</li>
                                <li>Expert local guides</li>
                                <li>Flexible duration & budget</li>
                            </ul>
                            <div class="tour-price">On Request</div>
                            <a href="mailto:kevinsandaman@gmail.com?subject=Tour%20Package%20Inquiry:%20Custom%20Andaman%20Tour" class="tour-inquiry-btn mt-3">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
