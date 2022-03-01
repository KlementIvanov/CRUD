@extends('layout')

@section('title', isset($user) ? 'Update'.$user->name : 'Create users')

@section('content')
    <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
    <form method="POST"
          @if(isset($user))
            action="{{ route('users.update', $user) }}"
            @else
            action="{{ route('users.store') }}"
          @endif
            class="mt-3">

        @isset($user)
            @method('PUT')
        @endisset

                @csrf
                <div class="col">
                    <div class="row">
                        <input name="name"
                               value="{{ old('name', isset($user) ? $user->name : null)  }}"
                               type="text" class="form-control" placeholder="Name" aria-label="name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <input name="@error('email') is-invalid @enderror email"
                               value="{{ old('email', isset($user) ? $user->email : null)  }}"
                       type="text" class="form-control" placeholder="email" aria-label="email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">{{isset($user) ? 'Edit user' : 'Create users'}}</button>
            </div>
        </div>


    </form>

@endsection

