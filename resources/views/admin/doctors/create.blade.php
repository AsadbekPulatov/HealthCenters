@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Doctors create</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.doctors.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="name" name="name">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <textarea name="position" id="position" class="form-control" cols="5" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image"  name="image">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
