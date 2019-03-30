@extends('Layouts.layout')

@section('content')

    @if(Auth::user()->isAdmin = 1)
        <p>You are not a admin!</p>

    @else
        <p>You are a admin</p>
    @endif

    @endsection