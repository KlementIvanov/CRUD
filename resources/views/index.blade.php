@extends('layout')

@section('title', 'Users')

@section('content')
    <a class="btn btn-primary" role="button" href="{{ route('users.create') }}">Create user</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                    <a type="button" class="btn btn-info" href="{{ route('users.edit', $user->id)  }}">Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
