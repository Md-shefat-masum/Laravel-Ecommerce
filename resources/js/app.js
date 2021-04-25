/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// import vuex
const { default: store } = require('./store/index');

Vue.component('productSingleBody', require('./components/productComponents/productSingleBody.vue').default);
Vue.component('productDetails', require('./components/productComponents/productDetails.vue').default);
Vue.component('productHeaderCart', require('./components/productComponents/productHeaderCart.vue').default);
Vue.component('cartDetails', require('./components/productComponents/cartDetails.vue').default);

import { mapGetters, mapActions, mapMutations } from 'vuex';


if (document.getElementById('productList')) {
    const app = new Vue({
        el: "#productList",
        store,
    });
}

if (document.getElementById('productCart')) {
    const app = new Vue({
        el: "#productCart",
        store,
    });
}

if (document.getElementById('productCartDetails')) {
    const app = new Vue({
        el: "#productCartDetails",
        store,
        computed: {
            ...mapGetters([
                'get_sub_total'
            ]),
        }
    });
}
