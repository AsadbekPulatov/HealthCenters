@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Xizmat yaratish</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="health_services">Markaz</label>
                    <select name="health_centers_id" class="form-control" id="health_services">
                        @foreach($health_centers as $health_center)
                            <option value="{{$health_center->id}}">{{$health_center->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Xizmat nomi</label>
                    <input type="text" class="form-control" id="name" placeholder="name" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Tavsif</label>
                    <textarea name="description" id="description" class="form-control" cols="5" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Narxi</label>
                    <input type="number" class="form-control" id="price"  name="price">
                </div>
                <div class="form-group">
                    <label for="image">Rasm</label>
                    <input type="file" class="form-control" id="image"  name="image">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
