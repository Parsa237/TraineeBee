@extends('Layouts.layout')
@section('content')
    @guest
        <p>You need to login to see this page</p>
    @else
        <div class="tab-pane" id="edit">
            <a href="/profile/{{$profile->id}}" class="btn btn-default">Go Back</a>
            <h4 class="m-y-2">Edit {{$profile->name}}'s Profile</h4>
            <form role="form" method="POST" action="{{ route('profile.update', $profile->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Website</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="website" value="{{$profile->website}}" placeholder="Website link">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                    <div class="col-lg-9">

                        <input class="form-control" name="address" type="text" value="{{$profile->address}}" placeholder="Street">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Internship Details </label>
                    <div class="col-lg-9">

                        <textarea class="form-control" name="generalinfo" rows="5" id="comment" placeholder="General info">{{$profile->generalinfo}}</textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Internship Details </label>
                    <div class="col-lg-9">

                        <textarea class="form-control" name="internshipinfo" rows="5" id="comment" placeholder="Intership Details">{{$profile->internshipinfo}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Our Skills</label>
                    <div class="col-lg-9">

                        <textarea class="form-control" rows="5" name="skills" id="comment" placeholder="Skills">{{$profile->skills}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Avatar</label>
                    <div class="col-lg-9">
                        <input type="file" name="avatar">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Header image</label>
                    <div class="col-lg-9">
                        <input type="file" name="headerimage">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input name="_method" type="hidden" value="PATCH">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    @endguest
@endsection