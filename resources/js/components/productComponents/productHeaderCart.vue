<template>
    <div>
        <div class="cart">
            <i class="icofont icofont-bag"></i>
            <a href="#">
                {{ get_carts.length }} Items - <strong>$ {{get_sub_total}} </strong>
                <i class="icofont icofont-rounded-down"></i>
            </a>
        </div>
        <ul>
            <li>
                <div class="cart-items" >
                    <div class="cart-item bb mt-10" v-for="(cart,index) in get_carts" :key="index">
                        <div class="cart-img">
                            <a href="#">
                                <img :src="'/'+cart.product.thumb_image" alt="" />
                            </a>
                        </div>
                        <div class="cart-content">
                            <a href="#">{{cart.product.name}}</a>
                            <a href="#" class="pull-right cart-remove">
                                <i class="fa fa-times" @click="remove_product_form_carts(cart)"></i>
                            </a>
                            <div class="d-flex justify-content-between flex-wrap">
                                <span>{{cart.qty}} x ${{ cart.product.discount_price || cart.product.price }}</span>
                                <span>${{ cart.product.discount_price * cart.qty || cart.product.price * cart.qty }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="total mt-10">
                        <span class="pull-left">Subtotal:</span>
                        <span class="pull-right">$ {{get_sub_total}}</span>
                    </div>
                    <div class="cart-btn mb-20">
                        <a href="/cart">view cart</a>
                        <a href="/checkout">Checkout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
import { mapGetters, mapActions, mapMutations } from 'vuex';
export default {
    methods: {
        ...mapMutations([
            'remove_from_carts'
        ]),
        remove_product_form_carts: function(cart){
            this.remove_from_carts(cart);
        },
    },
    computed: {
        ...mapGetters([
            'get_carts',
            'get_sub_total'
        ]),
    }
}
</script>

<style>

</style>
