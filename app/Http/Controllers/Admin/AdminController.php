<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }



    // blank page functions
    public function blade_index()
    {
        return view('admin.blank.index');
    }
    public function blade_create()
    {
        return view('admin.blank.create');
    }
    public function blade_view()
    {
        return view('admin.blank.view');
    }
}
