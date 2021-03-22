@extends('admin.layouts.admin')

@section('content')
    <style>
        .card .table td, .card .table th {
            white-space: break-spaces;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'View'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">Photo</td>
                                    <td>:</td>
                                    <td>
                                        <img src="/{{ $user->photo }}" height="60" alt="" srcset="">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">First Name</td>
                                    <td>:</td>
                                    <td>
                                        {{ $user->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Last Name</td>
                                    <td>:</td>
                                    <td>
                                        {{ $user->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">User Name</td>
                                    <td>:</td>
                                    <td>
                                        {{ $user->username }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Email</td>
                                    <td>:</td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Role Name</td>
                                    <td>:</td>
                                    <td>
                                        {{ $user->role_id }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Created at</td>
                                    <td>:</td>
                                    <td>
                                        {{ $user->created_at }}
                                    </td>
                                </tr>

                            </table>
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



