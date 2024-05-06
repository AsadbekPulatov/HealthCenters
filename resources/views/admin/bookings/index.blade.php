@extends('adminpanel.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">Buyurtmalar</h1>
        </div>

        @include('admin.bookings.create')

        @include('admin.bookings.show')

        <div class="card-body">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">F.I</th>
                    <th scope="col">Markaz</th>
                    <th scope="col">Xizmat</th>
                    <th scope="col">Narxi</th>
                    <th scope="col">Holati</th>
                    <th scope="col">Amallar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $key => $item)
                    <tr>
                        <th scope="row" class="col-1">{{$key+1}}</th>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->service->health_services->name}}</td>

                        <td>{{$item->service->name}}</td>
                        <td>{{$item->service->price }} so'm</td>
                        <td>
                            @if($role == 'admin')
                                @if($item->status)
                                    <button class="btn btn-success">Tasdiqlandi</button>
                                @else
                                    <a href="{{ route('booking.status', $item->id) }}"
                                       class="btn btn-danger">Tasdiqlash</a>
                                @endif
                            @endif
                            @if($role == 'user')
                                @if($item->status)
                                    <button class="btn btn-success">Tasdiqlandi</button>
                                @else
                                    <button class="btn btn-danger">Kutilmoqda</button>
                                @endif
                            @endif
                        </td>
                        <td class="col-2">
                            <div class="d-flex">
                                @if(count($item->comments) == 0)
                                    <button type="button" onclick="save({{ $item->id }})" class="btn btn-success btn-sm"
                                            data-toggle="modal" data-target="#save-rating">
                                        <i class="fas fa-mail-bulk"></i>
                                    </button>
                                @endif
                                @if(count($item->comments) == 1)
                                    <button type="button" onclick="show({{ $item->comments }})" class="btn btn-info btn-sm"
                                            data-toggle="modal" data-target="#show-rating">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                @endif
                                <form action="{{ route('booking.delete',$item->id) }}" method="get">
                                    <button type="submit"
                                            onclick="confirm(' Haqiqatdan ham bu yozuvni o\'chirmoqchimisz ')"
                                            class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fas fa-trash"></i>
                                    </span></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('custom-scripts')
    <script>
        function save(id) {
            $('#booking_id').val(id);
        }

        function show(data){
            data = data[0]
            $('#show_comment').text(data.comment)
            $('#show_star').text(data.rating)
            console.log(data);
        }
    </script>
@endsection
