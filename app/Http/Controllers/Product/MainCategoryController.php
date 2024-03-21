<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = MainCategory::where('status',1)->latest()->get();
        $products = Product::join('main_category_product','products.id','=','main_category_product.product_id')
                    ->join('main_categories','main_categories.id','=','main_category_product.main_category_id')
                    ->get(['products.id','main_categories.name']);
        $prod_name=[];
        foreach($products as $prod){
            $prod_name[]=$prod->name;
        }
        return view('admin.product.main_category.index',compact('collection','prod_name','products'));
    }

    public function get_main_category_json()
    {
        $collection = MainCategory::where('status',1)->latest()->get();
        $options = '';
        foreach ($collection as $key => $value) {
            $options .= "<option ".($key==0?' selected':'')." value='".$value->id."'>".$value->name."</option>";
        }
        return $options;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.main_category.create');
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
            'name' => ['required'],
            'icon' => ['required'],
        ]);
        $main_category = MainCategory::create($request->except('icon'));

        if($request->hasFile('icon')){
            $main_category->icon = Storage::put('uploads/maincategory',$request->file('icon'));
            $main_category->save();
        }

        $main_category->slug = Str::slug($main_category->name);
        $main_category->creator = Auth::user()->id;
        $main_category->save();

        return response()->json([
            'html' => "<option value='".$main_category->id."'>".$main_category->name."</option>",
            'value' => $main_category->id,
        ]);
        // return redirect()->back()->with('success','data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mainCategory=MainCategory::find($id);
        return view('admin.product.main_category.view',compact('mainCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCategory $main_category)
    {
        return view('admin.product.main_category.edit',compact('main_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainCategory $main_category)
    {
        $this->validate($request,[
            'name' => ['required']
        ]);

        $main_category->update($request->except('icon'));

        if($request->hasFile('icon')){
            $main_category->icon = Storage::put('uploads/maincategory',$request->file('icon'));
            $main_category->save();
        }

        $main_category->slug = Str::slug($main_category->name);
        $main_category->creator = Auth::user()->id;
        $main_category->save();

        return 'success';
        // return redirect()->back()->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCategory $main_category)
    {
        $main_category->delete();
        return 'success';
    }
}
