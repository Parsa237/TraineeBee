@extends('Layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/contactstyle.css')}}">
    <h1>Contact page</h1>
    {{--{{ route('contactController.create') }}--}}
    <form class="cf" action="{{ route('adminpanel.store') }}" method="POST">
        @csrf
        <div class="half left cf">
            <input type="text" id="input-name" placeholder="Name" name="name">
            <input type="email" id="input-email" placeholder="Email address" name="email">
            <input type="text" id="input-subject" placeholder="Subject" name="subject">
        </div>
        <div class="half right cf">
            <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
        </div>
        <input name="_method" type="hidden" value="PUT">
        <input type="submit" value="Submit" id="input-submit">
    </form>
@endsection