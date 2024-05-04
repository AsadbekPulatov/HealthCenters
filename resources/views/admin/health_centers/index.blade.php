@extends('adminpanel.master')
@section('content')

    <div class="container">

        <h1>Health centers </h1>
        <div class="flex justify-content-end">
            <a href="{{route('admin.health_centers.create')}}" class="btn btn-primary">Create</a>
        </div>


        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Address</th>
                <th>Phone</th>
                <th>working_time</th>


            </tr>
            </thead>
            <tbody>
            @foreach($healh_centers as $role)
                <tr>
                    <td>
                        {{$loop->index+1}}

                    </td>
                    <td>

                        {{$role['name']}}

                    </td>
                    <td>
                        {{$role['description']}}
                    </td>
                    <td>
                        {{$role['address']}}

                    </td>
                    <td>
                        {{$role['phone']}}
                    </td>
                    <td>
                        {{$role['working_time']}}
                    </td>
                    <td>
                        <form action="{{route('admin.health_centers.destroy',$role->id)}}" method="post"
                              onsubmit="return confirm('Rosdanham ochirmoqchimisiz ?')">
                            <a href="{{route('admin.health_centers.edit',$role->id)}}" class="btn btn-info"><i
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

@endsection
