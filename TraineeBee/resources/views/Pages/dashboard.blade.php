@extends('Layouts.layout')
@section('content')
@guest
    <p>please log in</p>
    @else
    <h1>This is the dashboard page</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card card-body bg-light p-3">
                    <h1><a href="/dashboard/{{$post->id}}">{{$post->title}}</a></h1>
                    <p>{{$post->body}}</p>
                    <small>Posted on {{$post->created_at}}</small>
                </div>
                @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    @endguest
@endsection