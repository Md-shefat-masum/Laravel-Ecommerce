<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleController extends Controller
{
    public function index()
    {
        $collection = UserRole::orderBy('serial','ASC')->get();
        return view('admin.user_role.index',compact('collection'));
    }

    public function update(Request $request)
    {
        $user_role = UserRole::find($request->id);
        $user_role->name = $request->name;
        $user_role->serial = $request->serial;
        $user_role->creator = Auth::user()->id;
        $user_role->updated_at = Carbon::now()->toDateTimeString();
        $user_role->save();

        return redirect()->back()->with('success','data updated');
    }
}
