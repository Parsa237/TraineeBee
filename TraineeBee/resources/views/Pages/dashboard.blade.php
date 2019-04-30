@extends('Layouts.layout')
@section('content')
    <h1>Offers:</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class=" card-body bg-light p-3 grid-container DashBorder">
                    <div class="dashboarda"><img class="imgsize" src="storage/uploads/avatars/{{ $post->user->avatar }}"/></div>
                    <div>
                        <h1><a href="/posts/{{$post->id}}"  class="HeaderFontDash">{{$post->title}}</a></h1>

                        <p>{{$post->body}}</p>
                        <small>Posted on {{$post->created_at}} - Posted by <a href="/profile/{{$post->user_id}}">{{$post->user->name}}</a></small>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
@endsection
