<template>
    <div class="product-wrapper bl" >
        <div class="product-img">
            <a href="#">
                <img :src="'/'+product.thumb_image" alt="" class="primary" />
                <img :src="product.image[0] && '/'+product.image[0].name" alt="" class="secondary" />
            </a>
            <div class="product-icon c-fff home3-hover-bg">
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Accumsan eli"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-content home3-hover">
            <h3><a href="#">{{product.name}}</a></h3>
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <span>$ {{product.price}}</span>
            <button class="btn btn-dark btn-sm mt-4" type="button" @click="add_product_to_pos_list(product)">add to list</button>
        </div>
    </div>
</template>

<script>
export default {
    props:[
            'product',
            'add_product_to_pos_list'
        ]
}
</script>

<style>

</style>
