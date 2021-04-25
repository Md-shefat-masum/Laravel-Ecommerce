@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <div class="simple-product-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="woocommerce-breadcrumb mtb-15">
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Hats</a></li>
                                <li class="active"><a href="#">Cras nec nisl ut erat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12" id="productList">
                            <div id="app_product_details">
                                <product-details
                                    :selected_product="{{$product}}">
                                </product-details>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-5">
                            <div class="symple-product mb-20">
                                <div class="single-product-tab  box-shadow mb-20">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="one">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/1.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="two">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/2.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="three">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/3.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="four">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/4.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="five">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/5.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="six">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/6.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="seven">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/7.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="eight">
                                            <a class="popup" href="{{ asset('contents/website') }}/img/product/8.jpg">
                                                <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-menu mb-30 box-shadow">
                                    <div class="single-product-active clear owl-carousel owl-theme owl-loaded">

                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 896px;"><div class="owl-item active" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#one" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/1.jpg" alt="">
                                            </a>
                                        </div></div><div class="owl-item active" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#two" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="">
                                            </a>
                                        </div></div><div class="owl-item active" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#three" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="">
                                            </a>
                                        </div></div><div class="owl-item" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#four" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="">
                                            </a>
                                        </div></div><div class="owl-item" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#five" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="">
                                            </a>
                                        </div></div><div class="owl-item" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#six" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="">
                                            </a>
                                        </div></div><div class="owl-item" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#sevin" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="">
                                            </a>
                                        </div></div><div class="owl-item" style="width: 112px; margin-right: 0px;"><div class="single-img floatleft">
                                            <a href="#eight" data-toggle="tab">
                                                <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="">
                                            </a>
                                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div><div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="symple-product box-shadow bg-fff p-15 mb-30">
                                <h3>Cras nec nisl ut erat</h3>
                                <div class="product-content simple-product-content mb-10">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <a href="#">(3 customer reviews)</a><br>
                                    <span><del>500$</del><span>&amp;300.00</span></span>
                                </div>
                                <p>it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more</p>
                                <div class="simple-product-form contuct-form mtb-20">
                                    <form action="#">
                                        <input min="1" max="1000" name="quantity" value="48" type="number">
                                        <button>Add to cart</button>
                                    </form>
                                </div>
                                <div class="simple-product-icon c-fff hover-bg pb-20 mb-10 bb">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" title="" data-original-title="Browser Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_meta">
                                    <b>SKU:</b> <span>W-hat-8</span>
                                    <div class="category mb-10">
                                        <b>Categories:</b>
                                        <a href="#">Accessories,   </a>
                                        <a href="#"> Clothing,</a>
                                        <a href="#"> Hats,,</a>
                                        <a href="#"> Hoodies</a>
                                    </div>
                                    <div class="single-blog-tag category bb pb-10">
                                        <b>Tags:</b>
                                        <a href="#">fashion,</a>
                                    </div>

                                    <div class="footer-content pt-15 text-uppercase">
                                    <p>Share this product</p>
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Twetter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Google-Plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="simple-product-tab box-shadow">
                                <div class="simple-product-tab-menu clear">
                                    <ul class="nav">
                                        <li><a class="active" href="#description" data-toggle="tab">Description</a></li>
                                        <li><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content  bg-fff">
                                    <div class="tab-pane active" id="description">
                                        <div class="product-description p-20 bt">
                                            <h2>Product Description</h2>
                                            <p>it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="reviews">
                                        <div class="product-reviews p-20 bt">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="review-area">
                                                        <h2>3 reviews for Cras nec nisl ut erat</h2>
                                                        <ul>
                                                            <li class="review-1">
                                                                <div class="review mb-20">
                                                                    <div class="review-img">
                                                                        <img class="img-thumbnail" src="{{ asset('contents/website') }}/img/comment/1.png" alt="">
                                                                    </div>
                                                                    <div class="review-content p-15">
                                                                        <b>admin -</b>
                                                                        <div class="review-rating product-content simple-product-content pull-right">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>December 16, 2015:</p>
                                                                        <p>like</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="review mb-20">
                                                                    <div class="review-img">
                                                                        <img class="img-thumbnail" src="{{ asset('contents/website') }}/img/comment/1.png" alt="">
                                                                    </div>
                                                                    <div class="review-content p-15">
                                                                        <b>alex -</b>
                                                                        <div class="review-rating product-content simple-product-content pull-right">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <span> December 18, 2015: </span>
                                                                        <p>google</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="review mb-20">
                                                                    <div class="review-img">
                                                                        <img class="img-thumbnail" src="{{ asset('contents/website') }}/img/comment/1.png" alt="">
                                                                    </div>
                                                                    <div class="review-content p-15">
                                                                        <b>name -</b>
                                                                        <div class="review-rating product-content simple-product-content pull-right">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <span>August 11, 2016: </span>
                                                                        <p>my rating</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="review-form form-style">
                                                        <h2>Add a review</h2>
                                                        <p>Add a review</p>
                                                        <div class="review-rating product-content simple-product-content">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <form action="#">
                                                            <p>Your Review</p>
                                                            <textarea name="#" id="#" cols="30" rows="10"></textarea>
                                                            <p>Name *</p>
                                                            <input type="text">
                                                            <p>Emai *</p>
                                                            <input type="email">
                                                            <button>Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product box-shadow mtb-50 bg-fff">
                        <div class="product-title home2-product-title home2-bg-1 text-uppercase">
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>Up-Sells Products</h3>
                        </div>
                        <div class="new-product-active left-right-angle home2 owl-carousel owl-theme owl-loaded">






                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1273.5px;"><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                    </div>
                    <div class="product box-shadow mb-50 bg-fff">
                        <div class="product-title home2-product-title home2-bg-1 text-uppercase">
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>Related Products</h3>
                        </div>
                        <div class="new-product-active left-right-angle home2 owl-carousel owl-theme owl-loaded">






                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1273.5px;"><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div><div class="owl-item" style="width: 211.25px; margin-right: 1px;"><div class="product-wrapper bl">
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
                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                    <!-- categories-area start -->
                    <div class="categories-area box-shadow bg-fff">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-bookmark icon bg-4"></i>
                            <h3>categories</h3>
                        </div>
                        <div class="shop-categories-menu p-20 mb-30">
                            <ul>
                                <li><a href="#">Accessories</a><span> (7)</span></li>
                                <li><a href="#">Clothing</a><span> (21)</span></li>
                                <li><a href="#">Men's</a><span> (16)</span></li>
                                <li><a href="#">Music</a><span> (11)</span></li>
                                <li><a href="#">Posters</a><span> (7)</span></li>
                                <li><a href="#">Women's</a><span> (14)</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- featured-area start -->
                    <div class="featured-area bg-fff box-shadow mb-30">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-bookmark icon bg-4"></i>
                            <h3>Recent Reviews</h3>
                        </div>
                        <div class="featured-wrapper p-20">
                            @php
                                $collection = App\Models\Product::active()->with(['category', 'sub_category', 'main_category', 'color', 'image', 'publication', 'size', 'unit', 'vendor', 'writer'])
                                                        ->orderBy('id','DESC')->limit(10)->get();
                            @endphp
                            {{-- @foreach ($collection as $item)
                                <div @click.prevent="set_selected_product(JSON.stringify({{$item}}))" class="product-wrapper single-featured">
                                    <div class="product-content floatleft">
                                        <h3><a @click.prevent="set_selected_product({{$item}})" href="#">{{ $item->name }}</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <small>by name</small>
                                    </div>
                                    <div class="product-img floatright">
                                        <a href="#">
                                            <img src="/{{ $item->thumb_image }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach --}}

                        </div>
                    </div>
                    <!-- product-tags-area start -->
                    <div class="product-tags-area bg-fff box-shadow mtb-30">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-bookmark icon bg-4"></i>
                            <h3>Product Tags</h3>
                        </div>
                        <div class="tags tag-menu hover-bg p-20">
                            <ul>
                                <li><a href="#">commodo</a></li>
                                <li><a href="#">enim</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">Fly</a></li>
                                <li><a href="#">Glasses</a></li>
                                <li><a href="#">Hats</a></li>
                                <li><a href="#">Hoodies</a></li>
                                <li><a href="#">libero</a></li>
                                <li><a href="#">men</a></li>
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Nam</a></li>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">version</a></li>
                                <li><a href="#">women</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- compare-area start -->
                    <div class="compare-area bg-fff box-shadow mb-30">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-bookmark icon bg-4"></i>
                            <h3>Compare</h3>
                        </div>
                        <div class="compare-menu p-20">
                            <p>No products to compare</p>
                            <a href="#">Clear all</a>
                            <a href="#" data-toggle="tooltip" title="" class="pull-right compare text-uppercase" data-original-title="Compare">Compare </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
