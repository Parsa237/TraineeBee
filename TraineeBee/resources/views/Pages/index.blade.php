<!-- extending the standard layout -->
@extends('Layouts.layout')
@section('content')
    <head><link href="http://127.0.0.1:8000/css/aboutStyle.css" rel="stylesheet" type="text/css"></head>
    <img id="stingButtonImg" src="images/stingButton2.png" alt="">
    <h1 id="welcome">Welcome to TraineeBee!</h1>



    <p>
        The Place on the internet to find an internship at the best companies in and around the U.K.!<br>
        For a range of levels, studies and skills.
        Next to that it’s always good to go to places who have been rated on their performance!<br>
        And making sure to have fun and learn at the internship.
        <br>
        If you are a company and you want to know why you should join our hive? <a href="#info">Click here!</a>
        <br>
        Want to know more about our project!
    </p>

    <div class="background">


        <div class="flex-center position-ref full-height">
        </div>  <div class="col-md-4 Pictures float-right" >
            <!-- first picture-->
            <img src="{{asset('images/placeholder.png')}}" alt="This a picture of the Group!  The dutch and The English peeps :D">

            <div class="col-md-6 Blank">wejhuirh</div>
            <div class="col-md-6 Hexagon ">

            </div>

            <!-- second picture-->
            <div class="col-md-6 Hexagon">

            </div>
            <div class="col-md-6 Blank ">ehwfeuife</div>
            <div class="col-md-6 Blank"></div>
            <!-- third picture-->
            <div class="col-md-6 Hexagon float-right">
            </div>
            <div class="col-md-6 Blank">weuryu9wi</div>

        </div>
        <div class="col-md-8 No_Margin">
            <h1>About the Project</h1>
            <p>Trainee Bee <div class="smaller">Join the Hive TM</div> is an Exange Program between the Netherlands and England for four weeks in total.<br>
            they have been working on this project. And had allot of fun with it.<br>
            <br>
            In the exchange the Dutch people showed the places where they went to for theire internship.<br>
            To showed them what it is like and how this will function in theire education.<br>
            And What type of profits it has for the student and companies.
            (To know more about what the profits are about Internships in your <a href="#info" class="Links">company</a>.
            The students interviewed the companies as well and got exited about the amount they were missing. <br>
            <br>
            The students will also learn how they work in different countries, what their work progress is like. And in big international groups which is a great move for all the students in the future.<br> The two groups showed them their city. From the begin it was very clear what we wanted. We wanted a site which make it possible to have internships in the UK as well.
            And to Help Students College and Companies their way through this new way.
            </p>
        </div>

        <div class="col-md-12 Picture">
            <img src="{{asset('images/placeholder.png')}}" alt="This a picture of the Group!  The dutch and The English peeps :D">
        </div>
        <div class="col-md-4 Pictures"></div>
        <div class="col-md-8">
            <h1>About Us</h1>
            <p>This is the about page for our project called TraineeBee</p>
        </div>
    </div>
    </body>

    <h1 id="info">
        Information
    </h1>


@endsection
