<!-- extending the standard layout -->
@extends('Layouts.layout')
@section('content')
    <h1>This is the index page</h1>
    <p>This is the index page for our project called TraineeBee</p>
    <script>
        $(function () {
            var $win = $(window);

            $win.scroll(function () {
                if ($win.scrollTop() == 0){
                    alert("ja");
                }else {
                    $("#stingButtonImg").animate({
                        position: 'fixed',
                        left: '47vw',
                        transform: 'rotate(80deg)',
                        width: '6vw'
                    }, 2000);
                }
            });
        });
    </script>
    <img id="stingButtonImg" src="images/stingButton.png" alt="">


@endsection
