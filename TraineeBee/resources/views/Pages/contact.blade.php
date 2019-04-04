@extends('Layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/contactstyle.css')}}">
    <h1>Contact page</h1>
    <p>This is the contact page</p>
    <form class="cf" action="#" method="post">
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
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "liammeijles@gmail.com.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
    ?>
@endsection