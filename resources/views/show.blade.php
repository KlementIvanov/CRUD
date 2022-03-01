@extends('layout')

@section('title', 'Users '.$user->id)

@section('content')

    <div class="card" style="width: 18rem;">
        <a class="btn btn-primary " href="{{ route('users.index')}}">Back</a>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{$user->id}}</li>
            <li class="list-group-item">ID: {{$user->name}}</li>
            <li class="list-group-item">ID: {{$user->email}}</li>
            <li class="list-group-item">ID: {{$user->created_at}}</li>
            <li class="list-group-item">ID: {{$user->updated_at}}</li>
        </ul>
        <a class="btn btn-primary " href="{{ route('users.edit', $user)}}">Edit</a>
    </div>


@endsection
