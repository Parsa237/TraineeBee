@extends('Layouts.layout')
@section('stylesheet')
    <link rel="stylesheet" href="../../../public/css/companyProfile.css">
@endsection
@section('content')

    <div class="container border-top">
        <img src="http://placehold.it/1080x400" class="m-x-auto img-fluid img-circle" alt="avatar">

        <div class="row m-y-2" style="margin: -125px 0 0 125px">
            <div class="col-lg-12 pull-lg-12 text-xs-center">
                <img src="http://placehold.it/250" class="m-x-auto img-fluid img-circle border profilePic" alt="avatar">
                <h6 class="m-t-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                </label>
            </div>
        </div>


        <div class="row m-y-2">
            <div class="col-lg-10 push-lg-2">
                <ul class="nav nav-tabs">

                    <li class="nav-item col-12 col-sm-auto text-md-left text-center">
                        <a href="" data-target="#internship" data-toggle="tab"
                           class="nav-link text-muted">Internship</a>
                    </li>
                    <li class="nav-item col-12 col-sm-auto text-md-left text-center">
                        <a href="" data-target="#skills" data-toggle="tab" class="nav-link text-muted">Skills</a>
                    </li>
                    <li class="nav-item col-12 col-sm-auto text-md-left text-center">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link text-muted">Edit</a>
                    </li>
                </ul>
                <div class="tab-content p-b-3">
                    <div class="tab-pane active" id="internship">
                        <h3> Heading</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus.
                        </p>

                        <p> - o, fringilla vel, aliqu</p>
                        <p> - rem ipsum dolo</p>
                        <p> - In enim justo, rhoncus</p>
                        <p> - Cum sociis natoque</p>
                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                            quis enim. Donec pede justo.
                        </p>
                    </div>

                    <div class="tab-pane active" id="programming">
                        programming Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                    </div>
                    <div class="tab-pane active" id="skills">
                        skills Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.
                    </div>
                    <div class="tab-pane active" id="generallInfo">
                        generallInfo Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.
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
                                    <input class="form-control" type="text" value="Google">
                                </div>
                            </div>
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
                </div>
            </div>

        </div>
    </div>
    <hr>

@endsection