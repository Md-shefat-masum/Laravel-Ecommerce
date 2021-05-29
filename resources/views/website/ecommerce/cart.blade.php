@extends('website.ecommerce.layouts.ecommerce')
@section('content')

    <div class="cart-main-container shop-bg" id="productCartDetails">
        <div class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-breadcrumb mtb-15">
                            <div class="menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active"><a href="cart.html">cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="account-title mtb-20 text-center">
                            <h1>Cart</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <cart-details></cart-details>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <!-- product area start -->
                        <div class="cart-product bg-fff box-shadow mb-50">
                            <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                                <i class="fa fa-bookmark icon bg-4"></i>
                                <h3>Cross-Sells </h3>
                            </div>
                            <div class="cart-active left-right-angle left home2  owl-carousel owl-theme owl-loaded">

                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1140px;">
                                    <div class="owl-item active" style="width: 270px; margin-right: 15px;"><div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/product/1.jpg" alt="" class="primary">
                                            <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="" class="secondary">
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&amp;300.00</span>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 270px; margin-right: 15px;"><div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="" class="primary">
                                            <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="" class="secondary">
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&amp;300.00</span>
                                    </div>
                                </div></div><div class="owl-item" style="width: 270px; margin-right: 15px;"><div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="primary">
                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary">
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&amp;300.00</span>
                                    </div>
                                </div></div><div class="owl-item" style="width: 270px; margin-right: 15px;"><div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="primary">
                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary">
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&amp;300.00</span>
                                    </div>
                                </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                        </div>
                        <!-- product area end -->
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="cart_totals">
                            <div class="cart-total-taitle mb-30 text-uppercase">
                                <h3>Cart Totals</h3>
                            </div>
                        </div>
                        <div class="table-content table-responsive mb-30">
                            <table>
                                <tbody><tr>
                                    <td><strong>Subtotal</strong></td>
                                    <td><b>$ @{{get_sub_total}}</b></td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td><b>$ @{{get_sub_total}}</b></td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="simple-product-form contuct-form mb-30">
                            <a class="btn btn-success btn-sm" href="/checkout">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
