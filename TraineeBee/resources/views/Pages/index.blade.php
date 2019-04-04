<!-- extending the standard layout -->
@extends('Layouts.layout')
@section('content')
    <head>
        <link href="http://127.0.0.1:8000/css/aboutStyle.css" rel="stylesheet" type="text/css">
    </head>

    <h1 id="welcome">Welcome to TraineeBee!</h1>


    <div id="WelcomeMessage">
    <p>
        A friendly environment for you to easily find internships from all around the UK!
        Internships give you the opportunity to experience the industry you are entering, have hands on experience and
        will give you
        the confidence when it comes to the workplace.
        Not only do
        we cater to interns but also to the amazing companies who can gain a lot from interns! Want to learn more about
        how to apply for internships and “join the hive”? Click here! <br>

        If you are a company and you want to know why you should join our hive? <a href="#info">Click here!</a>
        <br>
        Want to know more about our project!
    </p>
  </div>

    <div class="background">


        </div>

          <div id="AProject">
              <h1>About the project</h1>
              <p>Trainee Bee
              <div class="smaller p-0">Join the Hive TM</div>
              Who are we?

              We are a collection of 13 students from the Netherlands and Britain working on a project together to promote
              internships into the English education system.
              Why are we doing this?
              Our main goal is to promote internships, programs that while in education, students get a hands-on
              experience in the work place that allows them to work with a company for a long duration of time. They also
              allow companies to see upcoming prodigies, get to work with students who are motivated and possibly find a
              future employee.

  We are a collection of 13 students from the Netherlands and Britain working on a project together to promote internships into the English education system.
  Why are we doing this?
  Our main goal is to promote internships, programs that while in education, students get a hands-on experience in the work place that allows them to work with a company for a long duration of time. They also allow companies to see upcoming prodigies, get to work with students who are motivated and possibly find a future employee. Following a trip to the Netherlands the British students came to realise that completing an internship in the U.K could boost their job prospects dramatically. Interns have been proven to be very valuable to companies and bringing it to the U.K would increase the quality of knowledge that students have.


              </p>
          </div>
        <div class="col-md-12 Picture">
            <img src="{{asset('images/placeholder.png')}}"
                 alt="This a picture of the Group!  The dutch and The English peeps :D">
        </div>
        <div class="col-md-4 Pictures"></div>
        <div id="AUs" class="col-md-8 p-0">
            <h1>About Us</h1>
            <p>This is the about page for our project called TraineeBee</p>
        </div>
    </div>
    </body>

    <h1 id="info">
        Information
    </h1>


    @yield('footer')

    <script>
        $(window).ready(function () {
            $isReady++;
        });
    </script>
@endsection
