@extends('Layouts.layout')
@section('content')
    @guest
        <p>please log in</p>
    @else
        <h1>Edit post</h1>
        <form method="POST" action="{{ route('dashboard.update', $post->id) }}">
            @csrf
            <div class="form-group">
                <h2 class="inputname">Title</h2>
                <input class="form-control" name="title" type="text" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <h2 class="inputname">Body</h2>
                <textarea class="form-control" name="body" type="textarea" >{{$post->body}}</textarea>
            </div>
            <input name="_method" type="hidden" value="PATCH">
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

    @endguest
@endsection