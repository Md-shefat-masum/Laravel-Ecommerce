<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Publication;
use App\Models\Size;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Vendor;
use App\Models\Writer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Product::active()->with(['category', 'sub_category', 'main_category', 'color', 'image', 'publication', 'size', 'unit', 'vendor', 'writer'])
                                ->orderBy('id','DESC')->paginate(10);
        return view('admin.product.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();
        $sizes = Size::where('status', 1)->get();
        $units = Unit::where('status', 1)->get();
        $writers = Writer::where('status', 1)->get();
        $publications = Publication::where('status', 1)->get();
        $vendors = Vendor::where('status', 1)->get();
        $status = Status::where('status', 1)->get();

        $maincategories = MainCategory::where('status', 1)->get();
        $latest_maincategory_id = MainCategory::where('status', 1)->first()->id;

        $categories = Category::where('status', 1)->where('main_category_id', $latest_maincategory_id)->latest()->get();
        $latest_category_id = Category::where('status', 1)->where('main_category_id', $latest_maincategory_id)->first()->id;

        $sub_categories = SubCategory::where('status', 1)
            ->where('main_category_id', $latest_maincategory_id)
            ->where('category_id', $latest_category_id)
            ->latest()->get();

        return view('admin.product.create', compact(
            'brands',
            'colors',
            'sizes',
            'units',
            'maincategories',
            'categories',
            'sub_categories',
            'writers',
            'publications',
            'vendors',
            'status'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => ['required'],
            'brand' => ['required'],
            'product_main_category_id' => ['required'],
            'product_category_id' => ['required'],
            'product_sub_category_id' => ['required'],
            'color_id' => ['required'],
            'size_id' => ['required'],
            'unit_id' => ['required'],
            'vendor_id' => ['required'],
            'price' => ['required'],
            'discount' => ['required'],
            'expiration_date' => ['required'],
            'stock' => ['required'],
            'alert_quantity' => ['required'],
            'description' => ['required'],
            'features' => ['required'],
            'thumb_image' => ['required'],
            'related_images' => ['required'],
            'status' => ['required'],
        ]);

        $product = new Product();
        $product->name = $request->product_name;
        $product->brand_id = $request->brand;
        $product->code = '';
        $product->tax = $request->tax;
        $product->price = $request->price;
        $product->sku = '';
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->expiration_date = $request->expiration_date;
        $product->minimum_amount = $request->alert_quantity;
        $product->free_delivery = $request->free_delivery;
        $product->description = $request->description;
        $product->features = $request->features;
        $product->thumb_image = $request->thumb_image;
        $product->status = $request->status;
        $product->creator = Auth::user()->id;
        $product->save();

        $product->code = 'ECO-' . Carbon::now()->year . Carbon::now()->month . $product->id . Carbon::now()->day;
        $product->slug = Str::slug($product->name);

        $product->save();

        if ($request->has('product_main_category_id')) {
            $product->main_category()->attach($request->product_main_category_id);
        }

        if ($request->has('product_category_id')) {
            $product->category()->attach($request->product_category_id);
        }

        if ($request->has('product_sub_category_id')) {
            $product->sub_category()->attach($request->product_sub_category_id);
        }

        if ($request->has('writer_id')) {
            $product->writer()->attach($request->writer_id);
        }

        if ($request->has('publication_id')) {
            $product->publication()->attach($request->publication_id);
        }

        if ($request->has('color_id')) {
            $product->color()->attach($request->color_id);
        }

        if ($request->has('size_id')) {
            $product->size()->attach($request->size_id);
        }

        if ($request->has('unit_id')) {
            $product->unit()->attach($request->unit_id);
        }

        if ($request->has('related_images')) {
            $product->image()->attach(json_decode($request->related_images));
        }

        if ($request->has('vendor_id')) {
            $product->vendor()->attach($request->vendor_id);
        }
        return Product::with(['category', 'sub_category', 'main_category', 'color', 'image', 'publication', 'size', 'unit', 'vendor', 'writer'])
                        ->latest()->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.view',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // dd($product->minimum_amount);
        $brands = Brand::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();
        $sizes = Size::where('status', 1)->get();
        $units = Unit::where('status', 1)->get();
        $writers = Writer::where('status', 1)->get();
        $publications = Publication::where('status', 1)->get();
        $vendors = Vendor::where('status', 1)->get();
        $status = Status::where('status', 1)->get();

        $maincategories = MainCategory::where('status', 1)->get();
        $latest_maincategory_id = $product->main_category()->first() ? $product->main_category()->first()->id : MainCategory::where('status', 1)->first()->id;

        $categories = Category::where('status', 1)->where('main_category_id', $latest_maincategory_id)->latest()->get();
        $latest_category_id = Category::where('status', 1)->where('main_category_id', $latest_maincategory_id)->first()->id;

        $sub_categories = SubCategory::where('status', 1)
            ->where('main_category_id', $latest_maincategory_id)
            ->where('category_id', $latest_category_id)
            ->latest()->get();

        return view('admin.product.edit',compact(
            'product',
            'brands',
            'colors',
            'sizes',
            'units',
            'maincategories',
            'categories',
            'sub_categories',
            'writers',
            'publications',
            'vendors',
            'status'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'product_name' => ['required'],
            'brand' => ['required'],
            'product_main_category_id' => ['required'],
            'product_category_id' => ['required'],
            'product_sub_category_id' => ['required'],
            'color_id' => ['required'],
            'size_id' => ['required'],
            'unit_id' => ['required'],
            'vendor_id' => ['required'],
            'price' => ['required'],
            'discount' => ['required'],
            'expiration_date' => ['required'],
            'stock' => ['required'],
            'alert_quantity' => ['required'],
            'description' => ['required'],
            'features' => ['required'],
            'thumb_image' => ['required'],
            'related_images' => ['required'],
            'status' => ['required'],
        ]);

        $product->name = $request->product_name;
        $product->brand_id = $request->brand;
        $product->tax = $request->tax;
        $product->price = $request->price;
        $product->sku = '';
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->expiration_date = $request->expiration_date;
        $product->minimum_amount = $request->alert_quantity;
        $product->free_delivery = $request->free_delivery;
        $product->description = $request->description;
        $product->features = $request->features;
        $product->thumb_image = $request->thumb_image;
        $product->status = $request->status;
        $product->creator = Auth::user()->id;
        $product->save();

        if ($request->has('product_main_category_id')) {
            $product->main_category()->sync($request->product_main_category_id);
        }

        if ($request->has('product_category_id')) {
            $product->category()->sync($request->product_category_id);
        }

        if ($request->has('product_sub_category_id')) {
            $product->sub_category()->sync($request->product_sub_category_id);
        }

        if ($request->has('writer_id')) {
            $product->writer()->sync($request->writer_id);
        }

        if ($request->has('publication_id')) {
            $product->publication()->sync($request->publication_id);
        }

        if ($request->has('color_id')) {
            $product->color()->sync($request->color_id);
        }

        if ($request->has('size_id')) {
            $product->size()->sync($request->size_id);
        }

        if ($request->has('unit_id')) {
            $product->unit()->sync($request->unit_id);
        }

        if ($request->has('related_images')) {
            $product->image()->sync(json_decode($request->related_images));
        }

        if ($request->has('vendor_id')) {
            $product->vendor()->sync($request->vendor_id);
        }

        return Product::where('id',$product->id)->with(['category', 'sub_category', 'main_category', 'color', 'image', 'publication', 'size', 'unit', 'vendor', 'writer'])
                        ->latest()->first();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->status = 0;
        $product->save();
        return 'success';
    }
}
