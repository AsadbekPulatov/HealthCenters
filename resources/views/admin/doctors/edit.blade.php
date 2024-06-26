@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Shifokorni yangilash</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.doctors.update',$doctors->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">F.I.SH</label>
                    <input type="text" class="form-control" value="{{$doctors->name}}" id="name" placeholder="F.I.SH"
                           name="name">
                </div>
                <div class="form-group">
                    <label for="position">Lavozim</label>
                    <textarea name="position" id="position" class="form-control" cols="5"
                              rows="5">{{$doctors->position}}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Rasm</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>


                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
