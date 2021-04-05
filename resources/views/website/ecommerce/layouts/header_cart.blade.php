<div class="top-cart home3-top-cart home3-bg bg-5">
    <div class="cart">
        <i class="icofont icofont-bag"></i>
        <a href="#">
            @{{cart_products.length}} Items - <strong>$ @{{cart_total_price}} </strong>
            <i class="icofont icofont-rounded-down"></i>
        </a>
    </div>
    <ul>
        <li>
            <div class="cart-items" >
                <div class="cart-item bb mt-10" v-for="(cart_product, index) in cart_products">
                    <div class="cart-img">
                        <a href="#">
                            <img :src="'/'+cart_product.image" alt="" />
                        </a>
                    </div>
                    <div class="cart-content">
                        <a href="#">@{{cart_product.name}}</a>
                        <a href="#" @click="remove_cart(cart_product)" class="pull-right cart-remove">
                            <i class="fa fa-times"></i>
                        </a>
                        <span>@{{cart_product.qty}} x @{{'$'+cart_product.price}}</span>
                    </div>
                </div>
                <div class="total mt-10">
                    <span class="pull-left">Subtotal:</span>
                    <span class="pull-right">$ @{{cart_total_price}}</span>
                </div>
                <div class="cart-btn mb-20">
                    <a href="#">view cart</a>
                    <a href="#">Checkout</a>
                </div>
            </div>
        </li>
    </ul>
</div>
