@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>Patients</h1>

        <a href="#" class="btn btn-success mb-4 bt-4">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Viloyat_id</th>
                    <th scope="col">Tuman_id</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->password }}</td> 
                        <td>{{ $patient->viloyat_id }}</td> 
                        <td>{{ $patient->tuman_id }}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td> 
                        <td><a href="#" class="btn btn-warning">Update</a></td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $patients->links('pagination::bootstrap-4') }}
    </div>
@endsection
