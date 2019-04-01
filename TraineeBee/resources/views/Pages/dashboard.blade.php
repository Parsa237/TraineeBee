@extends('Layouts.layout')
@section('content')
    @guest
        <p>please log in</p>
    @else
        <h1>Offers:</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="card card-body bg-light p-3">
                        
                        <font color='#222426' size='2pt'>
                            <h1><a href="/dashboard/{{$post->id}}"  class="HeaderFontDash">{{$post->title}}</a></h1>
                <h1>
                    <p class="DescHeaderDash">Job Title: {{$post->title}}</p>
                            </h1>
                        <p>{{$post->body}}</p>
                <h1>
                  <p class="DescHeaderDash">Job Description: {{$post->title}}</p>
                        </h1>
                            <small>Posted on {{$post->created_at}}</small>
                    </div>
                @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    @endguest
@endsection