<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\MainCategory;
use App\Models\Publication;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Vendor;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::where('status',1)->get();
        $colors = Color::where('status',1)->get();
        $sizes = Size::where('status',1)->get();
        $units = Unit::where('status',1)->get();
        $writers = Writer::where('status',1)->get();
        $publications = Publication::where('status',1)->get();
        $vendors = Vendor::where('status',1)->get();

        $maincategories = MainCategory::where('status',1)->get();
        $latest_maincategory_id = MainCategory::where('status',1)->first()->id;

        $categories = Category::where('status',1)->where('main_category_id',$latest_maincategory_id)->latest()->get();
        $latest_category_id = Category::where('status',1)->where('main_category_id',$latest_maincategory_id)->first()->id;

        $sub_categories = SubCategory::where('status',1)
                            ->where('main_category_id',$latest_maincategory_id)
                            ->where('category_id',$latest_category_id)
                            ->latest()->get();

        return view('admin.product.create',compact('brands','colors','sizes',
                                            'units','maincategories','categories',
                                            'sub_categories','writers','publications',
                                            'vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'product_name' => ['required'],
            'brand' => ['required'],
            'product_main_category_id' => ['required'],
            'product_category_id' => ['required'],
            'product_sub_category_id' => ['required'],
            'color_id' => ['required'],
            'size_id' => ['required'],
            'unit_id' => ['required'],
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.product.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
