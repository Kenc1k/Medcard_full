@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>Klinikalar</h1>

        <a href="#" class="btn btn-success mb-4 bt-4">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Hudud</th>
                    <th scope="col">Info</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($klinikas as $klinika)
                    <tr>
                        <td>{{ $klinika->id }}</td>
                        <td>{{ $klinika->name }}</td>
                        <td>{{ $klinika->hudud }}</td>
                        <td>{{ $klinika->info }}</td>

                        <td><a href="#" class="btn btn-danger">Delete</a></td> 
                        <td><a href="#" class="btn btn-warning">Update</a></td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $klinikas->links('pagination::bootstrap-4') }}
    </div>
@endsection
