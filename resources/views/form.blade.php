@extends('layout')

@section('title', 'Create users')

@section('content')

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="row">
            <div class="col">
                <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
            </div>
            <div class="col">
                <input name="email" type="text" class="form-control" placeholder="Email" aria-label="Email">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>


    </form>

@endsection

