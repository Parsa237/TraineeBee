@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="http://127.0.0.1:8000/css/main.css" rel="stylesheet" type="text/css">
        <link href="http://127.0.0.1:8000/css/loginStyle.css" rel="stylesheet" type="text/css">
    </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header importend3">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <!-- Captcha Test -->


                            {{--<div class="form-group row">--}}
                                {{--<div data-unselectable="unselectable content" id="CaptchaDiv"></div>--}}
                                {{--<label class="capbox-inner col-md-4 float-right">--}}
                                    {{--Type the above number:--}}
                                    {{--<input type="hidden" id="txtCaptcha">--}}
                                {{--</label>--}}
                                    {{--<input type="number"  class="col-md-6 col-form-label" name="CaptchaInput" id="CaptchaInput" size="6"><br>--}}
                                    {{--<button  class=" btn importend " onclick="test('click');">--}}
                                        {{--Check ✔--}}
                                    {{--</button>--}}
                                    {{--<br><br>--}}


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="Submit_Button" class="btn importend" >

                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                            </div>
                    </form>


                    {{--<!-- Captcha Test -->--}}
                    {{--<div >--}}
                        {{--<br>--}}
                        {{--<div class="capbox">--}}

                            {{--<div id="CaptchaDiv"></div>--}}

                            {{--<div class="capbox-inner">--}}
                            {{--Type the above number:<br>--}}

                            {{--<input type="hidden" id="txtCaptcha">--}}
                            {{--<input type="text" name="CaptchaInput" id="CaptchaInput" size="15" style="border-radius:2.5px;border:1px solid #dcdcdc;"><br>--}}
							{{--<div style="height:30px;width:60px;background-color:orange;margin-top:5px;color:#fff;padding:5px;text-align:center;border-radius:2.5px;" onclick="test('click');">--}}
								{{--Check--}}
							{{--<div>--}}
                            {{--</div> --}}
                        {{--</div>--}}
                        {{--<br><br>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">

function test()
{
	var ass = document.getElementById('CaptchaInput').value;
	var why = "";

	if(ass == ""){
		why += "- Please Enter CAPTCHA Code.\n";
	}
	if(ass != ""){
		if(ValidCaptcha(ass) == false){
		why += "- The CAPTCHA Code Does Not Match.\n";
		}
	}
	if(why != ""){
		alert(why);
		return false;
	}
}





/*function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
    why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
    if(ValidCaptcha(theform.CaptchaInput.value) == false){
    why += "- The CAPTCHA Code Does Not Match.\n";
    }
}
if(why != ""){
    alert(why);
    return false;
}
}*/

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
    document.getElementById("Submit_Button").disabled = false;
    /*return true;*/
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

@endsection
