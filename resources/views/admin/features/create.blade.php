@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Xususiyat yaratish</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.features.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Nomi</label>
                    <input type="text" class="form-control" id="name" placeholder="Nomi" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Tavsif</label>
                    <textarea name="description" id="description" class="form-control" cols="5" rows="5"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
