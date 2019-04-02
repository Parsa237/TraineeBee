@extends('Layouts.layout')

@section('content')

    <a href="/dashboard" class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div>{{$post->body}}</div>
        <small>Posted on {{$post->created_at}} - Posted by {{$post->user->name}}</small>
        <hr>
    @guest
        <p>You need to login to edit this post.</p>
    @else
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit post</a>
    <p></p>
    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger float-right" type="submit">Delete</button>
    </form>
    @endguest
@endsection