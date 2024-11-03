@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>Viloyatlar</h1>

        <a href="#" class="btn btn-success mb-4 bt-4">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($viloyatlar as $viloyat)
                    <tr>
                        <td>{{ $viloyat->id }}</td>
                        <td>{{ $viloyat->name }}</td>

                        <td><a href="#" class="btn btn-danger">Delete</a></td> 
                        <td><a href="#" class="btn btn-warning">Update</a></td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $viloyatlar->links('pagination::bootstrap-4') }}
    </div>
@endsection
