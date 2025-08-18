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
<style>
    .gallery-thumb {
    width: 336px;
    height: 240px;
    object-fit: cover;
    border-radius: 6px;
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
        <div class="rx-breadcrumb-image" style="background: url('assets/img/gallery-banner.jpg') no-repeat center; background-size: cover;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Gallery</h2>
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
                                        <h4>Gallery</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>Gallery</li>
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

    <!-- Gallery -->
    <section class="section-gallery padding-tb-100">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="assets/img/banner/left-shape.svg" alt="banner-left-shape" class="svg-img left-side">Grand Ambiance<img src="assets/img/banner/right-shape.svg" alt="banner-right-shape" class="svg-img right-side"></p>                        
                        <h4>Our <span>Gallery</span></h4>
                    </div>
                </div>
                @forelse($galleries as $gallery)
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" 
                     data-aos="fade-up" 
                     data-aos-duration="1000" 
                     data-aos-delay="{{ ($loop->index % 3) * 200 }}">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="{{ asset($gallery->image_url) }}" data-fancybox="gallery">
                            <img class="gallery-thumb" src="{{ asset($gallery->image_url) }}" alt="{{ $gallery->caption ?? 'Gallery Image' }}">
                        </a>
                        @if($gallery->caption)
                            <figcaption class="text-center mt-2">{{ $gallery->caption }}</figcaption>
                        @endif
                    </figure>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No pictures available in the gallery yet.</p>
                </div>
            @endforelse
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Room1.png" data-fancybox="gallery">
                            <img src="assets/img/Room1.png" alt="Standard Room">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Room2.png" data-fancybox="gallery">
                            <img src="assets/img/Room2.png" alt="Deluxe Room">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Room3.png" data-fancybox="gallery">
                            <img src="assets/img/Room3.png" alt="Deluxe Room">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Room4.png" data-fancybox="gallery">
                            <img src="assets/img/Room4.png" alt="Deluxe Room">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Room5.png" data-fancybox="gallery">
                            <img src="assets/img/Room5.png" alt="Deluxe Room">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Restaurant1.png" data-fancybox="gallery">
                            <img src="assets/img/Restaurant1.png" alt="Restaurant">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Restaurant2.png" data-fancybox="gallery">
                            <img src="assets/img/Restaurant2.png" alt="Restaurant">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Restaurant3.png" data-fancybox="gallery">
                            <img src="assets/img/Restaurant3.png" alt="Restaurant">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24 d-none-991" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Restaurant4.png" data-fancybox="gallery">
                            <img src="assets/img/Restaurant4.png" alt="Restaurant">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Restaurant5.png" data-fancybox="gallery">
                            <img src="assets/img/Restaurant5.png" alt="Restaurant">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/RoomHall.png" data-fancybox="gallery">
                            <img src="assets/img/RoomHall.png" alt="Room Hall">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Hall.png" data-fancybox="gallery">
                            <img src="assets/img/Hall.png" alt="Hall">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 rx-575-50 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <figure class="rx-gallery-card">
                        <a class="rx-gallery-img" href="assets/img/Bathroom.png" data-fancybox="gallery">
                            <img src="assets/img/Bathroom.png" alt="Bathroom">
                        </a>
                    </figure>
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
            var closeBtn = document.getElementById('closeAdPopupBtn');
            var popup = document.getElementById('adPopup');
            closeBtn.addEventListener('click', function() {
                popup.style.opacity = '0';
                popup.style.transform = 'scale(0.9)';
                setTimeout(function() {
                    popup.style.display = 'none';
                }, 200);
            });
        });
    </script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:07 GMT -->
</html>