<!-- extending the standard layout -->
@extends('Layouts.layout')
@section('content')
    <div class="container-fluid">
        <div id="firstPartNav">
        <a href="/">Home</a>
            <a href="/about">About</a>
        </div>
        <img id="logo" src="images/logo.png" alt="">
    </div>
        <h1>This is the index page</h1>
        <p>This is the index page for our project called TraineeBee</p>

@endsection
