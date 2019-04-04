@extends('Layouts.layout')
@section('content')
    <h1>Offers:</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class=" card-body bg-light p-3 grid-container DashBorder">
                    <div class="dashboarda"><a class= "DashBorder2TEST">Test here for Image</a></div>
                    <div>

                       
                       

                        <h1><a href="/posts/{{$post->id}}"  class="HeaderFontDash">{{$post->title}}</a></h1>

                        <h1>
{{--                            <p class="DashDesc">Job Title: {{$post->title}}</p>--}}
                        </h1>
                        <p>{{$post->body}}</p>
                        <h1>
{{--                            <p class="DashDesc">Job Description: {{$post->body}}</p>--}}
                        </h1>
                        <small>Posted on {{$post->created_at}} - Posted by {{$post->user->name}}</small>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
@endsection