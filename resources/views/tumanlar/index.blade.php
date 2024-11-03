@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>Tumanlar</h1>

        <a href="#" class="btn btn-success mb-4 bt-4">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Viloyat_id</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tumanlar as $tuman)
                    <tr>
                        <td>{{ $tuman->id }}</td>
                        <td>{{ $tuman->name }}</td>
                        <td>{{ $tuman->viloyat_id }}</td>

                        <td><a href="#" class="btn btn-danger">Delete</a></td> 
                        <td><a href="#" class="btn btn-warning">Update</a></td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tumanlar->links('pagination::bootstrap-4') }}
    </div>
@endsection
