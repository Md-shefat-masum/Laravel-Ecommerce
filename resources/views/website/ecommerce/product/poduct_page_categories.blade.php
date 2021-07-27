<div class="categories-area box-shadow bg-fff">
    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
        <i class="fa fa-bookmark icon bg-4"></i>
        <h3>categories</h3>
    </div>
    <div class="shop-categories-menu p-20">
        <ul>
            <li v-for="main_category in categories" :key="main_category.id">
                <a href="#" @click.prevent="load_product('/products/category/'+main_category.slug)">@{{main_category.name}}</a>
                <span> (@{{main_category.related_products_count}})</span>
                <span :class="'opener-'+main_category.id +' fa fa-plus pull-right toggle_category'"></span>
                <ul>
                    <li v-for="category in main_category.related_categories" :key="category.id">
                        <a href="#"  @click.prevent="load_product('/products/category/'+main_category.slug+'/'+category.slug)">@{{ category.name }}</a>
                        <span> (@{{category.related_products_count}})</span>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>


