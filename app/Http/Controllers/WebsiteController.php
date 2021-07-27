<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function main_category_products($main_category)
    {
        return view('website.ecommerce.products');
    }

    public function category_products($main_category)
    {
        return view('website.ecommerce.products');
    }

    public function sub_category_products($main_category)
    {
        return view('website.ecommerce.products');
    }

    public $main_category_id, $category_id;

    public function main_category_products_json(Request $request, $main_category)
    {
        $main_category = MainCategory::where('slug', $main_category)->first();

        if ($main_category) {
            $this->main_category_id = $main_category->id;
            if ($request->has('range')) {
                $range = str_replace('$', '', $request->range);
                $range = explode('-', $range);
                $min = (int) $range[0];
                $max = (int) $range[1];
                $products = $main_category->related_products()->whereBetween('price', [$min, $max])->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->orderBy('price', 'DESC')->paginate(16);
            }
            else if($request->has('size')){
                $this->size = (int) $request->size;
                $products = $main_category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('product_size')
                        ->whereRaw('product_size.product_id = products.id')
                        ->where('product_size.size_id',$this->size);
                })->orderBy('id', 'DESC')->paginate(16);

            }
            else if($request->has('color')){
                $this->color = (int) $request->color;
                $products = $main_category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('color_product')
                        ->whereRaw('color_product.product_id = products.id')
                        ->where('color_product.color_id',$this->color);
                })->orderBy('id', 'DESC')->paginate(16);
            }
            else {
                $products = $main_category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->orderBy('id', 'DESC')->paginate(8);

                $sizes = Size::where('status',1)->select(['name','id'])->get();
                foreach ($sizes as $key => $item) {
                    $count = $item->related_products()->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('main_category_product')
                                        ->whereRaw('main_category_product.product_id = products.id')
                                        ->where('main_category_product.main_category_id',$this->main_category_id);
                                })->count();
                    $item->product_amount = $count;
                }

                $colors = Color::where('status',1)->select(['name','id'])->get();
                foreach ($colors as $key => $item) {
                    $count = $item->related_products()->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('main_category_product')
                                        ->whereRaw('main_category_product.product_id = products.id')
                                        ->where('main_category_product.main_category_id',$this->main_category_id);
                                })->count();
                    $item->product_amount = $count;
                }

                return response()->json([
                    'products' => $products,
                    'sizes' => $sizes,
                    'colors' => $colors,
                ]);
            }
            return $products;
        } else {
            return [];
        }
    }

    public function category_products_json(Request $request, $main_category, $category)
    {
        $main_category = MainCategory::where('slug', $main_category)->first();
        $category = Category::where('slug', $category)->first();
        // dd($category->related_products()->get());


        if ($category) {
            $this->category_id = $category->id;

            if ($request->has('range')) {
                $range = str_replace('$', '', $request->range);
                $range = explode('-', $range);
                $min = (int) $range[0];
                $max = (int) $range[1];
                $products = $category->related_products()->whereBetween('price', [$min, $max])->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->orderBy('price', 'DESC')->paginate(16);
            }
            else if($request->has('size')){
                $this->size = (int) $request->size;
                $products = $category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('product_size')
                        ->whereRaw('product_size.product_id = products.id')
                        ->where('product_size.size_id',$this->size);
                })->orderBy('id', 'DESC')->paginate(16);
            }
            else if($request->has('color')){
                $this->color = (int) $request->color;
                $products = $category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('color_product')
                        ->whereRaw('color_product.product_id = products.id')
                        ->where('color_product.color_id',$this->color);
                })->orderBy('id', 'DESC')->paginate(16);
            }
            else {
                $products = $category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->orderBy('id', 'DESC')->paginate(6);

                $sizes = Size::where('status',1)->select(['name','id'])->get();
                foreach ($sizes as $key => $item) {
                    $count = $item->related_products()->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('category_product')
                                        ->whereRaw('category_product.product_id = products.id')
                                        ->where('category_product.category_id',$this->category_id);
                                })->count();
                    $item->product_amount = $count;
                }

                $colors = Color::where('status',1)->select(['name','id'])->get();
                foreach ($colors as $key => $item) {
                    $count = $item->related_products()->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('category_product')
                                        ->whereRaw('category_product.product_id = products.id')
                                        ->where('category_product.category_id',$this->category_id);
                                })->count();
                    $item->product_amount = $count;
                }

                return response()->json([
                    'products' => $products,
                    'sizes' => $sizes,
                    'colors' => $colors,
                ]);
            }

            return $products;
        } else {
            return [];
        }
    }

    public function sub_category_products_json(Request $request, $main_category, $category, $sub_category)
    {
        $main_category = MainCategory::where('slug', $main_category)->first();
        $category = Category::where('slug', $category)->first();
        $sub_category = SubCategory::where('slug', $sub_category)->first();
        // dd($category->related_products()->get());
        if ($sub_category) {
            if ($request->has('range')) {
                $range = str_replace('$', '', $request->range);
                $range = explode('-', $range);
                $min = (int) $range[0];
                $max = (int) $range[1];
                $products = $sub_category->related_products()->whereBetween('price', [$min, $max])->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->orderBy('price', 'DESC')->paginate(16);
            }
            else if($request->has('size')){
                $this->size = (int) $request->size;
                $products = $main_category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('product_size')
                        ->whereRaw('product_size.product_id = products.id')
                        ->where('product_size.size_id',$this->size);
                })->orderBy('id', 'DESC')->paginate(16);
            }
            else {
                $products = $sub_category->related_products()->with([
                    'category',
                    'sub_category',
                    'main_category',
                    'color',
                    'image',
                    'publication',
                    'size',
                    'unit',
                    'writer',
                ])->orderBy('id', 'DESC')->paginate(16);
            }
            return $products;
        } else {
            return (object)[];
        }
    }


    public function latest_product_json(Request $request)
    {
        $collection = Product::active()
            ->with([
                'category',
                'sub_category',
                'main_category',
                'color', 'image',
                'publication',
                'size', 'unit',
                'vendor',
                'writer',
            ])
            ->orderBy('id', 'DESC')->paginate(8);
        return $collection;
    }

    public function show_product_json(Product $product)
    {
        $product['discount_price'] = HelperController::discount_price($product->price, $product->discount, $product->expiration_date);
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

        // echo $product->discount_price;
        return $product;
    }

    public function get_product_related_info_json($product)
    {
        $product = Product::where('id', $product)->select('id', 'price', 'discount', 'expiration_date')->first();
        $product['discount_price'] = HelperController::discount_price($product->price, $product->discount, $product->expiration_date);

        return $product;
    }

    public function get_min_max_price_json()
    {
        $max_price = Product::orderBy('price', 'DESC')->first();
        $min_price = Product::orderBy('price', 'ASC')->first();

        return response()->json([
            'max_price' => $max_price->price,
            'min_price' => $min_price->price,
        ]);
    }

    public function category_wise_product_json($main_category_slug,$category_slug)
    {
        dd($main_category_slug, $category_slug);
    }

    public function get_all_category_json()
    {
        $category = MainCategory::where('status', 1)->with('related_categories')->withCount('related_products')->get();
        return $category;
    }


    public function details(Product $product)
    {
        $product['discount_price'] = HelperController::discount_price($product->price, $product->discount, $product->expiration_date);
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

        return view('website.ecommerce.product_details', compact('product'));
    }

    public function cart()
    {
        return view('website.ecommerce.cart');
    }

    public function checkout()
    {
        return view('website.ecommerce.checkout');
    }

    public function checkout_confirm()
    {
        \Stripe\Stripe::setApiKey('sk_test_51ImMYLL8CFL5l5Nj8ABACoXjon8HlNVSWRL2LiTNSCw2QBQeDusGYoskA0895tgPd8zVPwg2Y0jFxsZkYSjqCivj003dUkfPMc');
        header('Content-Type: application/json');
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';
        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => 2000,
                    'product_data' => [
                        'name' => 'Stubborn Attachments',
                        'images' => ["https://i.imgur.com/EHyR2nP.png"]
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/checkout_success',
            'cancel_url' => $YOUR_DOMAIN . '/checkout',
        ]);
        echo json_encode(['id' => $checkout_session->id]);
    }

    public function checkout_success()
    {
        return view('website.ecommerce.invoice');
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
