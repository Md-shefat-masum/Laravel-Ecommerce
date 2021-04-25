<template>
    <div class="product box-shadow bg-fff">
        <div class="product-title home3-bg text-uppercase">
            <i class="fa fa-paper-plane-o icon home3-bg2"></i>
            <h3>Latest Product</h3>
        </div>
        <div class="left left-right-angle" style="padding: 17px;">
            <div class="row">
                <div class="col-md-3" v-for="(product,index) in products.data" :key="index">
                    <product-single-body
                        :set_selected_product="set_selected_product"
                        :set_product_details_component_key="set_product_details_component_key"
                        :product="product">
                    </product-single-body>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['set_selected_product','set_product_details_component_key'],
    created: function(){
        $.get('/json/latest-products-json', (res) => {
            this.products = res;
        });

    },
    data: function(){
        return {
            products: [],
        };
    }
}
</script>

<style scoped>

</style>
