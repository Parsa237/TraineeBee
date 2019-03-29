<!-- extending the standard layout -->
@section('navbar')
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
@endsection