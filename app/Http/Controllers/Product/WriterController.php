<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Writer::where('status',1)->latest()->paginate(10);
        return view('admin.product.writer.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.writer.create');
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
            'description' => ['required'],
            'image' => ['required'],
        ]);

        $writer = Writer::create($request->except('image'));

        if($request->hasFile('image')){
            $writer->image = Storage::put('uploads/writer',$request->file('image'));
            $writer->save();
        }

        $writer->slug = Str::slug($writer->name);
        $writer->creator = Auth::user()->id;
        $writer->save();

        return response()->json([
            'html' => "<option value='".$writer->id."'>".$writer->name."</option>",
            'value' => $writer->id,
        ]);
        // return 'success';
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Writer $writer)
    {
        return view('admin.product.writer.edit',compact('writer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Writer $writer)
    {
        $this->validate($request,[
            'name' => ['required'],
            'description' => ['required']
        ]);

        $writer->update($request->except('image'));

        if($request->hasFile('image')){
            $writer->logo = Storage::put('uploads/writer',$request->file('image'));
            $writer->save();
        }

        $writer->slug = Str::slug($writer->name);
        $writer->creator = Auth::user()->id;
        $writer->save();

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writer $writer)
    {
        $writer->delete();
        return 'success';
    }
}
