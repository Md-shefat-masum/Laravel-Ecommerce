<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.ecommerce.index');
    }

    public function products()
    {
        return view('website.ecommerce.products');
    }

    public function latest_product_json(Request $request)
    {
        $collection = Product::active()->with(['category', 'sub_category', 'main_category', 'color', 'image', 'publication', 'size', 'unit', 'vendor', 'writer'])
                                ->orderBy('id','DESC')->paginate(8);
        return $collection;
    }

    public function show_product_json(Product $product)
    {
        $product['discount_price'] = HelperController::discount_price($product->price,$product->discount);
        $product['image'] = $product->image()->get();
        $product['category'] = $product->category()->get();
        $product['sub_category'] = $product->sub_category()->get();
        $product['main_category'] = $product->main_category()->get();
        $product['color'] = $product->color()->get();
        $product['publication'] = $product->publication()->get();
        $product['size'] = $product->size()->get();
        $product['unit'] = $product->unit()->get();
        $product['vendor'] = $product->vendor()->get();
        $product['writer'] = $product->writer()->get();
        return $product;
    }

    public function details()
    {
        $product = Product::find(1);
        $product['discount_price'] = HelperController::discount_price($product->price,$product->discount);
        $product['image'] = $product->image()->get();
        $product['category'] = $product->category()->get();
        $product['sub_category'] = $product->sub_category()->get();
        $product['main_category'] = $product->main_category()->get();
        $product['color'] = $product->color()->get();
        $product['publication'] = $product->publication()->get();
        $product['size'] = $product->size()->get();
        $product['unit'] = $product->unit()->get();
        $product['vendor'] = $product->vendor()->get();
        $product['writer'] = $product->writer()->get();

        return view('website.ecommerce.product_details',compact('product'));
    }

    public function cart()
    {
        return view('website.ecommerce.cart');
    }

    public function checkout()
    {
        return view('website.ecommerce.checkout');
    }

    public function wishlist()
    {
        return view('website.ecommerce.wishlist');
    }

    public function contact()
    {
        return view('website.ecommerce.contact');
    }

    public function vue()
    {
        return view('learn-vue');
    }
}
