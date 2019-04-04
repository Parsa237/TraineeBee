@extends('Layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/contactstyle.css')}}">
    <h1>Contact page</h1>
    <form class="cf" action="{{ route('contact.store') }}" method="POST">
        <div class="half left cf">
            <input type="text" id="input-name" placeholder="Name" name="name">
            <input type="email" id="input-email" placeholder="Email address" name="email">
            <input type="text" id="input-subject" placeholder="Subject" name="subject">
        </div>
        <div class="half right cf">
            <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
        </div>
        <input type="submit" value="Submit" id="input-submit">
    </form>
@endsection