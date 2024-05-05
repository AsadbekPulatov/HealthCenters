@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Features Edit</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.features.update',$features->id)}}" method="post">
                @csrf
@method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" value="{{$features->name}}" placeholder="name" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description"  class="form-control" cols="5" rows="5">{{$features->description}}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection
