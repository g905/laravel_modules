@extends('admin::layouts.master')
@section('content')


<div class="content">
    <div class="row">
        <div class="col">
                @include('flash')
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="{{ Module::asset('admin:img/damir-bosnjak.jpg') }}" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">

                            <img class="avatar border-gray" src="{{ URL::to('/') }}/uploads/avatars/{{ $user->image }}" alt="{{ $user->first_name }} avatar">
                            <h5 class="title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                        </a>
                        <p class="description">
                            {{ $user->email }}
                        </p>
                    </div>
                    <p class="description text-center">
                        {{ $user->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                <h5>12
                                    <br>
                                    <small>Files</small>
                                </h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                <h5>2GB
                                    <br>
                                    <small>Used</small>
                                </h5>
                            </div>
                            <div class="col-lg-3 mr-auto">
                                <h5>24,6$
                                    <br>
                                    <small>Spent</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Team Members</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="{{ Module::asset('admin:img/faces/ayo-ogunseinde-2.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-7">
                                    DJ Khaled
                                    <br />
                                    <span class="text-muted">
                          <small>Offline</small>
                        </span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="{{ Module::asset('admin:img/faces/joe-gardner-2.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-7">
                                    Creative Tim
                                    <br />
                                    <span class="text-success">
                          <small>Available</small>
                        </span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="{{ Module::asset('admin:img/faces/clem-onojeghuo-2.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-ms-7 col-7">
                                    Flume
                                    <br />
                                    <span class="text-danger">
                          <small>Busy</small>
                        </span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 pr-1">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" class="form-control" name="company" placeholder="Company" value="{{ $user->company }}">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $user->last_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Home Address" value="{{ $user->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" placeholder="City" value="{{ $user->city }}">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control" placeholder="Country" value="{{ $user->country }}">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" name="zip-code" class="form-control" placeholder="ZIP Code" value="{{ $user->ZIP }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea name="description" class="form-control textarea">{{ $user->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fileinput text-center fileinput-new " data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle">
                                        <img class="avatar border-gray" src="{{ URL::to('/') }}/uploads/avatars/{{ $user->image }}" alt="{{ $user->first_name }} avatar">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                    <div>
                                      <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="hidden" value="" name="...">
                                          <input type="file" name="file" style="opacity: 0">
                                        <div class="ripple-container"></div>
                                      </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove<div class="ripple-container"><div class="ripple-decorator ripple-on ripple-out" style="left: 66.75px; top: 25px; background-color: rgb(255, 255, 255); transform: scale(15.5077);"></div></div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
