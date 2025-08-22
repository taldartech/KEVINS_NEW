<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kevins Bed & Breakfast - Best hotel in port blair">
    <meta name="keywords" content="hotel, booking, restaurant, spa, resort, hotel in port blair,restaurants in port blair , attracitons in port blair, best property in port blair, homestay">
    <title>Kevins Bed & Breakfast - Best hotel in port blair</title>

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
<style>

.recent-inner-post {
    max-height: 500px; /* adjust this height based on your design */
    overflow-y: auto;
    padding-right: 10px; /* avoid content being hidden behind scrollbar */
}

/* Optional: make scrollbar look nicer */
.recent-inner-post::-webkit-scrollbar {
    width: 6px;
}

.recent-inner-post::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
}
    </style>

<body>

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
                                    <h2>Blog Details</h2>
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
                                        <h4>Blog Details</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li>Blog Details</li>
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

    <!-- Blog-details -->
    <section class="section-blog-details padding-t-50 padding-b-100">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-8 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-blog-details">
                        <div class="rx-blog-details-cart">
                            <div class="blog-details-img">
                                <img src="{{ asset($blog->image_url) }}" alt="details-1">
                            </div>
                            <div class="blog-details-contact">
                                <span>{{ \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') }} - {{ $blog->title }}</span>
                                <h4><a href="{{ route('blog-details', $blog->id) }}">{{ $blog->heading }}</a>
                                </h4>
                                {{-- <h2>{{ Str::limit($blog->heading, 60) }}</h2> --}}
                                <p>{{ $blog->content }}</p>

                               
                                <div class="pagination">
                                    <ul>
                                        <li><a href="javascript:void(0)">Previous</a></li>
                                        <li><a href="javascript:void(0)">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-blog-details-sidebar">
                      
                         
                        <div class="rx-recent-post">
                            <h5 class="sub-title">Recent Posts</h5>
                            <div class="recent-inner-post">
                                @foreach ($blogs as $blog)
                                <div class="recent-post-cart">
                                    <div class="post-img">
                                        <img src="{{ asset($blog->image_url) }}" alt="blog-1">
                                    </div>
                                    <div class="post-contact">
                                        <span>{{ \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') }} - {{ $blog->title }}</span>
                                        <h4><a href="{{ route('blog-details', $blog->id) }}">{{ $blog->heading }}</a></h4>
                                    </div>
                                </div>
                                @endforeach
                                <div class="recent-post-cart">
                                    <div class="post-img">
                                        <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="blog-2">
                                    </div>
                                    <div class="post-contact">
                                        <span>June 30, 2026 - Gym</span>
                                        <h4><a href="blog-details.html">Marketing Guide 5 steps to Success.</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post-cart">
                                    <div class="post-img">
                                        <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="blog-1">
                                    </div>
                                    <div class="post-contact">
                                        <span>June 16, 2026 - Spa</span>
                                        <h4><a href="blog-details.html">Best Way to solve Business deal.</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post-cart">
                                    <div class="post-img">
                                        <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="blog-1">
                                    </div>
                                    <div class="post-contact">
                                        <span>June 10, 2025 - Golf</span>
                                        <h4><a href="blog-details.html">customer service stats know in 2019.</a></h4>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        {{-- <div class="rx-popular-tags">
                            <h5 class="sub-title">Popular Tags</h5>
                            <div class="popular-inner-tags">
                                <ul>
                                    <li>
                                        <a href="blog-details.html">Entertainment</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Gym</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Booking</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Hotel</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Entertainment</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Guests</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Booking</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Entertainment</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Hotel</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
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


<!-- Mirrored from maraviyainfotech.com/projects/royalx-html/royalx-html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 05:47:26 GMT -->
</html>