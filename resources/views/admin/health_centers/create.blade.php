@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Markaz yaratish</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.health_centers.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nomi</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>

                <div class="form-group">
                    <label for="description">Tavsif</label>
                    <textarea name="description" id="description" class="form-control" cols="5" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Manzil</label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                </div>
                <div class="form-group">
                    <label for="Phone">Tel</label>
                    <input type="tel" class="form-control" id="Phone" placeholder="+9980" name="phone">
                </div>
                <div class="form-group">
                    <label for="image">Rasm</label>
                    <input type="file" class="form-control" id="image"  name="image">
                </div>
                <div class="form-group">
                    <label for="working_time">Ish vaqti</label>
                    <input type="text" class="form-control" id="working_time" placeholder="Working time" name="working_time">
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
