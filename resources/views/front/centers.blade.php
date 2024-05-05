@extends('front.master')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">SOG'LOMLASHTIRISH MARKAZLARI</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item active text-primary">Markazlar</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- FilterForm Start -->
    <div class="container-fluid blog mt-3">

        <!-- Modal -->
        <div class="modal fade" id="FilterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('center') }}" method="get">
                        <div class="modal-body">
                            <div class="form-group mb-2">
                                <label for="name">Markaz nomi</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data['name'] ?? '' }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="address">Joylashuv</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $data['address'] ?? '' }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="service">Xizmat</label>
                                <select name="service" id="service" class="form-control form-select">
                                    <option value="0">Barchasi</option>
                                    <?php
                                        $service = $data['service'] ?? '';
                                    ?>
                                    @foreach($services as $item)
                                        <option value="{{ $item->name }}" @if($item->name == $service) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                            <button type="submit" class="btn btn-primary">Qidirish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#FilterModal">
            <i class="fa fa-filter text-white"></i>Filter
        </button>
    </div>
    <!-- FilterForm End -->

    <!-- Centers Start -->
    @include('front.include_center')
    <!-- Centers End -->

@endsection
