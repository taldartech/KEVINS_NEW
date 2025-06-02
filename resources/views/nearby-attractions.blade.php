<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>Gallery | Kevins Bed & Breakfast</title>

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
        <div class="rx-breadcrumb-image" style="background: url('{{ asset('assets/img/attractions/corbyns-cove.jpg') }}')  no-repeat center; background-size: cover;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Nearby Attractions</h2>
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
                                        <h4>Nearby Attractions</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>Nearby Atttractions</li>
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

    <!-- Nearby Attractions -->
    <section class="section-amenities padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Explore Port Blair<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Nearby <span>Attractions</span></h4>
                    </div>
                </div>
                
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-amenities-contact">
                        <p class="text-center mb-5">Discover the rich history and natural beauty of Port Blair with these must-visit attractions near KEVINS Bed & Breakfast:</p>
                        
                        <div class="row mb-minus-24">
                            <!-- Historical Sites -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/attractions/cellular-jail.jpg') }}" alt="Cellular Jail" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4><i class="ri-history-line me-2"></i>Historical Sites</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/attractions/cellular-jail.jpg') }}" alt="Cellular Jail">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Historical Sites</h5>
                                                    <ul>
                                                        <li>Cellular Jail (5 mins) - Historic colonial prison</li>
                                                        <li>Ross Island (Ferry ride) - British-era ruins</li>
                                                        <li>Viper Island (10 mins) – Where History Speaks Softly</li>
                                                        <li>Japanese Bunkers (15 mins) – WWII Relics</li>
                                                        <li> Mount Manipur (1.5 hrs) (formerly Mount Harriet)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Beaches & Nature -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/attractions/corbyns-cove.jpg') }}" alt="Corbyn's Cove Beach" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4><i class="ri-sun-line me-2"></i>Beaches & Nature</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/attractions/corbyns-cove.jpg') }}" alt="Corbyn's Cove Beach">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Beaches & Nature</h5>
                                                    <ul>
                                                        <li>Corbyn's Cove Beach (10 mins) - Water sports</li>
                                                        <li>North Bay Island - Coral reefs & snorkeling</li>
                                                        <li>Marina Park (5 mins) - Scenic waterfront</li>
                                                        <li>Sippighat Farm (15 mins) - Spice gardens</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Museums & Culture -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/attractions/samudrika-museum.jpg') }}" alt="Samudrika Marine Museum" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                 <h4><i class="ri-museum-line me-2"></i>Museums & Culture</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/attractions/samudrika-museum.jpg') }}" alt="Samudrika Marine Museum">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Museums & Culture</h5>
                                                    <ul>
                                                        <li>Samudrika Marine Museum (200m)</li>
                                                        <li>Anthropological Museum (5 mins)</li>
                                                        <li>Fisheries Museum (5 mins)</li>
                                                        <li>Science Centre (10 mins)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Other Attractions -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/attractions/water-sports.jpg') }}" alt="Water Sports Complex" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4><i class="ri-map-pin-line me-2"></i>Other Attractions</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/attractions/water-sports.jpg') }}" alt="Water Sports Complex">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Other Attractions</h5>
                                                    <ul>
                                                        <li>Aberdeen Bazaar (5 mins)</li>
                                                        <li>Water Sports Complex (10 mins)</li>
                                                        <li>Veer Savarkar Airport (10 mins)</li>
                                                        <li>Phoenix Bay Jetty (5 mins)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <p class="mb-3">Our travel desk can help arrange tours and transportation to all these attractions.</p>
                            <a href="#" class="rx-btn-one">Plan Your Adventure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')


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