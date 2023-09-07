@extends('base')

@section('content')
    <div class="container col-md-6 offset-md-3 mt-5">

        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <h1 class="text-center">Welcome</h1>
        <form action="{{'/login'}}" method="POST">
            {{csrf_field()}}

            <div class="form-group mb-3">
                <label for="email">
                    Email
                </label>
                <input type="email" name="email" id="email" class="form-control">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="container d-flex justify-content-between">
                <a href="{{'/register'}}">Sign up for an account.</a>
                <button type="submit" class="btn btn-sm btn-primary">Login</button>
            </div>

            @method('POST')
        </form>
    </div>
@endsection
