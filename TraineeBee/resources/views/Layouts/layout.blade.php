<html lang="{{config('app.locale')}}">
<head>
    <title>{{config('app.name', 'TraineeBee')}}</title>

    <link rel=”shortcut icon” href=”/images/favicon.png” type=”image/x-icon”/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<script>
    $isReady = 0;
</script>

<a class="logoNav" href="/"><img id="logo" src="{{asset('images/banner_logo.png')}}" alt="logo" href="/home"></a>
<div class="background">
    @guest
        <div class="container-fluid nav pr-0 pt-5">
            <div class="row navRow justify-content-center pl-4 pr-4">
                <div class="col-2">
                    <a class="firstPartNav" href="/dashboard">Dashboard</a>
                </div>
                <div class="col-2">
                    <a class="firstPartNav" href="/#aboutLink">About</a>
                </div>
                <div class="col-4"></div>

                <div class="col-2">
                    <a class="secondPartNav" href="/#info">Information</a>
                </div>
                <div class="col-2">
                    <a class="secondPartNav" href="/login" id="login">Login/Register</a>
                </div>
            </div>
        </div>
        <a class="logoNav" href="/"><img id="logo" src="{{asset('images/banner_logo.png')}}" alt="logo"
                                         href="/home"></a>
    @else
        <div class="container-fluid nav pr-0 pt-5">
            <div class="row navRow justify-content-center pl-4 pr-4">
                <div class="col-2">

                    <a class="firstPartNav" href="/dashboard">Dashboard</a>
                </div>
                <div class="col-2">
                    <a class="firstPartNav" href="/#aboutLink">About</a>
                </div>
                <div class="col-4">
                </div>
                <div class="col-2">
                    <a class="secondPartNav" href="/#info">Information</a>
                </div>
                <div class="col-2">
                    <li class="secondPartNavDashboard dropdown">
                        <a id="navbarDropdown" class="nav-link textUserName dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <a class="dropdown-item" href="/yourposts">Your posts</a>
                            <a class="dropdown-item" href="/posts/create">Create post</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            </div>
        </div>


    @endguest


    <div class="container">
        @yield('content')
    </div>

    <footer class="page-footer font-small blue pt-4 footer">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">TraineeBee</h5>
                    <p>Feel free to contact us if you have any suggestions about our page:<br>Email: mail@gmail.com</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">headings</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="/#about">About us</a>
                        </li>
                        <li>
                            <a href="/#info">Information</a>
                        </li>

                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->

            {{--<div class="col-md-3 mb-md-0 mb-3">--}}

            {{--<form class="cf" action="contactform.php" method="post">--}}
            {{--<div class="half left cf">--}}
            {{--<input type="text" id="input-name" placeholder="Name" name="name">--}}
            {{--<input type="email" id="input-email" placeholder="Email address" name="email">--}}
            {{--<input type="text" id="input-subject" placeholder="Subject" name="subject">--}}
            {{--</div>--}}
            {{--<div class="half right cf">--}}
            {{--<textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>--}}
            {{--</div>--}}
            {{--<input type="submit" value="Submit" id="input-submit">--}}
            {{--</form>--}}

            {{--</div>--}}

            <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a>Cipher Street 21</a>
                        </li>
                        <li>
                            <a>2172 FK Leiden</a>
                        </li>
                        <li>
                            <a>Email: traineebee@gmail.com</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->


        </div>
        <!-- Grid row -->


        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 ">© 2019 Copyright
            Traineebee
        </div>
    </footer>
</div>
<!-- Footer Links -->
<script>

    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) { // this refers to window
            $("#stingButtonImg").addClass("stingAnimation");
            $("#stingButtonImg").removeClass("stingAnimationBack");
            $("#stingButtonImg").click(function () {
                window.scrollTo({
                    left: 0, top:  0, behavior: 'smooth'
                });
            });
        } else {
            $("#stingButtonImg").addClass("stingAnimationBack");
            $("#stingButtonImg").removeClass("stingAnimation");
            $("#stingButtonImg").click(function () {
                window.scrollTo({
                    left: 0, top:  885, behavior: 'smooth'
                });
            });
        }
    });
    $(window).ready(function () {
        $i = 0;
        if ($i < 1) {
            $("#stingButtonImg").click(function () {
                window.scrollTo({
                    left: 0, top:  4500, behavior: 'smooth'
            });
        }
    );
    $i++;
    }
    if ($isReady > 0) {
        $(document.body).append('<img id=\'stingButtonImg\' src=\'images/stingButton2.png\' alt=\'\'>');
    }
    })
    ;


</script>
</body>
</html>
