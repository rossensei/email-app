@extends('base')

@section('content')
    

    @if(auth()->check())
        <div class="container mt-3 col-md-6 offset-md-3">
            <h1>Dashboard</h1>
            Welcome, {{ auth()->user()->name }}
            <form method="POST" action="{{ route('logout') }}">

                {{ csrf_field() }}

                <button type="submit">Logout</button>

            </form>
        </div>
    @endif
    
@endsection
