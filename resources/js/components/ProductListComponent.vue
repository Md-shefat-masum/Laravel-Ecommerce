<template>
    <div class="product box-shadow bg-fff mb-4">
        <div class="product-title home3-bg text-uppercase d-flex flex-wrap justify-content-between">
            <span>
                <i class="fa fa-paper-plane-o icon home3-bg2"></i>
                <h3>New Products</h3>
            </span>
            <div class="product_list_nav">
                <!-- <ul class="nav d-flex flex-wrap justify-content-end">
                    <li><a href="#" class="btn btn-warning btn-sm">Prev</a></li>
                    <li><a href="#" class="btn btn-warning btn-sm">Next</a></li>
                </ul> -->
                <pagination :data="collection" :limit="-1" @pagination-change-page="getResults">
                    <span slot="prev-nav">&lt; Previous</span>
                    <span slot="next-nav">Next &gt;</span>
                </pagination>
                <!-- <pagination :data="collection" @pagination-change-page="getResults"></pagination> -->
            </div>
        </div>
        <div class="left left-right-angle">
            <div class="row">
                <div class="col-md-3" v-for="(product,index) in collection.data" :key="index">
                    <div class="product-wrapper bl">
                        <div class="product-img">
                            <a href="#">
                                <img :src="product.thumb_image" alt="" class="primary">
                                <img :src="product.image[0].name" alt="" class="secondary">
                            </a>
                            <div class="product-icon c-fff home3-hover-bg">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" @click="viewProduct(product)" data-original-title="View Product"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content home3-hover">
                            <h3><a href="#">{{ product.name }}</a></h3>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>$ {{ product.price }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade"  id="productViewModal" style="z-index: 99999999999;" tabindex="-1" aria-labelledby="productViewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productViewModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <productDetailsComponentVue :product="product"></productDetailsComponentVue>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import productDetailsComponentVue from './productDetailsComponent.vue';
    // import NewFooter from 'component'
    export default {
        props: ['url','url_get'],
        components: {
            productDetailsComponentVue,
        },
        name: 'ProductList',
        mounted: () => {
            console.log('Component mounted.');
        },
        created: function () {
            console.log(this.url);
            this.getResults();
        },
        data: ()=>{
            return{
                product : [],
                collection : {},
                renderKey: Math.random(),
            }
        },
        methods: {
            getResults: function(page = 1){
                axios.get(this.url+'?page=' + page)
                    .then(response => {
                        this.collection = response.data;
                    });
                // toaster('success',this.url);
            },
            viewProduct: function(product){
                this.renderKey = Math.random();
                axios.get(this.url_get+'/'+product.id)
                    .then((res)=>{
                        this.product = res.data;
                    })
                console.log(product);
                $('#productViewModal').modal('show');
            },
        }
    }
</script>
