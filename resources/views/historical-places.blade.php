<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>Historical Places | Kevins Bed & Breakfast</title>

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
        <div class="rx-breadcrumb-image" style="background: url('{{('assets/img/netaji-subash-chandra-bose-island.jpg') }}') no-repeat center; background-size: cover;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Historical Places</h2>
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
                                        <h4>Historical places</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>Historical places</li>
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

 <section class="section-amenities padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="{{ asset('assets/img/banner/left-shape.svg') }}" alt="banner-left-shape"
                                class="svg-img left-side">Heritage Sites<img src="{{ asset('assets/img/banner/right-shape.svg') }}"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Historical <span>Places</span></h4>
                    </div>
                </div>
                
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-amenities-contact">
                        <p class="text-center mb-5">Discover the Rich History of Andaman & Nicobar Islands: <br>At KEVINS Bed & Breakfast, we invite our guests to explore more than just beaches. The Andaman and Nicobar Islands are home to centuries of history—stories of freedom fighters, colonial legacies, and world war intrigue. Below are some must-visit historical landmarks, all within easy reach from our property in Port Blair.</p>
                        
                        <div class="row mb-minus-24">
                            <!-- Cellular Jail -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/attractions/Cellular-Jail.jpg') }}" alt="Cellular Jail" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4>Cellular Jail – Echoes of Freedom</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/attractions/Cellular-Jail.jpg') }}" alt="Cellular Jail">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Cellular Jail</h5>
                                                  <ul>
                                                     <li>Cellular Jail (15 mins) - Symbol of India’s independence struggle</li>
                                                     <li>Built by the British in early 1900s - Used for solitary confinement</li>
                                                     <li>Now a National Memorial with museum exhibits</li>
                                                     <li>Don't miss the evening Sound and Light Show</li>
                                                 </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Netaji subhash chandra bose island -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/netaji-subash-chandra-bose-island.jpg') }}" alt="subash chandra bose island" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4>Netaji Subhas Chandra Bose Island (Ross Island)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/netaji-subash-chandra-bose-island.jpg') }}" alt="subash chandra bose island">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Netaji Subhas Chandra Bose Island</h5>
                                                    <ul>
                                                       <li>Former British administrative capital</li>
                                                          <li>Occupied by Japanese forces during World War II</li>
                                                          <li>Visited by Netaji Subhas Chandra Bose in 1943</li>
                                                          <li>Reachable via a 10-minute boat ride from Marina Jetty</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Viper Island -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/viper-island-3.jpg') }}" alt="Viper island" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4>Viper Island – Where History Speaks Softly</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/viper-island-3.jpg') }}" alt="Viper island">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Viper Island</h5>
                                                    <ul>
                                                       <li>A peaceful island with a haunting colonial past</li>
                                                       <li>British prison island before the Cellular Jail era</li>
                                                       <li>Ruins of gallows and jail walls remain on the island</li>
                                                       <li>Stands as a silent witness to India’s freedom struggle</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Japanese bunkers -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/japanese-bunker.jpg') }}" alt="Japanese bunkers" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4>Japanese Bunkers – WWII Relics</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/japanese-bunker.jpg') }}" alt="Japanese bunkers">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Japanese Bunkers</h5>
                                                    <ul>
                                                          <li>Located around Port Blair near Ross Island and Corbyn’s Cove</li>
                                                          <li>Well-preserved bunkers from the Japanese occupation</li>
                                                          <li>Constructed during World War II</li>
                                                          <li>Offer a unique glimpse into wartime history</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                             <!-- Mount Manipur -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/mount-manipur.jpg') }}" alt="Mount manipur" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4>Mount Manipur (formerly Mount Harriet)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/mount-manipur.jpg') }}" alt="Mount manipur">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Mount Manipur</h5>
                                                    <ul>
                                                            <li>Third-highest peak in the Andaman & Nicobar Islands</li>
                                                            <li>Former British summer retreat, renamed to honor Manipuri freedom fighters</li>
                                                            <li>Site of exile after the 1891 Anglo-Manipuri War</li>
                                                            <li>Known for lush forests, panoramic views, and ₹20 note scenery</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Chatham Saw mill -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/chatham-saw-mill.jpg') }}" alt="Chatham saw mill" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4> Chatham Saw Mill</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/chatham-saw-mill.jpg') }}" alt="Chatham saw mill">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Chatham Saw Mill</h5>
                                                    <ul>
                                                         <li>Asia’s oldest functioning sawmill, established in 1883</li>
                                                         <li>A living piece of colonial-era industrial history</li>
                                                         <li>Features a fascinating museum with historic exhibits</li>
                                                         <li>Showcases traditional craftsmanship that fueled colonial trade</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aberdeen Bazaar & Clock Tower -->
                            <div class="col-lg-6 col-md-6 mb-24">
                                <div class="rx-rooms-main-box">
                                    <div class="rooms-box-front">
                                        <img src="{{ asset('assets/img/aberdeen-clock-tower.jpg') }}" alt=" Aberdeen Bazaar & Clock Tower" style="height: 300px; object-fit: cover;">
                                        <div class="content-wrap">
                                            <div class="inner-contact">
                                                <h4>Aberdeen Bazaar & Clock Tower</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rooms-box-back">
                                        <img src="{{ asset('assets/img/aberdeen-clock-tower.jpg') }}" alt="Aberdeen Bazaar & Clock Tower">
                                        <div class="content-wrap">
                                            <div class="box-overlay"></div>
                                            <div class="inner-back-side">
                                                <div class="sub-inner-contact">
                                                    <h5>Aberdeen Bazaar & Clock Tower</h5>
                                                  <ul>
                                                      <li>Built in 1943 to honor WWI soldiers</li>
                                                      <li>Located in Port Blair’s bustling Aberdeen Bazaar</li>
                                                      <li>A landmark symbolizing resilience and colonial history</li>
                                                      <li>Close to Cellular Jail, Marina Park, and Japanese Bunkers</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="text-center mt-4">
                            <p class="mb-3">Our travel desk can help arrange tours and transportation to all these Historical places.</p>
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