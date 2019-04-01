@extends('Layouts.layout')

@section('content')
    @guest
        <p>please log in</p>
    @else
        <a href="/dashboard" class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div>{{$post->body}}</div>
        <small>Posted on {{$post->created_at}} - Placed by {{$post->user_id}}</small>
        <hr>
        <a href="/dashboard/{{$post->id}}/edit" class="btn btn-primary">Edit post</a>

        <form action="{{ route('dashboard.destroy', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger float-right" type="submit">Delete</button>
        </form>


    @endguest

@endsection