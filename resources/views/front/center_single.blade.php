@extends('front.master')

@section('content')

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-6 p-3">
                    <img src="{{ asset('front/img/blog-3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                </div>
                <div class="col-6 p-5">
                    <div class="d-flex justify-content-between mb-4">
                        <a href="#" class="h4">Markaz nomi</a>
                        <p class="mb-0 text-muted"><i class="fa fa-star text-primary"></i> 5 </p>
                    </div>
                    <p class="my-4">Markaz tavsif</p>
                    <hr>
                    <p class="h-4">Telefon raqami: +998 91 984 60 45</p>
                    <p class="h-4">Manzili: Urganch</p>
                    <p class="h-4">Ish vaqti: 09:00 - 18:00</p>
                    <hr>
                    <p class="h-4">Xizmatlar:</p>
                    <a href="" class="btn btn-info">TEST1</a>
                    <a href="" class="btn btn-info">TEST1</a>
                </div>
                <div class="col-12 p-3">
                    <a class="h4" style="margin-bottom: 50px;!important;">Izohlar</a>
                    <p class="h-4 mt-3"><span class="fw-bolder text-dark">USER: </span>Izoh................</p>
                </div>
            </div>
        </div>
    </div>
@endsection
