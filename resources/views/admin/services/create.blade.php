@extends('adminpanel.master')
@section('content')
    <div class="container">
        <h1 class="text-blue">Health centers create</h1>
        <br>
        <form action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="health_services">health servies</label>
                <select name="health_centers_id" class="form-control" id="health_services">
                  @foreach($health_centers as $health_center)
                        <option value="{{$health_center->id}}">{{$health_center->name}}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price"  name="price">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image"  name="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
