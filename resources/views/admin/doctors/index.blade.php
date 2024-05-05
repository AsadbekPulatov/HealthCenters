@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Services </h1>
        </div>
        <div class="card-body">
            <div class="flex justify-content-end mb-3">
                <a href="{{route('admin.doctors.create')}}" class="btn btn-primary">Create</a>
            </div>
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th class="col-6">Position</th>
                    <th>Image</th>
                    <th>Action</th>


                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $item)
                    <tr>
                        <td>
                            {{$loop->index+1}}

                        </td>
                        <td>

                            {{$item->name}}

                        </td>
                        <td>
                            {{$item['position']}}
                        </td>
                        <td>
                            <img src="{{'storage/doctors/'.$item->image}}" alt="">
                        </td>

                        <td>
                            <form action="{{route('admin.doctors.destroy',$item->id)}}" method="post"
                                  onsubmit="return confirm('Rosdanham ochirmoqchimisiz ?')">
                                <a href="{{route('admin.doctors.edit',$item->id)}}" class="btn btn-info"><i
                                        class="fas fa-pen"></i></a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger " style="background-color: red"><i
                                        class="fas fa-trash"></i></button>

                            </form>

                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="container">




    </div>

@endsection
