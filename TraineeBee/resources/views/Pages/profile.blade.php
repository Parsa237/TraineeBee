@extends('Layouts.layout')
@section('stylesheet')
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/profileStyle.css">
@endsection
@section('content')
    <div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"></div></div></div>
    <img src="http://placehold.it/1080x400" class="m-x-auto img-fluid img-circle" alt="avatar">

    <div class="container border-top">
<div class="row">
        <div class=" col-md-4 text-center " style="margin: -125px 0 0 5vw">
            <div class="col-lg-12 pull-lg-12 text-xs-center">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="img-fluid border rounded-circle"
                     alt="avatar">
                <h5 class="m-t-2">Company name</h5>
                <h6>Open to aply</h6>

            </div>
            <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-primary">Contact</button>
            </div>

        </div>
        <div class="col-md-6 mt-5">
            <h2>Why we are the BEST</h2>
            <br>
            <p>
                programming Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec,
                pellentesque eu, pretium quis, sem. Nulla consequat
                massa quis enim. Donec pede justo, fringilla
                vel, aliquet nec, vulputate eget, arcu. In enim
                justo, rhoncus ut, imperdiet a, venenatis vitae,
                justo. Nullam dictum felis eu pede mollis pretium.
                Integer tincidunt. Cras dapibus. Vivamus elementum semper
                nisi. Aenean vulputate eleifend
            </p>
        </div>
    </div>
    </div>

        <div class="row m-y-2 pt-5">
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
                        <h3>{{$user->name}}</h3>
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
                        programming Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                        consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                        mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                        eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam
                        lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                        ultricies nisi. Nam eget dui.
                    </div>
                    <div class="tab-pane active" id="skills">
                        skills Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
                        sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                        id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                        faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed
                        fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum
                        sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend
                        sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan
                        lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in
                        faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.
                    </div>
                    <div class="tab-pane active" id="generallInfo">
                        generallInfo Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec,
                        imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a,
                        consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum
                        nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et
                        nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat,
                        pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque
                        facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non,
                        auctor et, hendrerit quis, nisi.
                    </div>
                    <div class="tab-pane" id="edit">
                        <h4 class="m-y-2">Edit Profile</h4>
                        <form role="form">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value='{{$user->name}}'>
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
                                    <input class="form-control" type="text" value="" placeholder="Street">
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" value="" placeholder="Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-6">
                                    <input class="form-control" type="text" value="Wallstreet" placeholder="Street">
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" value="267" placeholder="Number">
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
    <hr>
    <div class="album py-5 bg-light ">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                             alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169e7836b6e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169e7836b6e%22%3E%3Crect%20width%3D%22348%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.65%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-md btn-outline-secondary">View</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                             alt="Thumbnail [100%x225]"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169e7836b6f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169e7836b6f%22%3E%3Crect%20width%3D%22348%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.65%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                             alt="Thumbnail [100%x225]"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169e7836b6f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169e7836b6f%22%3E%3Crect%20width%3D%22348%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.65%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <img id="stingButtonImg" src="images/stingButton2.png" alt="" class="stingAnimationBack">
@endsection