if (document.getElementById('category_product')) {
    const app = new Vue({
        el: "#category_product",
        store : window.vue_store,
        // store,
        created: function(){
            // console.log(window.vue_store);
            this.get_product();
            this.init_jquery();
            this.get_categories();
        },
        data: function(){
            return {
                name: 'test',
                page: 'category',
                products: {},
                categories: [],
                data_load_url: '/json/latest-products-json?page=',
            }
        },
        methods: {
            ...window.mapActions([
                'fetch_product_list'
            ]),
            ...window.mapMutations([
                'set_product_details'
            ]),
            get_product: function(page=1){
                axios.get(this.data_load_url+page)
                .then((res)=>{
                    console.log(res.data);
                    if(res.data.products){
                        this.products = res.data.products;
                    }else{
                        this.products = res.data;
                    }
                    $("html, body").animate({ scrollTop: 250 }, "slow");
                })
            },
            get_categories: function(){
                axios.get('/json/get-all-category')
                    .then(res=>{
                        this.categories = res.data;
                        setTimeout(() => {
                            $('.toggle_category').on('click',function(){
                                // console.log('hi');
                                $(this).siblings('ul').toggleClass('toggle_display')
                                // console.log($(this).parent('li').children('ul').toggleClass('toggle_display'));
                            });
                        }, 2000);
                    });
            },
            get_category_wise_product: function(page=1){
                axios.get('/json/latest-products-json?page='+page)
                .then((res)=>{
                    this.products = res.data;
                    $("html, body").animate({ scrollTop: 250 }, "slow");
                })
            },
            showModal: function(product_details){
                this.set_product_details(product_details);
                $('#productViewModal').modal('show');
            },
            init_jquery: function(){
                // pricing slider//
                let min_price=0;
                let max_price = 0;
                $.get('/json/get-min-max-price',function(res){
                    min_price = res.min_price;
                    max_price = res.max_price;
                    min_price = 120;
                    max_price = 50000;

                    $("#slider-range").slider({
                        range: true,
                        min: min_price,
                        max: max_price,
                        values: [2, (max_price/2)],
                        slide: function (event, ui) {
                            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                        }
                    });

                    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                        " - $" + $("#slider-range").slider("values", 1));
                })
            },
            load_product: function(url){
                window.history.pushState("", "", url);
                // this.fetch_category_product_list_paginate(1);
                // console.log(url);
                this.data_load_url = window.location.href+"/all-product-json?page=";

                axios.get(window.location.href+'/all-product-json?page='+1)
                    .then((res)=>{
                        this.products = res.data.products;
                        // this.commit('set_related_colors',res.data.sizes);
                        // this.commit('set_related_colors',res.data.colors);
                        console.log(res.data);
                    })
            },
        },
        computed: {
            ...window.mapGetters([
                'get_product_list',
                'get_test_variable'
            ]),
        }
    });
}
