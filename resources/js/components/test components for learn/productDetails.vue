<template>
    <div class="row" v-if="Object.keys(selected_product).length > 0">
        <div class="col-lg-5">
            <div class="symple-product mb-20">
                <div class="single-product-tab box-shadow mb-20 text-center">
                    <img :src="'/'+product_show_image" class="img-fluid" alt="" />
                </div>
                <div class="single-product-menu mb-30 d-flex flex-wrap" style="justify-content: space-evenly;">
                    <div class="d-inline-block shadow shadow-sm my-1">
                        <img @click="product_show_image = product.thumb_image" :src="'/'+product.thumb_image" style="height:80px;width:80px;cursor:pointer;" alt="" />
                    </div>
                    <div class="d-inline-block shadow shadow-sm my-1" v-for="(r_image) in product.image" :key="r_image.id">
                        <img @click="product_show_image = r_image.name" :src="'/'+r_image.name" style="height:80px;width:80px;cursor:pointer;" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="symple-product box-shadow bg-fff p-15 mb-30">
                <h3>{{product.name}}</h3>
                <div class="product-content simple-product-content mb-10">
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <a href="#">(3 customer reviews)</a><br />
                    <span><del>adsf</del> <span>$ {{product.price}}</span></span>
                </div>
                <div>
                   {{product.description}}
                </div>
                <div class="simple-product-form contuct-form mtb-20">
                    <form action="#" class="row">
                        <div class="col-md-4">
                            <div class="form-group d-flex justify-content-between">
                                <label for="" style="margin-right: 10px; font-weight:bold;">QTY: </label>
                                <input class="form-control" min="1" :max="product.stock - product.minimum_amount" name="quantity" value="1" type="number" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group d-flex">
                                <label for="" style="margin-right: 10px; font-weight:bold;">Color: </label>
                                <select name="" class="form-control" id="">
                                    <option v-for="(color) in product.color" :key="color.id" :value="color.id" > {{color.name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group d-flex">
                                <label for="" style="margin-right: 10px; font-weight:bold;">Size: </label>
                                <select name="" class="form-control" id="">
                                     <option v-for="(size) in product.size" :key="size.id" :value="size.id" > {{size.name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button">Add to cart</button>
                        </div>
                    </form>
                </div>
                <div class="simple-product-icon c-fff hover-bg pb-20 mb-10 bb">
                    <ul>
                        <li>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Browser Wishlist"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="product_meta">
                    <b>Code:</b> <span> {{ product.code }} </span>
                    <br>
                    <b>SKU:</b> <span> {{ product.sku }} </span>
                    <div class="category mb-10">
                        <b>Categories:</b>
                       <a href="#" v-for="(category) in product.category" :key="category.id"> {{ category.name }}, </a>
                    </div>
                    <div class="single-blog-tag category bb pb-10">
                        <b>Tags:</b>
                        <a href="#">fashion, style, men, child</a>
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
    </div>
</template>

<script>
export default {
    props: ['selected_product'],
    created: function(){
        if(typeof this.selected_product == "string"){
            this.product = JSON.parse(this.selected_product);
            this.product_show_image = this.product.thumb_image
        }else{
            this.product = this.selected_product;
        }
    },
    data: function(){
        return {
            product_show_image: this.selected_product.thumb_image,
            product: [],
        }
    },
}
</script>

