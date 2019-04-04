<!-- extending the standard layout -->
@extends('Layouts.layout')
@section('content')

    <div class="container-fluid nav pr-0 pt-5">
        <div class="row navRow justify-content-center pl-4 pr-4">
            <div class="col-2">
                <a class="firstPartNav" href="/">Home</a>
            </div>
            <div class="col-2">
                <a class="firstPartNav" href="/about">About</a>
            </div>
            <div class="col-4">
            </div>
            <div class="col-2">
                <a class="secondPartNav" href="/">Companies</a>
            </div>
            <div class="col-2">
                <a class="secondPartNav" href="/about">Login</a>
            </div>
        </div>
    </div>

    <img id="logo" src="images/logo.png" alt="">
    <h1>This is the index page</h1>
    <p>This is the index page for our project called TraineeBee</p>

    <h1>Sign in:</h1>

    <input type="text" placeholder="Email adres" id="email-adres" class="login">
    <input type="text" placeholder="Password" id="password" class="login">

    <h2>Register:</h2>

    <input type="text" placeholder="Email adress" id="email-adres2" class="register">
    <input type="text" placeholder="First name" id="first-name" class="register">
    <input type="text" placeholder="Middle name" id="middle-name" class="register">
    <input type="text" placeholder="Last name" id="last-name" class="register">
    <input type="text" placeholder="Password" id="password2" class="register">
    <input type="text" placeholder="Please repeat password" id="repeatpassword" class="register">

@endsection
