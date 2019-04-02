<html lang="{{config('app.locale')}}">
<head>
    <title>{{config('app.name', 'TraineeBee')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<div class="background">
    @guest
        <div class="container-fluid nav pr-0 pt-5">
            <div class="row navRow justify-content-center pl-4 pr-4">
                <div class="col-2">
                    <a class="firstPartNav" href="/">Home</a>
                </div>
                <div class="col-1">
                    <a class="firstPartNav" href="/dashboard">Dashboard</a>
                </div>
                <div class="col-1">
                    <a class="firstPartNav" href="/#about">About</a>
                </div>
                <div class="col-4"></div>
                <div class="col-2">
                    <a class="secondPartNav" href="#info">Information</a>
                </div>
                <div class="col-2">
                    <a class="secondPartNav" href="/login">Login/Register</a>
                </div>
            </div>
        </div>
        <img id="logo" src="{{asset('images/banner_logo.png')}}" alt="logo">
    @else
        <div class="container-fluid nav pr-0 pt-5">
            <div class="row navRow justify-content-center pl-4 pr-4">
                <div class="col-2">
                    <a class="firstPartNav" href="/">Home</a>
                </div>
                <div class="col-2">
                    <a class="firstPartNav" href="/dashboard">Dashboard</a>
                </div>
                <div class="col-4">
                </div>
                <div class="col-2">
                    <a class="secondPartNavDashboard" href="/profile">Profile</a>
                </div>
                <div class="col-2">
                    <li class="secondPartNavDashboard dropdown">
                        <a id="navbarDropdown" class="nav-link textUserName dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/yourposts">Your posts</a>
                            <a class="dropdown-item" href="/posts/create">Create post</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    <div class="hexagon">
        <img id="logoDashboard" src="{{asset('images/banner_logo.png')}}" alt="logo">
    </div>
    @endguest


    <div class="container">
        @yield('content')
    </div>
    <div class="container">
        <footer>
            <p>this is a footer</p>
        </footer>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) { // this refers to window
            $("#stingButtonImg").addClass("stingAnimation");
            $("#stingButtonImg").removeClass("stingAnimationBack");
            $("#stingButtonImg").click(function () {
                window.scrollTo(0, 0);
            });
        } else {
            $("#stingButtonImg").addClass("stingAnimationBack");
            $("#stingButtonImg").removeClass("stingAnimation");
            $("#stingButtonImg").click(function () {
                window.scrollTo(0, 4500);
            });
        }
    });
    $(window).ready(function () {
        $i = 0;
        if ($i < 1) {
            $("#stingButtonImg").click(function () {
                window.scrollTo(0, 4500);
            });
            $i++;
        }
    });
</script>
</body>
</html>
