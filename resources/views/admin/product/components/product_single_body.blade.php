<div class="col admin_product_individual_body">
    <div class="card position-relative">
        <img src="/{{ $product->thumb_image }}" class="card-img-top" alt="product image {{ $product->thumb_image }}" />
        <div class="">
            <div class="product-discount"><span class="">-{{ $product->discount }}%</span></div>
        </div>
        <div class="card-body">
            <h6 class="card-title cursor-pointer d-block">{{ $product->name }}</h6>
            <div class="clearfix d-flex justify-content-between">
                <p class="mb-0 "><strong>134</strong> Sales</p>
                <p class="mb-0  fw-bold">
                    <span class="me-2 text-decoration-line-through"><del>${{ $product->price }}</del></span>
                    <span class="text-white">${{ $product->discount_price }}</span>
                </p>
            </div>
            <div class="d-flex align-items-center mt-3 fs-6">
                <div class="cursor-pointer">
                    <i class="fa fa-star text-white"></i>
                    <i class="fa fa-star text-white"></i>
                    <i class="fa fa-star text-white"></i>
                    <i class="fa fa-star text-light-4"></i>
                    <i class="fa fa-star text-light-4"></i>
                </div>
                <p class="mb-0 ms-auto">4.2(182)</p>
            </div>
        </div>
        <div class="card-footer">
            <ul class="d-flex flex-wrap justify-content-end">
                <li><a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-success ml-2">Edit</a></li>
                <li><a href="{{ route('product.show',$product->id) }}" class="btn btn-sm btn-warning ml-2">View</a></li>
                <li><a href="{{ route('product.destroy',$product->id) }}" data-parent=".admin_product_individual_body" class="btn delete_btn btn-sm btn-danger ml-2">Delete</a></li>
            </ul>
        </div>
    </div>
</div>
