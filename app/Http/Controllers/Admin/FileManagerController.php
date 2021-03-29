<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as interImage;

class FileManagerController extends Controller
{
    public function store_file(Request $request)
    {
        if ($request->hasFile('fm_file')) {
            // $path = Storage::put('uploads/file_manager',$request->file('fm_file'));
            $file = $request->file('fm_file');
            // dd($file);
            $extension = $file->getClientOriginalExtension();
            $temp_name  = uniqid(10) . time();

            $image = interImage::make($file);

            // main image
            $path = 'uploads/file_manager/fm_image_main_' . $temp_name . '.' . $extension;
            $image->save($path);
            $this->image_save_to_db($path);

            // rectangle
            $image->fit(848, 438, function ($constraint) {
                $constraint->aspectRatio();
            });
            $path = 'uploads/file_manager/fm_image_848x438_' . $temp_name . '.' . $extension;
            $image->save($path);
            $this->image_save_to_db($path);

            // square
            $canvas = interImage::canvas(400, 400);
            $image->fit(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            });
            $canvas->insert($image);
            $canvas->insert(interImage::make(public_path('icon.png')), 'bottom-right');

            $path = 'uploads/file_manager/fm_image_400x400_' . $temp_name . '.' . $extension;
            $canvas->save($path);
            $this->image_save_to_db($path);

            return ($image);
        } else {
            return 0;
        }
    }

    public function image_save_to_db($path)
    {
        $image = new Image();
        $image->name = $path;
        $image->creator = Auth::user()->id;
        $image->created_at = Carbon::now()->toDateTimeString();
        $image->save();
        $image->slug = $image->id . uniqid(10);
        $image->save();

        return 0;
    }

    public function get_files()
    {
        $images = Image::latest()->where('status', 1)->get();
        return view('admin.product.components.file_manager_image_body', compact('images'));
    }

    public function delete_file(Image $image)
    {
        if (explode('/', $image->name)[0] == 'uploads') {
            if (file_exists(public_path() . '/' . $image->name)) {
                unlink(public_path() . '/' . $image->name);
                $image->delete();
            }
        }
        return 'success';
    }
}
