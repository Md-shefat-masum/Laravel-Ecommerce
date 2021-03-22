@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'Create'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Horizontal Form</div>
                            <hr />
                            <form>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-21" placeholder="Enter Your Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-22" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-22" placeholder="Enter Your Email Address" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-23" class="col-sm-2 col-form-label">Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-23" placeholder="Enter Your Mobile Number" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-24" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-24" placeholder="Enter Password" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-25" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-25" placeholder="Confirm Password" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="icheck-material-white">
                                            <input type="checkbox" id="user-checkbox5" checked="" />
                                            <label for="user-checkbox5">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



