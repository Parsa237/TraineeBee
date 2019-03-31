@extends('Layouts.layout')
@section('content')
    @guest
        <p>please log in</p>
    @else
        <h1>Create posts</h1>
        <form method="POST" action="/dashboard/create">
            @csrf
            <div class="form-group">
                <h2 class="inputname">Title</h2>
                <input class="form-control" name="title" type="text" placeholder="Put your title here!">
            </div>
            <div class="form-group">
                <h2 class="inputname">Body</h2>
                <textarea class="form-control" name="body" type="textarea" placeholder="Put your body here!"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

    @endguest
@endsection