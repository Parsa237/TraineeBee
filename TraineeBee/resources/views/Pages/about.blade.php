@extends('Layouts.layout')
@section('content')

        <!doctype html>
        <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link href="http://127.0.0.1:8000/css/AboutStyle.css" rel="stylesheet" type="text/css">
                </head>

                < class="background">

        <body>

            <div class="flex-center position-ref full-height">
            </div>
            <div class="col-md-8 flex-center">
            <h1>About the Project</h1>
            <p>Trainee Bee </p><div class="smaller">Join the Hive TM</div> is an Exange Program between the Netherlands and England for four weeks in total.<br>
            they have been working on this project. And had allot of fun with it.<br>
            <br>
            In the exchange the Dutch people showed the places where they went to for theire internship.<br>
            To showed them what it is like and how this will function in theire education.<br>
            And What type of profits it has for the student and companies.
            (To know more about what the profits are about Internships in your <a href="/info" class="Links">company</a>.
            The students interviewed the companies as well and got exited about the amount they were missing. <br>
            <br>
            The students will also learn how they work in different countries, what their work progress is like. And in big international groups which is a great move for all the students in the future.<br> The two groups showed them their city. From the begin it was very clear what we wanted. We wanted a site which make it possible to have internships in the UK as well.
            And to Help Students College and Companies their way through this new way.
            <p></p>
        </div>
        <div class="col-md-4 Pictures">
            <!-- first picture-->
            <div class="col-md-6 Blank"></div>
            <div class="col-md-6">
                //Put picture here
            </div>

            <!-- second picture-->
            <div class="col-md-6">
                //Put picture here
            </div>
            <div class="col-md-6 Blank"></div>

            <div class="col-md-6 Blank"></div>

            <!-- third picture-->
            <div class="col-md-6">
                //Put picture here
            </div>

        </div>
        <div class="col-md-12 Picture">
            <img src="{{asset('images/placeholder.png')}}" alt="This a picture of the Group!  The dutch and The English peeps :D">
        </div>
        <div class="col-md-4 Pictures"></div>
        <div class="col-md-8">
            <h1>About Us</h1>
            <p>This is the about page for our project called TraineeBee</p>
        </div>
    

        </body>
</html>

@endsection