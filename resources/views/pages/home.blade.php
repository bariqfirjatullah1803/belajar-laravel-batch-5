@extends('layouts.app')

@section('content')
    @auth
        <h1>Welcome {{ auth()->user()->name }}</h1>
        <h3>Role: {{ auth()->user()->roles()->pluck('name')[0] }}</h3>
    @else
        <h1>Page Home</h1>
    @endauth
@endsection
