@extends('base')

@section('content')
<div class="container col-md-6 offset-md-3 mt-5">
    <h1 class="text-center">Welcome</h1>
    <form action="{{ '/register' }}" method="POST">
        {{csrf_field()}}

        <div class="form-group mb-3">
            <label for="name">
                Name
            </label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">
                Email
            </label>
            <input type="email" name="email" id="email" class="form-control">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="password_confirmation" id="confirm_password" class="form-control">
        </div>
        <div class="container d-flex justify-content-between">
            <a href="{{'/'}}">Log in to your account</a>
            <button type="submit" class="btn btn-sm btn-primary">Register</button>
        </div>
    </form>
</div>
@endsection
