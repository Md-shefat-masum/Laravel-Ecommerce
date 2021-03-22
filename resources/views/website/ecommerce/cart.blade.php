@extends('website.ecommerce.layouts.ecommerce')
@section('content')

    <div class="cart-main-container shop-bg">
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="cart-table mb-50 bg-fff">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"></th>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/img/cart/1.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Lorem nec augue </a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte">$300.00</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="sub-total">$300.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/img/cart/2.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Adipiscing cursus eu  </a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte">$600.00</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <input value="10" type="number">
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="sub-total">$600.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/img/cart/3.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Cras nec nisl ut erat  </a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte">$165.00</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <input value="48" type="number">
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="sub-total">$165.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="actions clear">
                                                    <div class="coupon mb-10 floatleft">
                                                        <input name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" type="text">
                                                        <input class="button" name="apply_coupon" value="Apply Coupon" type="submit">
                                                    </div>
                                                    <div class="floatright mb-10">
                                                        <input class="button cursor-not" name="update_cart" value="Update Cart" type="submit">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
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




                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1140px;"><div class="owl-item active" style="width: 270px; margin-right: 15px;"><div class="product-wrapper bl">
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
                                    <td><b>$10,120.00</b></td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td><b>$10,120.00</b></td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="simple-product-form contuct-form mb-30">
                            <form action="#">
                                <button>Proceed to Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
