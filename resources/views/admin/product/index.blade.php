@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'All'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-xl-2">
                                            <a href="ecommerce-add-new-products.html" class="btn btn-light mb-3 mb-lg-0"><i class="bx bxs-plus-square"></i>New Product</a>
                                        </div>
                                        <div class="col-lg-9 col-xl-10">
                                            <form class="float-lg-end">
                                                <div class="row row-cols-lg-auto g-2">
                                                    <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
                                                        <div class="position-relative mx-3">
                                                            <input type="text" class="form-control ps-5" placeholder="Search Product..." /> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                        </div>
                                                        <div class="btn-group mx-3" role="group" aria-label="Button group with nested dropdown">
                                                            <button type="button" class="btn btn-light">Sort By</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-chevron-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group mx-3" role="group" aria-label="Button group with nested dropdown">
                                                            <button type="button" class="btn btn-light">Collection Type</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bxs-category"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group mx-3" role="group">
                                                            <button type="button" class="btn btn-light">Price Range</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-slider"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                        @foreach ($collection as $item)
                            @include('admin.product.components.product_single_body',[
                                'product' => $item
                            ])
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div aria-label="Page navigation example" class="navigation_body">
                                {{ $collection->links() }}
                            </div>
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



