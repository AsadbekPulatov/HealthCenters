@extends('front.master')

@section('content')

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-6 p-3">
                    <img src="{{ asset('front/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                </div>
                <div class="col-6 p-5">
                    <div class="d-flex justify-content-between mb-4">
                        <a href="#" class="h4">Xizmat nomi</a>
                    </div>
                    <p class="my-4">Xizmat tavsif</p>
                    <hr>
                    <p class="h-4">Narkaz: ALFA MED</p>
                    <p class="h-4">Narxi: 500 $</p>
                    <hr>
                    <a href="" class="btn btn-info">Buyurtma berish</a>
                </div>
            </div>
        </div>
    </div>
@endsection
