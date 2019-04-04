@extends('Layouts.layout')
@section('content')
    @guest
        <p>You need to login to see this page</p>
    @else
        <div class="tab-pane" id="edit">
            <h4 class="m-y-2">Edit {{$profile->name}}'s Profile</h4>
            <form role="form" method="POST" action="{{ route('profile.update', $profile->id)}}">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Website</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="url" value="www.google.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" value="Wallstreet" placeholder="Street">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" value="267" placeholder="Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" value="New York" placeholder="City">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" value="dfg21564" placeholder="Postal Code">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Internship Details </label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Our Skills</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="reset" class="btn btn-secondary" value="Cancel">
                        <input type="button" class="btn btn-primary" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    @endguest
@endsection