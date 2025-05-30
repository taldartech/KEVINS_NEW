{{-- Header Partial --}}
<header>
    <div class="rx-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rx-inner-menu-desk">
                        <a href="{{ route('home') }}" class="rx-header-btn">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        </a>
                        <button class="navbar-toggler shadow-none rx-toggle-menu" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-2-line"></i>
                        </button>
                        <div class="rx-main-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav" style="display: flex; justify-content: center; align-items: center; width: 100%; gap: 12px;">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                                </li>
                                <li class="nav-item rx-dropdown">
                                    <a class="nav-link rx-dropdown-item" href="{{ route('rooms') }}">Rooms</a>
                                    <ul class="rx-dropdown-menu">
                                        <li><a class="dropdown-item" href="">Deluxe Room</a></li>
                                        <li><a class="dropdown-item" href="">Standard Room</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item rx-dropdown">
                                    <a class="nav-link rx-dropdown-item">Attractions</a>
                                    <ul class="rx-dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('historical-places') }}">Historical Places</a></li>
                                        <li><a class="dropdown-item" href="{{ route('nearby-attractions') }}">Nearby Attractions</a></li>
                                        <li><a class="dropdown-item" href="{{ route('restaurants') }}">Nearby Restaurants</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.google.com/maps/@11.6710447,92.7264715,3a,90y,289.86h,88.83t/data=!3m8!1e1!3m6!1sAF1QipMaHOoh0g3_2l6H4lBO5Zurpdpu9sTeFrRf5j7H!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMaHOoh0g3_2l6H4lBO5Zurpdpu9sTeFrRf5j7H%3Dw114-h120-k-no-pi-0-ya71.64512-ro-0-fo100!7i5376!8i2688?shorturl=1" target="_blank" rel="noopener">Virtual Tour</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tour-packages') }}">Special Tour Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
