@extends('Layouts.layout')

@section('content')
    @guest
        <p>please log in</p>
    @else
        <a href="/dashboard" clas="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <small>Posted on {{$post->created_at}}</small>
        <div>{{$post->body}}</div>

    @endguest

@endsection