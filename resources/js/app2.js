/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// components
Vue.component('home-section', require('./components/homeSection.vue').default);
Vue.component('product-single-body', require('./components/productSingleBody.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
if (document.getElementById('app')) {
    const app = new Vue({
        el: "#app",
        mounted: function () {
            console.log('mounted');
        },
        created: function () {
            $.get('/json/latest-products-json', (res) => {
                console.log(res);
                this.products = res.data;
            })
        },
        data: function () {
            return {
                modal_view_product: {
                    name: '',
                    price: '',
                    thumb_image: '',
                },
                total_cart_product: 0,
                cart_products: [],
                cart_total_price: 0,
                products: [],
            }
        },
        methods: {
            set_modal_product: function (product) {
                console.log(product);
                this.modal_view_product = product;
            },
            set_cart: function (product) {
                this.total_cart_product++;

                let product_check = this.cart_products.find((item) => item.id === product.id);

                if (product_check) {
                    product_check.qty++;
                } else {
                    let cart_info = {
                        name: product.name,
                        id: product.id,
                        image: product.thumb_image,
                        price: product.price,
                        qty: 1,
                    };
                    this.cart_products.push(cart_info);
                }

                this.calculate_total();
            },
            remove_cart: function (product) {
                this.cart_products = this.cart_products.filter((item) => {
                    if (item.id === product.id) {
                        this.total_cart_product -= product.qty;
                    }
                    return item.id !== product.id;
                });
                this.calculate_total();
            },
            calculate_total: function () {
                this.cart_total_price = this.cart_products.reduce((total, product) => {
                    return total + (product.price * product.qty);
                }, 0)
            },

        },
    });
}
