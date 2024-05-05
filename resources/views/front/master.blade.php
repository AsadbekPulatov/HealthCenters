<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sog'lomlashtirish markazi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center" style="height: 45px;">
        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Manzil</a>
                <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+998945084801</a>
                <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>sog'lomlashtirish@gmail.com</a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-flex align-items-center justify-content-end">
                <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{route('index')}}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Sog'lom hayot</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('index')}}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Bosh sahifa</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Biz haqimizda</a>
                <a href="{{route('center')}}" class="nav-item nav-link {{ request()->is('center') ? 'active' : '' }}">Markazlar</a>
                <a href="{{route('service')}}" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Xizmatlar</a>
                <a href="{{route('contact')}}" class="nav-item nav-link {{ request()->is('/contact') ? 'active' : '' }}">Bog'lanish</a>
            </div>
        </div>
    </nav>


    @if(request()->routeIs('index'))
        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="{{ asset('front/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Sog'lomlashtirish markazi</h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">Og'riqli Hayot Uchun Eng Yaxshi Yechim</h1>
                        <p class="mb-5 fs-5">
                        </p>

                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="{{ asset('front/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Sog'lomlashtirish markazi</h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">Og'riqli Hayot Uchun Eng Yaxshi Yechim</h1>
                        <p class="mb-5 fs-5 animated slideInDown">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    @endif
</div>
<!-- Navbar & Hero End -->

@yield('content')

{{--<!-- Footer Start -->--}}
{{--<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">--}}
{{--    <div class="container py-5">--}}
{{--        <div class="row g-5">--}}
{{--            <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--                <div class="footer-item d-flex flex-column">--}}
{{--                    <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>Terapia</h4>--}}
{{--                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem--}}
{{--                        dolores laudantium quia, qui similique--}}
{{--                    </p>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <i class="fas fa-share fa-2x text-white me-2"></i>--}}
{{--                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i--}}
{{--                                class="fab fa-facebook-f"></i></a>--}}
{{--                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i--}}
{{--                                class="fab fa-twitter"></i></a>--}}
{{--                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i--}}
{{--                                class="fab fa-instagram"></i></a>--}}
{{--                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i--}}
{{--                                class="fab fa-linkedin-in"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--                <div class="footer-item d-flex flex-column">--}}
{{--                    <h4 class="mb-4 text-white">Quick Links</h4>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Our Team</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--                <div class="footer-item d-flex flex-column">--}}
{{--                    <h4 class="mb-4 text-white">Terapia Services</h4>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Diagnostics</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Manual Therapy</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Massage Therapy</a>--}}
{{--                    <a href=""><i class="fas fa-angle-right me-2"></i> Rehabilitation</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--                <div class="footer-item d-flex flex-column">--}}
{{--                    <h4 class="mb-4 text-white">Contact Info</h4>--}}
{{--                    <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>--}}
{{--                    <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>--}}
{{--                    <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>--}}
{{--                    <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>--}}
{{--                    <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Footer End -->--}}

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                    class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>


<!-- Template Javascript -->
<script src="{{ asset('front/js/main.js') }}"></script>
@yield('script')
</body>

</html>
