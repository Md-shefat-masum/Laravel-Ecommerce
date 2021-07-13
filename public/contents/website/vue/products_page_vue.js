if (document.getElementById('category_product')) {
    const app = new Vue({
        el: "#category_product",
        store : window.vue_store,
        // store,
        created: function(){
            // console.log(window.vue_store);
            this.fetch_product_list();
        },
        data: function(){
            return {
                name: 'test',
                page: 'category'
            }
        },
        methods: {
            ...window.mapActions([
                'fetch_product_list'
            ]),
        },
        computed: {
            ...window.mapGetters([
                'get_product_list',
                'get_test_variable'
            ]),
        }
    });
}
