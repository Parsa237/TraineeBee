@extends('Layouts.layout')

@section('content')

    <a href="/dashboard" class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div>{{$post->body}}</div>
    <small>Posted on {{$post->created_at}} - Posted by <a href="/profile/{{$post->user_id}}">{{$post->user->name}}</a></small>
        <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit post</a>
            <p></p>
            <form action="{{ route('posts.destroy', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger float-right" type="submit">Delete</button>
            </form>
        @endif
    @endif
@endsection