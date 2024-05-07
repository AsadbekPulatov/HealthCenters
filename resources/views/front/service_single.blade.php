@extends('front.master')

@section('content')

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-6 p-3">
                    <img src="{{ asset('storage/'.$service->image) }}" class="img-fluid rounded-top w-100" alt="">
                </div>
                <div class="col-6 p-5">
                    <div class="d-flex justify-content-between mb-4">
                        <a href="#" class="h4">{{ $service->name }}</a>
                    </div>
                    <p class="my-4">{{ $service->description }}</p>
                    <hr>
                    <p class="h-4">Markaz: <a href="{{ route('center.single', $service->health_services->id) }}">{{ $service->health_services->name }}</a></p>
                    <p class="h-4">Narxi: {{ $service->price }} so'm</p>
                    <hr>
                    <a href="{{ route('service.booking', $service->id) }}" class="btn btn-info">Buyurtma berish</a>
                </div>
            </div>
        </div>
    </div>
@endsection
