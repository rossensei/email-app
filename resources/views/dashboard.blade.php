@extends('base')

@section('content')
    <h1>Dashboard</h1>

    <form method="POST" action="{{ route('logout') }}">

        {{ csrf_field() }}

        <button type="submit">Logout</button>

    </form>
@endsection
