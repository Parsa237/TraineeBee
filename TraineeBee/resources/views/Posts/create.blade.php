@extends('Layouts.layout')
@section('content')
        <h1>Create post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
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
@endsection