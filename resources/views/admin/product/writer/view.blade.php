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
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos, pariatur cum rem laborum nesciunt itaque labore excepturi accusantium?
                                         Odio perspiciatis quos fugiat eos, reprehenderit atque aut voluptas eum ipsum.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos, pariatur cum rem laborum nesciunt itaque labore excepturi accusantium?
                                         Odio perspiciatis quos fugiat eos, reprehenderit atque aut voluptas eum ipsum.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos, pariatur cum rem laborum nesciunt itaque labore excepturi accusantium?
                                         Odio perspiciatis quos fugiat eos, reprehenderit atque aut voluptas eum ipsum.
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



