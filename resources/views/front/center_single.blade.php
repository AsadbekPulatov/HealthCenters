@extends('front.master')

@section('content')

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-6 p-3">
                    <img src="{{ asset('storage/'.$center->image) }}" class="img-fluid rounded-top w-100" alt="">
                </div>
                <div class="col-6 p-5">
                    <div class="d-flex justify-content-between mb-4">
                        <a href="#" class="h4">{{ $center->name }}</a>
                        <p class="mb-0 text-muted"><i class="fa fa-star text-primary"></i> 5 </p>
                    </div>
                    <p class="my-4">{{ $center->description }}</p>
                    <hr>
                    <p class="h-4">Telefon raqami: {{ $center->phone }}</p>
                    <p class="h-4">Manzili: {{ $center->address }}</p>
                    <p class="h-4">Ish vaqti: {{ $center->working_time }}</p>
                    <hr>
                    <p class="h-4">Xizmatlar:</p>
                    @foreach($center->services as $item)
                        <a href="" class="btn btn-info">{{ $item->name }}</a>
                    @endforeach
                </div>
                <div class="col-12 p-3">
                    <a class="h4" style="margin-bottom: 50px;!important;">Izohlar</a>
                    <p class="h-4 mt-3"><span class="fw-bolder text-dark">USER: </span>Izoh................</p>
                </div>
            </div>
        </div>
    </div>
@endsection
