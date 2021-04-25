<template>
    <div class="row">
        <div class="col-md-3" v-for="product in get_product_list.data" :key="product.id">
            <div class="product-wrapper">
                <div class="product-img">
                    <div class="discount_amount"  v-if="product.discount_price > 0">
                        <span>{{ product.discount }} %</span>
                    </div>
                    <a href="#">
                        <img :src="'/'+product.thumb_image" alt="" class="primary">
                        <img :src="'/'+product.image[0].name" alt="" class="secondary">
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
                    <h3><a :href="'/product-details/'+product.id">{{product.name}}</a></h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>

                    <div class="d-flex justify-content-between">
                        <span v-if="product.discount_price > 0">
                            <del>$ {{product.price}}</del>
                        </span>
                        <span v-else>{{product.price}}</span>

                        <span v-if="product.discount_price>0" >$ {{product.discount_price}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import { mapGetters, mapActions, mapMutations } from 'vuex';
export default {
    created: function(){
        this.fetch_product_list();
    },
    methods: {
        ...mapActions([
            'fetch_product_list'
        ]),
        ...mapMutations([
            'set_product_details'
        ]),

        showModal: function(product_details){
            this.set_product_details(product_details);
            $('#productViewModal').modal('show');
        }
    },
    computed: {
        ...mapGetters([
            'get_product_list'
        ]),
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
