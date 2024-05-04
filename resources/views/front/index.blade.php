@extends('front.master')
@section('content')
<!-- Services Start -->
@include('front.include_service')
<!-- Services End -->

<!-- About Start -->
@include('front.include_about')
<!-- About End -->

<!-- Feature Start -->
@include('front.feature')
<!-- Feature End -->

<!-- Team Start -->
@include('front.team')
<!-- Team End -->

@endsection
