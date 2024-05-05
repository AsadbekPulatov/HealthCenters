@extends('front.master')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h1 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Bizning xizmatlarmiz.</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item active text-primary">Xizmatlar</li>
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
                        <form action="{{ route('service') }}" method="get" id="filterForm">
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label for="name">Xizmat nomi</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $data['name'] ?? '' }}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="dan">Narxi</label>
                                    <div class="d-flex">
                                        <input type="number" class="form-control" id="from_price" name="from" value="{{ $data['from'] ?? '' }}">
                                        <input type="number" class="form-control" id="to_price" name="to" value="{{ $data['to'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                                <button type="button" onclick="submitForm()" class="btn btn-primary">Qidirish</button>
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

        <!-- Services Start -->
        @include('front.include_service')
        <!-- Services End -->


        <!-- Feature Start -->
        @include('front.feature')
        <!-- Feature End -->
@endsection
@section('script')
    <script>
        function submitForm(){
            var from = document.getElementById('from_price');
            var to = document.getElementById('to_price');
            if (from.value > to.value){
                from.style = "border:1px solid red;";
                to.style = "border:1px solid red;";
            }else{
                from.style = "border:1px solid green;";
                to.style = "border:1px solid green;";
            }
            document.getElementById('filterForm').submit();
        }
    </script>
@endsection
