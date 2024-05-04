@extends('adminpanel.master')
@section('content')
    <div class="container">
        <h1 class="text-blue">Health centers edit</h1>
        <br>
        <form action="{{route('admin.health_centers.update',$health_centers->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$health_centers->name}}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="5" rows="5">{{$health_centers->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{$health_centers->address}}">
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="tel" class="form-control" id="Phone" placeholder="+9980" name="phone" value="{{$health_centers->phone}}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image"  name="image">
            </div>
            <div class="form-group">
                <label for="working_time">Working Time</label>
                <input type="text" class="form-control" id="working_time" value="{{$health_centers->working_time}}" placeholder="Working time" name="working_time">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
