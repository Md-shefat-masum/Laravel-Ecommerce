<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    public function store_file(Request $request)
    {
        if($request->hasFile('fm_file')){
            $path = Storage::put('uploads/file_manager',$request->file('fm_file'));
            $image = new Image();
            $image->name = $path;
            $image->creator = Auth::user()->id;
            $image->created_at = Carbon::now()->toDateTimeString();
            $image->save();
            $image->slug = $image->id.uniqid(10);
            $image->save();
            return ($image);
        }else{
            return 0;
        }

    }

    public function get_files()
    {
        $images = Image::latest()->where('status',1)->get();
        return view('admin.product.components.file_manager_image_body',compact('images'));
    }

    public function delete_file(Image $image)
    {
        if(explode('/',$image->name)[0] == 'uploads'){
            if(file_exists(public_path().'/'.$image->name)){
                unlink(public_path().'/'.$image->name);
                $image->delete();
            }
        }
        return 'success';
    }
}
