@extends('front.master')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Biz haqimizda</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item active text-primary">Biz haqimizda</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    @include('front.include_about')
    <!-- About End -->


    <!-- Team Start -->
    @include('front.team')
    <!-- Team End -->


    <!-- Feature Start -->
    @include('front.feature')
    <!-- Feature End -->

@endsection
