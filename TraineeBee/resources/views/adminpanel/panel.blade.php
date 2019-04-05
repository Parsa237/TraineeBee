@extends('Layouts.layout')
@section('content')
    <h1>Contact moments:</h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <div class=" card-body bg-light p-3 grid-container DashBorder">
                <div class="dashboarda"><img class="imgsize" src="storage/uploads/avatars/{{ $post->user->avatar }}"/></div>
                <div>
                    <h1>{{$message->title}}</h1>

                    <p>{{$message->body}}</p>
                    <small>Posted on {{$message->created_at}}</small>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No messages found</p>
    @endif
@endsection
