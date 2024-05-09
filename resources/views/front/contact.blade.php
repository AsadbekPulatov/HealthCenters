@extends('front.master')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Bog'lanish</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item active text-primary">Bog'lanish</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style mb-4">
                    <h4 class="sub-title text-white px-3 mb-0">Bog'lanish</h4>
                </div>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                    <h2 class="display-5 text-white mb-2">Aloqa qilish</h2>
                    <form action="{{ route('messages.store') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border border-white" id="name"
                                           placeholder="Your Name" name="name">
                                    <label for="name">Ismingiz</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent border border-white"
                                           id="email" placeholder="Your Email" name="email">
                                    <label for="email">Emailingiz</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border border-white"
                                           id="subject" placeholder="Subject" name="title">
                                    <label for="subject">Mavzu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent border border-white"
                                              placeholder="Leave a message here" id="message" name="message"
                                              style="height: 160px"></textarea>
                                    <label for="message">Xabar</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-light text-primary w-100 py-3">Xabar jo'natish</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-transparent rounded">
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                 style="width: 90px; height: 90px; border-radius: 50px;"><i
                                    class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Manzil</h4>
                            <p class="mb-0 text-white">Ургенч, Xorazm Region, Uzbekistan</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                 style="width: 90px; height: 90px; border-radius: 50px;"><i
                                    class="fa fa-phone-alt fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Tel</h4>
                            <p class="mb-0 text-white">+998945084801</p>
                            <p class="mb-0 text-white">+998330515030</p>
                        </div>

                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                 style="width: 90px; height: 90px; border-radius: 50px;"><i
                                    class="fa fa-envelope-open fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Email</h4>
                            <p class="mb-0 text-white">info@example.com</p>
                            <p class="mb-0 text-white">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" target="_blank"
                           href="https://www.facebook.com/welnesssurgench1223?mibextid=ZbWKwL">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2"
                           href="https://t.me/welnessurganch">
                            <i class="fab fa-telegram"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" target="_blank"
                           href="https://www.instagram.com/welnesss_urganch?igsh=cnEwYXA4ZDZ2M3Mx">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="rounded h-100">
                        <iframe class="rounded w-100"
                                style="height: 500px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d887.7012579409711!2d60.61547744911328!3d41.55064526187653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6c969e563fa7ea99%3A0x95fe9db2f6bef867!2sWMC%20MASSAJ%20SENTR!5e0!3m2!1suz!2s!4v1715268594562!5m2!1suz!2s"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
