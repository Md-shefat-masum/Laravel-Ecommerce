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
Vue.component('productDetails', require('./components/productDetails.vue').default);


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
                this.products = res.data;
            });

            let url_id = (location.href).substring((location.href).lastIndexOf('/') + 1);
            $.get('/json/show-product-json/'+url_id, (res) => {
                this.selected_product = res;
                this.set_product_details_component_key();
            });
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
                selected_product: {},

                // component keys
                product_details_component_key: Math.random(),
            }
        },
        methods: {
            set_modal_product: function (product) {
                this.modal_view_product = product;
            },
            set_selected_product: function(product){
                this.set_product_details_component_key();
                this.selected_product = product;
            },
            set_product_details_component_key: function(){
                this.product_details_component_key = Math.random();
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
            get_url_id: function(url){
                var arr = url.match(/navigate\/([^ ]*)/);
                arr = arr[arr.length - 1].split('/');
                if(arr.length == 1)
                    return { project_id: +arr[0] };
                else if(arr.length == 2)
                    return { project_id: +arr[0], note_id: +arr[1] };
                else
                    return 'invalid';
            }
        },
    });
}
