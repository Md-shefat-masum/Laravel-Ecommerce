<template>
    <div class="product box-shadow bg-fff">
        <div class="product-title home3-bg text-uppercase">
            <i class="fa fa-paper-plane-o icon home3-bg2"></i>
            <h3>Latest Product</h3>
        </div>
        <div class="left left-right-angle">
            <div class="row">
                <div class="col-md-3" v-for="(product,index) in products.data" :key="index">
                    <product-single-body :product="product"></product-single-body>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created: function(){
        $.get('/json/latest-products-json', (res) => {
            console.log(res);
            this.products = res;
        })
    },
    data: function(){
        return {
            products: [],
        };
    }
}
</script>

<style>

</style>
