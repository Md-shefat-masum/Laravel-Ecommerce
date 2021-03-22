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
                                    <li class="active"><a href="wishlist.html">wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="account-title mtb-20 text-center">
                            <h1>Wishlist</h1>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="wishlist-heading mb-30">
                            <h2>My wishlist on Welcome</h2>
                        </div>
                        <div class="cart-table mb-50 bg-fff">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"></th>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name">Product Name</th>
                                                <th class="product-price">Unit Price </th>
                                                <th class="product-quantity">Stock Status</th>
                                                <th class="product-subtotal"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail product-thumbnail-img hidden-sm hidden-xs">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/img/cart/1.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Lorem nec augue </a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte">$300.00 <del>$350.000</del></span>
                                                </td>
                                                <td class="product-quantity">
                                                    <span>In Stock</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <div class="coupon text-center">
                                                        <input class="button" name="apply_coupon" value="Add To Cart" type="submit">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail product-thumbnail-img hidden-sm hidden-xs">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/img/cart/2.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Adipiscing cursus eu  </a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte">$600.00 <del>$550.000</del></span>
                                                </td>
                                                <td class="product-quantity">
                                                    <span>In Stock</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <div class="coupon  text-center">
                                                        <input class="button" name="apply_coupon" value="Add To Cart" type="submit">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail product-thumbnail-img hidden-sm hidden-xs">
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
                                                    <span>In Stock</span>
                                                </td>
                                                <td class="product-subtotal text-center">
                                                    <div class="coupon">
                                                        <input class="button" name="apply_coupon" value="Add To Cart" type="submit">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail product-thumbnail-img hidden-sm hidden-xs">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/img/cart/4.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Lorem nec augue </a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte">$165.00</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <span>In Stock</span>
                                                </td>
                                                <td class="product-subtotal text-center">
                                                    <div class="coupon">
                                                        <input class="button" name="apply_coupon" value="Add To Cart" type="submit">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" title="Remove this item">x</a>
                                                </td>
                                                <td class="product-thumbnail product-thumbnail-img hidden-sm hidden-xs">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/img/cart/5.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Commodo augue</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte">$165.00</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <span>In Stock</span>
                                                </td>
                                                <td class="product-subtotal text-center">
                                                    <div class="coupon">
                                                        <input class="button" name="apply_coupon" value="Add To Cart" type="submit">
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
            </div>
        </div>
    </div>
@endsection
