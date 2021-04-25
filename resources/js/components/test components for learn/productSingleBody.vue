<template>
    <div class="product-wrapper">
        <div class="product-img">
            <a href="#">
                <span v-if="product.thumb_image">
                    <img :src="'/'+product.thumb_image" alt="" class="primary">
                    <img :src="'/'+product.image[0].name" alt="" class="secondary">
                </span>
                <span v-else>
                    <img src="/image_load.gif" style="width:100%" alt="">
                </span>
            </a>
            <div class="product-icon c-fff home3-hover-bg">
                <ul>
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                    <li><a href="#" @click.prevent="set_product" title="view product" ><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product-content home3-hover">
            <h3><a href="#" :title="product.name">{{product.name}}</a></h3>
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>

            <div class="d-flex justify-content-between" v-if="discount_price>0">
                <del>${{product.price}}</del>
                <span>${{discount_price}}</span>
            </div>

            <div class="d-flex justify-content-between" v-else>
                <span>${{product.price}}</span>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    props:['product','set_selected_product','set_product_details_component_key'],
    created: function(){
        axios.get('/json/get-product-related-info-json/'+this.product.id)
            .then((res)=>{
                this.discount_price = res.data.discount_price;
            })
    },
    data: function(){
        return {
            discount_price: '',
        }
    },
    methods: {
        set_product: function(){
            this.set_selected_product(this.product);
            this.set_product_details_component_key();
            $('#productViewModal').modal('show');
        }
    }
}
</script>

<style scoped>
    .product-wrapper {
        box-shadow: 0px 0px 5px #1077d140;
        height: 92%;
        margin: 15px 0px;
    }
    .product-content h3 a {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        padding: 10px 0px;
    }
</style>
