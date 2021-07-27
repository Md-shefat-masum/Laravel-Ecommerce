@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <div class="main-container shop-bg">
        <div class="container" id="category_product">
            <div class="row">
                <div class="col-12">
                    <div class="woocommerce-breadcrumb mtb-15">
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="shop.html">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                    <!-- categories-area start -->
                    @include('website.ecommerce.product.poduct_page_categories')

                    <!-- filter-by-price-area start -->
                    @include('website.ecommerce.product.product_price_range')

                    <!-- size-area start -->
                    <div class="size-area bg-fff box-shadow">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-bookmark icon bg-4"></i>
                            <h3>Size</h3>
                        </div>
                        <div class="size-menu shop-categories-menu p-20">
                            <ul>
                                <li><a href="#">L</a><span> (1)</span></li>
                                <li><a href="#">M</a><span> (1)</span></li>
                                <li><a href="#">S</a><span> (1)</span></li>
                                <li><a href="#">XS</a><span> (1)</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- color-area start -->
                    <div class="color-area bg-fff box-shadow mtb-30">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-bookmark icon bg-4"></i>
                            <h3>Color</h3>
                        </div>
                        <div class="size-menu shop-categories-menu p-20">
                            <ul>
                                <li><a href="#">Gold</a><span> (1)</span></li>
                                <li><a href="#">Green</a><span> (1)</span></li>
                                <li><a href="#">White </a><span> (1)</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- compare-area start -->
                    <div class="compare-area bg-fff box-shadow">
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
                    <!-- featured-area start -->
                    <div class="featured-area bg-fff box-shadow mb-30">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-bookmark icon bg-4"></i>
                            <h3>featured</h3>
                        </div>
                        <div class="featured-wrapper p-20">
                            <div class="product-wrapper single-featured bb">
                                <div class="product-img floatleft">
                                    <a href="#">
                                        <img src="/contents/website/img/product/1.jpg" alt="" class="primary" />
                                        <img src="/contents/website/img/product/2.jpg" alt="" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-content floatright">
                                    <h3><a href="#">Duis convallis</a></h3>
                                    <span>&amp;300.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-vew area start -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                    <div class="tab-area">

                        <!-- <div class="tab-menu-area bg-fff mb-30 box-shadow">
                            <div class="row">
                                <div class="col-xl-4 col-md-4 col-md-4 col-12">
                                    <div class="shop-tab-menu">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" href="#"><i class="fa fa-th-list"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-th-list"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-md-4 col-12">
                                    <div class="shop-pra text-center">
                                        <p>Showing 1-16 of 21 results</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-md-4 col-12">
                                    <div class="woocommerce-ordering text-center">
                                        <select name="orderby">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-md-3" v-for="product in products.data" :key="product.id">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img :src="`/${product.thumb_image}`" alt="" class="primary">
                                            <img :src="`/${product.image[1].name}`" alt="" class="secondary">
                                        </a>
                                        <div class="product-icon c-fff home3-hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" @click.prevent="showModal(product)"  title="" data-original-title="view product details"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content home3-hover">
                                        <h3><a :href="'/product-details/'+product.id">@{{product.name}}</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <div class="d-flex justify-content-between">
                                            <span v-if="product.discount_price > 0">
                                                <del>$ @{{product.price}}</del>
                                            </span>
                                            <span v-else>@{{product.price}}</span>

                                            <span v-if="product.discount_price>0" >$ @{{product.discount_price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- woocommerce-pagination-area -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <pagination :data="products" @pagination-change-page="get_product"></pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade"  id="productViewModal" style="z-index: 99999999999;" tabindex="-1" aria-labelledby="productViewModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productViewModalLabel">Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <product-details></product-details>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @push('custom_js')
        <script src="{{ asset('contents/website') }}/vue/products_page_vue.js"></script>
        <style>
            .product-wrapper {
                background: white;
                margin-bottom: 30px;
            }
            .toggle_display{
                display: block!important;
            }
        </style>
    @endpush
@endsection
