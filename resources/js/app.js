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
Vue.component('singleProductBody', require('./components/singleProductBody.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

if (document.getElementById('app')) {
    const app = new Vue({
        el: "#app",
        created: function(){
            this.get_latest_product();
        },
        data: function(){
            return {
                products: {},
                pos_poduct_list: [],
            }
        },
        methods: {
            get_latest_product: function(page=1){
                $.get('/json/latest-products-json/6?page='+page,(res)=>{
                    this.products = res;
                })
            },
            search_product: _.debounce(function(key){
                key.length > 0 ?
                    $.get('/json/search-product-json/6/'+key,(res)=>{
                        this.products = res;
                    })
                :
                    this.get_latest_product();
            },500),
            add_product_to_pos_list: function(product){
                let product_check = this.pos_poduct_list.find((item)=>item.id === product.id);

                if(product_check){
                    product_check.qty++;
                }else{

                    let pos_product = {
                        id : product.id,
                        name : product.name,
                        image : product.thumb_image,
                        price : product.price,
                        qty : 1,
                    }
                    this.pos_poduct_list.unshift(pos_product);
                }
            },
            remove_post_product: function(product){
                this.pos_poduct_list = this.pos_poduct_list.filter((item)=>item.id !== product.id);
            },
            update_pos_qty: function(product,qty){
                let check_product = this.pos_poduct_list.find((item)=>item.id === product.id);
                check_product.qty = qty;
            },
        },
        computed: {
            get_pos_total_price: function(){
                return this.pos_poduct_list.reduce((total,product)=>{
                    return total + (product.price * product.qty)
                },0);
            }
        }
    });
}

// if(document.getElementById('test')){
//     const app = new Vue({
//         el: "#test",
//         created: function(){

//         },
//         data: function(){
//             return{
//                 a: 10,
//                 b: 20,
//                 sum: 0,
//                 div: 0,
//                 sub: 0,
//             }
//         },
//         methods: {
//             calculate: function(){
//                 this.sum = +(this.a) + +(this.b);
//                 this.sub = +(this.a) - +(this.b);
//                 this.div = +(this.a) / +(this.b);
//             }
//         }

//     });
// }

