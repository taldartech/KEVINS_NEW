<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>Blog | Kevins Bed & Breakfast</title>

    <!-- site Favicon -->
    <link rel="icon" href="assets/img/logo/logo.png" type="image/x-icon">

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

<style>
    .fixed-blog-img img {
        width: 396.6px;
        height: 270.6px;
        object-fit: cover; /* keeps aspect ratio without distortion */
        border-radius: 8px; /* optional for rounded corners */
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
    <section class="section-breadcrumb padding-b-50">
        <div class="rx-breadcrumb-image">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Blog</h2>
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
                                        <h4>Blog</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li>Blog</li>
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
                        @foreach($blogs as $blog)
        <div class="rx-blog-card">
            <div class="rx-blog-img fixed-blog-img">
                @if($blog->image_url)
                    <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->title }}">
                @else
                    <img src="{{ asset('assets/img/default-blog.jpg') }}" alt="default">
                @endif
            </div>
            <div class="rx-blog-contact">
                <span>{{ \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') }} - {{ $blog->title }}</span>
                <h4>
                    <a href="{{ route('blog-details', $blog->id) }}">
                        {{ Str::limit($blog->content, 60) }}
                    </a>
                </h4>
            </div>
        </div>
    @endforeach

                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="blog-1">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 28,2024 - Restaurant</span>
                                <h4><a href="{{ route('blog-details', $blog->id) }}">Best way to solve business deal issue in market.</a></h4>
                            </div>
                        </div>
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="blog-2">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 30,2021 - Gym</span>
                                <h4><a href="{{ route('blog-details', $blog->id ) }}">Marketing Guide 5 steps to Success.</a></h4>
                            </div>
                        </div>
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="blog-3">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 16,2021 - Spa</span>
                                <h4><a href="{{ route('blog-details', $blog->id) }}">Best Way to solve Business deal.</a></h4>
                            </div>
                        </div>
                        <div class="rx-blog-card">
                            <div class="rx-blog-img">
                                <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="blog-4">
                            </div>
                            <div class="rx-blog-contact">
                                <span>June 10,2025 - Golf</span>
                                <h4><a href="{{ route('blog-details', $blog->id) }}">customer service stats know in 2019.</a></h4>
                            </div>
                        </div>
                    </div>
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
    
    <script>
        $(document).ready(function(){
            // Initialize Owl Carousel for blog slider
            $('.rx-blog-slider').owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 3
                    }
                },
                navText: ['<i class="ri-arrow-left-s-line"></i>', '<i class="ri-arrow-right-s-line"></i>']
            });
        });
    </script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:23 GMT -->
</html>