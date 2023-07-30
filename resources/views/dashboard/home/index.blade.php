@extends('layouts.dashboard')

@section('title', 'Home')

@section('content')
    <h1>this is dashboard page</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
@endsection
