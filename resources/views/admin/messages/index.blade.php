@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Messages</h1>
        </div>
        <div class="card-body">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Title</th>
                    <th scope="col">Message</th>
                    <th scope="col">Is Read</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($massages as $key => $massage)
                    <tr>
                        <th scope="row" class="col-1">{{$key+1}}</th>
                        <td>{{$massage->name}}</td>
                        <td>{{$massage->email}}</td>

                        <td>{{$massage->title}}</td>
                        <td>{{ \Illuminate\Support\Str::limit($massage->message, 20) }}</td>
                        <td>
                            @if($massage->activity)
                                <button class="btn btn-success">New</button>
                            @else
                                <button class="btn btn-danger">Old</button>
                            @endif
                        </td>
                        <td class="col-2">
                            <form action="{{ route('messages.destroy',$massage->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('messages.show',$massage->id) }}">
                                    <span class="btn-label">
                                        <i class="fas fa-eye"></i>
                                    </span>

                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="confirm(' Haqiqatdan ham bu yozuvni o\'chirmoqchimisz ')"
                                        class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fas fa-trash"></i>
                                    </span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
