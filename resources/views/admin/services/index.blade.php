@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Services </h1>
        </div>
        <div class="card-body">
            <div class="flex justify-content-end mb-3">
                <a href="{{route('admin.services.create')}}" class="btn btn-primary">Create</a>
            </div>
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                <tr>
                    <th>id</th>
                    <th>Health center name</th>
                    <th>Name</th>
                    <th class="col-6">Description</th>
                    <th>price</th>
                    <th>Action</th>


                </tr>
                </thead>
                <tbody>
                @foreach($services as $role)
                    <tr>
                        <td>
                            {{$loop->index+1}}

                        </td>
                        <td>

                            {{$role->health_services->name}}

                        </td>
                        <td>
                            {{$role['name']}}
                        </td>
                        <td>
                            {{$role['description']}}
                        </td>
                        <td>
                            {{$role['price']}}

                        </td>

                        <td>
                            <form action="{{route('admin.services.destroy',$role->id)}}" method="post"
                                  onsubmit="return confirm('Rosdanham ochirmoqchimisiz ?')">
                                <a href="{{route('admin.services.edit',$role->id)}}" class="btn btn-info"><i
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
