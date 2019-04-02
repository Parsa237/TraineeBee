@extends('Layouts.layout')
@section('stylesheet')
    <link rel="stylesheet" href="../../../public/css/companyProfile.css">
@endsection
@section('content')

    <div class="container ">
        <div class="row m-y-2">
            <div class="col-lg-12 pull-lg-12 text-xs-center">
                <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar">
                <h6 class="m-t-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                </label>
            </div>
        </div>






        <div class="row m-y-2">
            <div class="col-lg-8 push-lg-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item ">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active text-muted">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link text-muted">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link text-muted">Edit</a>
                    </li>
                </ul>
                <div class="tab-content p-b-3">
                    <div class="tab-pane active" id="profile">
                        <h3> Heading</h3>
                       <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                       </p>

                        <p> - o, fringilla vel, aliqu</p>
                        <p> - rem ipsum dolo</p>
                        <p> - In enim justo, rhoncus</p>
                        <p> - Cum sociis natoque</p>
                    <p>
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    </p>
                    </div>
                    <div class="tab-pane active" id="messages">
                        test
                    </div>
                    <div class="tab-pane" id="edit">
                        <h4 class="m-y-2">Edit Profile</h4>
                        <form role="form">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value='{{Auth::user()->name}}'>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Bishop">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="email@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Company</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="url" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-6">
                                    <input class="form-control" type="text" value="" placeholder="Street">
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" value="" placeholder="Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-6">
                                    <input class="form-control" type="text" value="" placeholder="City">
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" value="" placeholder="State">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Internship Details </label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Programming Details</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Required Skills</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">General Info</label>
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
                </div>
            </div>

        </div>
    </div>
    <hr>

@endsection