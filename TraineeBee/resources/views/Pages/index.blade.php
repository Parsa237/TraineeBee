<!-- extending the standard layout -->
@extends('Layouts.layout')
@section('content')
    <head>
        <link href="http://127.0.0.1:8000/css/aboutStyle.css" rel="stylesheet" type="text/css">
    </head>

    <h1 id="welcome" class="col-md-8">Welcome to TraineeBee!</h1>


    <div id="WelcomeMessage" class="col-md-8">
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
        <div>
        <img id="Filler" src="https://www.macmillandictionary.com/external/slideshow/full/Grey_full.png" class="" alt="Filler">
      </div>
          <div id="AProject" class="col-md-8">
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
              future employee.Following a trip to the Netherlands the British students came to realise that completing an internship in the U.K could boost their job prospects dramatically. Interns have been proven to be very valuable to companies and bringing it to the U.K would increase the quality of knowledge that students have.



              </p>
          </div>
          <div>
          <img id="Filler2" src="https://www.macmillandictionary.com/external/slideshow/full/Grey_full.png" class="" alt="Filler">
          </div>
        <div id="AUs"  class="col-md-8">
            <h1>About Us</h1>
            <p>City College Plymouth and mboRijnland have joined together to create a project which will hopefully help promote internships inside the United Kingdom. Internships allow students a proper work experience before university, while work experience gives them a small step towards the work place, internships will put them right in the middle, working with others already in the industry and would give them more experience than work experience could ever do.
Having 6 students from England and 7 from the Netherlands, gives all of us the opportunity to see different perspectives. Many of the students from England had done small projects as part of their work experience but looking from an outsider perspective gave us a deeper look at internships and the realisation that the UK education system is outdated and needs to be updated.
</p>
        </div>
        <div>
        <img id="Filler3" src="https://www.macmillandictionary.com/external/slideshow/full/Grey_full.png" class="" alt="Filler">
        </div>

        <h1 id="info" class="col-md-8">
            Information
        </h1>
        <p>Internships allow not only the students to get experience but also give companies the opportunity to have a new motivated workforce! As a company, you get the privilege of giving a student proper work experience, allowing them to get hands-on work. But why should a company invest? Why should a company have patience for students who wants to join the industry? Why choose our website for interns?
Why should I as a company invest in interns?
Much like work experience, an internship would have a student work in your company for a period, allowing them to get a proper understanding of the industry. Internships however would get the student inside the company for a longer time and would give them more experience than work experience. As a company, you get to work with a healthy, motivated student who is willing to work with your employees and will be able to adapt to the work environment much easier. This also could easily lead to a future employee, as they would have had work experience at the company, learn more about the team and the company.
Why should you dedicate time and patience towards a student?
As they say, time is money, and this investment is worth it. When you get spare time for that intern, you give them a opening to the industry, giving them that chance is far more effective than work experience if you want to find out more about the company. Work experience could last 2 weeks which isn’t enough time for anyone to properly settle. An internship which could last 6 months however, is far more effective at building a intern not an employee, this builds a bond with them and your team but also makes them more understandable of your situations and workflow.
Why choose our website?
In the UK, internships are very rare, and are only found during university students, we believe working at a younger age can help them develop as work efficient individuals who would be easier to work as a team. Our website allows you to create an account and will help you find interns. Aspiring students are able to create accounts and can easily find offers created by companies, this easy navigation is a key reason our website will benefit both student and company.
</p>
        
    </div>
    </body>



    @yield('footer')

    <script>
        $(window).ready(function () {
            $isReady++;
        });
    </script>
@endsection
