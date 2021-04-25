<nav>
    <ul>
        <li class="active2"><a href="/">Home</a></li>
        <li><a href="{{ route('website_products') }}">product</a></li>
        <li><a href="{{ route('website_product_details',rand(1,20)) }}">product details</a></li>
        <li><a href="{{ route('website_cart') }}">cart</a></li>
        <li><a href="{{ route('website_wishlist') }}">wishlist</a></li>
        <li><a href="{{ route('website_checkout') }}">checkout</a></li>
        <li><a class="menu-contact" href="{{ route('website_contact') }}">contact us</a></li>
    </ul>
</nav>
