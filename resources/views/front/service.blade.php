@extends('front.master')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Services</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- Services Start -->
        @include('front.include_service')
        <!-- Services End -->


        <!-- Feature Start -->
        @include('front.feature')
        <!-- Feature End -->


        <!-- Testimonial Start -->
        @include('front.testimonial')
        <!-- Testimonial End -->

@endsection
