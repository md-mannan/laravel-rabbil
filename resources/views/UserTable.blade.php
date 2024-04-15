@extends('Layout/app')

@section('PageTitle', 'User Data')
@section('content')



    <div class="container mb-3">
        <div class="row">
            <div class="col-12 bg-light bordered rounded p-3">
                <a class="btn btn-small btn-info float-end" href="{{ url('/useraddform') }}">add</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if ($dataKey)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col" class="float-end">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($dataKey as $data)
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>
                                        <div class="btn-group float-end">

                                            <a href="{{ url('/edit' . '/' . $data->id) }}" class="btn btn-info btn-small"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="{{ url('/edit' . '/' . $data->id) }}"
                                                class="btn btn-danger btn-small"><i class="fa-regular fa-trash-can"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <div class="alert alert-warning text-center text-bold">Data not Availavail</div>
                @endif
            </div>
        </div>


    </div>







@endsection
