@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>Doctors</h1>

        <a href="#" class="btn btn-success mb-4 bt-4">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Role</th>
                    <th scope="col">Info</th>
                    <th scope="col">Is_active</th>
                    <th scope="col">Klinika_id</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->role }}</td> 
                        <td>{{ $doctor->info }}</td> 
                        <td>{{ $doctor->is_active }}</td>
                        <td>{{ $doctor->klinika_id }}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td> 
                        <td><a href="#" class="btn btn-warning">Update</a></td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $doctors->links('pagination::bootstrap-4') }}
    </div>
@endsection
