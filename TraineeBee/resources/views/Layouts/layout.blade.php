<html lang="{{config('app.locale')}}">
<<<<<<< HEAD
<head>
    <title>{{config('app.name', 'TraineeBee')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="background">
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
@include('Inc.navbar')
        @yield('content')
    <!-- here should the footer be -->
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

</body>
<<<<<<< HEAD
</html>
=======
</html>
=======
    <head>
        <title>{{config('app.name', 'TraineeBee')}}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="background">
            @guest
            <div class="container-fluid nav pr-0 pt-5">
                <div class="row navRow justify-content-center pl-4 pr-4">
                    <div class="col-2">
                        <a class="firstPartNav" href="/">Home</a>
                    </div>
                    <div class="col-2">
                        <a class="firstPartNav" href="/about">About</a>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-2">
                        <a class="secondPartNav" href="/info">Information</a>
                    </div>
                    <div class="col-2">
                        <a class="secondPartNav" href="/login">Login/register</a>
                    </div>
                </div>
            </div>
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
                            <a class="secondPartNav" href="/profile">profile</a>
                        </div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            @endguest

            <img id="logo" src="{{asset('images/logo.png')}}" alt="logo">
                <div class="container">
                    @yield('content')
                </div>

            <!-- here should the footer be -->
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

    </body>
</html>
>>>>>>> b8c3d8b96193aecfe03268a7d371340c85c18516
>>>>>>> parent of cc6ca0f6... Revert "conflict"
