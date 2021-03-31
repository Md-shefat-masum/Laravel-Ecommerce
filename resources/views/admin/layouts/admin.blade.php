<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Ecommerce Controll Dash Board" />
        <meta name="author" content="Ecommerce.com" />
        <title>Dashboard</title>
        <!-- loader-->
        <link href="{{ asset('contents/admin') }}/css/pace.min.css" rel="stylesheet" />
        <script src="{{ asset('contents/admin') }}/js/pace.min.js"></script>
        <!--favicon-->
        <link rel="icon" href="{{ asset('contents/admin') }}/images/favicon.ico" type="image/x-icon" />
        <!-- simplebar CSS-->
        <link href="{{ asset('contents/admin') }}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <!-- Bootstrap core CSS-->
        <link href="{{ asset('contents/admin') }}/css/bootstrap.min.css" rel="stylesheet" />
        <!-- animate CSS-->
        <link href="{{ asset('contents/admin') }}/css/animate.css" rel="stylesheet" type="text/css" />
        <!-- Icons CSS-->
        <link href="{{ asset('contents/admin') }}/css/icons.css" rel="stylesheet" type="text/css" />
        <!-- Metismenu CSS-->
        <link href="{{ asset('contents/admin') }}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
        @stack('ccss')
        <!-- Custom Style-->
        <link href="{{ asset('contents/admin') }}/css/app-style.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/custom.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="{{ asset('contents/admin') }}/js/jquery.min.js"></script>
        {{-- <script src="{{ asset('contents/admin') }}/axios.js"></script> --}}
        <script>
            $.ajaxSetup({
                cache:false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $( document ).ajaxSuccess((e,res)=>console.log((res.responseJSON && res.responseJSON) || res));
            $( document ).ajaxError(function( event, res ) {
                console.log(res.responseJSON.errors || res);
            });
            function toaster(icon, message){
                Toast.fire({
                    icon: icon,
                    title: message,
                })
            }
        </script>
        <script src="{{ asset('contents/admin') }}/custom.js"></script>
    </head>

    <body class="bg-theme bg-theme1">
        @include('include.flash')
        <!-- Start wrapper-->
        <div id="wrapper">
            <!--Start sidebar-wrapper-->
            <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                <div class="brand-logo">
                    <img src="{{ asset('contents/admin') }}/images/logo-icon.png" class="logo-icon" alt="logo icon" />
                    <h5 class="logo-text">Ecommerce</h5>
                    <div class="close-btn"><i class="zmdi zmdi-close"></i></div>
                </div>

                @include('admin.includes.sidebar')
            </div>
            <!--End sidebar-wrapper-->

            <!--Start topbar header-->
            <header class="topbar-nav">
                <nav class="navbar navbar-expand fixed-top">
                    <div class="toggle-menu">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="input-group">
                            <div class="input-group-prepend search-arrow-back">
                                <button class="btn btn-search-back" type="button"><i class="zmdi zmdi-long-arrow-left"></i></button>
                            </div>
                            <input type="text" class="form-control" placeholder="search" />
                            <div class="input-group-append">
                                <button class="btn btn-search" type="button"><i class="zmdi zmdi-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <ul class="navbar-nav align-items-center right-nav-link ml-auto">
                        <li class="nav-item dropdown search-btn-mobile">
                            <a class="nav-link position-relative" href="javascript:void();">
                                <i class="zmdi zmdi-search align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
                                <i class="zmdi zmdi-comment-outline align-middle"></i><span class="bg-danger text-white badge-up">12</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">New Messages <a href="javascript:void();" class="extra-small-font">Clear All</a></li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('contents/admin') }}/images/avatars/avatar-5.png" alt="user avatar" /></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Jhon Deo</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                    <small>Today, 4:10 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('contents/admin') }}/images/avatars/avatar-6.png" alt="user avatar" /></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Sara Jen</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                    <small>Yesterday, 8:30 AM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('contents/admin') }}/images/avatars/avatar-7.png" alt="user avatar" /></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Dannish Josh</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                    <small>5/11/2018, 2:50 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('contents/admin') }}/images/avatars/avatar-8.png" alt="user avatar" /></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet.</p>
                                                    <small>1/11/2018, 2:50 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
                                <i class="zmdi zmdi-notifications-active align-middle"></i><span class="bg-info text-white badge-up">14</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">New Notifications <a href="javascript:void();" class="extra-small-font">Clear All</a></li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">New Registered Users</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">New Received Orders</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">New Updates</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown language">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();"><i class="flag-icon flag-icon-gb align-middle"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item"><i class="flag-icon flag-icon-gb mr-3"></i>English</li>
                                <li class="dropdown-item"><i class="flag-icon flag-icon-fr mr-3"></i>French</li>
                                <li class="dropdown-item"><i class="flag-icon flag-icon-cn mr-3"></i>Chinese</li>
                                <li class="dropdown-item"><i class="flag-icon flag-icon-de mr-3"></i>German</li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
                                <span class="user-profile"><img src="{{ asset('contents/admin') }}/images/avatars/avatar-13.png" class="img-circle" alt="user avatar" /></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item user-details">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('contents/admin') }}/images/avatars/avatar-13.png" alt="user avatar" /></div>
                                            <div class="media-body">
                                                <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                                <p class="user-subtitle">mccoy@example.com</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="zmdi zmdi-comments mr-3"></i>Inbox</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="zmdi zmdi-balance-wallet mr-3"></i>Account</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="zmdi zmdi-settings mr-3"></i>Setting</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="zmdi zmdi-power mr-3"></i>Logout</li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <!--End topbar header-->

            <div class="clearfix"></div>


            @yield('content')


            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->

            <!--Start footer-->
            <footer class="footer">
                <div class="container">
                    <div class="text-center">
                        Copyright © 2020 Dashtreme Admin
                    </div>
                </div>
            </footer>
            <!--End footer-->

            <!--start color switcher-->
            <div class="right-sidebar">
                <div class="switcher-icon">
                    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                </div>
                <div class="right-sidebar-content">
                    <p class="mb-0">Gaussion Texture</p>
                    <hr />

                    <ul class="switcher">
                        <li id="theme1"></li>
                        <li id="theme2"></li>
                        <li id="theme3"></li>
                        <li id="theme4"></li>
                        <li id="theme5"></li>
                        <li id="theme6"></li>
                    </ul>

                    <p class="mb-0">Gradient Background</p>
                    <hr />

                    <ul class="switcher">
                        <li id="theme7"></li>
                        <li id="theme8"></li>
                        <li id="theme9"></li>
                        <li id="theme10"></li>
                        <li id="theme11"></li>
                        <li id="theme12"></li>
                        <li id="theme13"></li>
                        <li id="theme14"></li>
                        <li id="theme15"></li>
                    </ul>
                </div>
            </div>
            <!--end color switcher-->
        </div>
        <!--End wrapper-->
    </body>

    {{-- modal part --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" name="modal_delete_form" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <h5>Sure Want To Delete!!</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- file mananger --}}
    @once
        @include('admin.product.components.file_manager')
    @endonce


    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('contents/admin') }}/js/popper.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="{{ asset('contents/admin') }}/plugins/simplebar/js/simplebar.js"></script>
    <!-- Metismenu js -->
    <script src="{{ asset('contents/admin') }}/plugins/metismenu/js/metisMenu.min.js"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('contents/admin') }}/js/app-script.js"></script>

    @stack('cjs')
</html>

