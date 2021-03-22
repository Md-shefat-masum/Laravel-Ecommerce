<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $collection = User::active()->with('role_information')->get();
        return view('admin.user.index',['collection'=>$collection]);
    }

    public function view($id)
    {
        // $user = User::where('id',$id)->first();
        $user = User::find($id);

        return view('admin.user.view',compact('user'));
    }

    public function create()
    {
        $user_roles = UserRole::orderBy('serial','DESC')->get();
        return view('admin.user.create',compact('user_roles'));
    }

    public function edit($id)
    {
        $user_roles = UserRole::orderBy('serial','DESC')->get();
        $user = User::find($id);
        return view('admin.user.edit',compact('user_roles','user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
            'image' => ['required','image'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->creator = Auth::user()->id;
        $user->save();

        $user->slug = $user->id.uniqid(10);
        $user->save();

        if($request->hasFile('image')){
            $user->photo = Storage::put('uploads/user',$request->file('image'));
            $user->save();
        }

        // dd($request->all());
        //function_body
        return redirect()->route('admin_user_view',$user->id);
    }

    public function update(Request $request)
    {

        $this->validate($request,[
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
        ]);

        $user = User::find($request->id);

        if($user->email != $request->email){
            $this->validate($request,[
                'email' => ['required','unique:users'],
            ]);
            $user->email = $request->email;
        }

        if($user->username != $request->username){
            $this->validate($request,[
                'username' => ['required','unique:users'],
            ]);
            $user->username = $request->username;
        }
        if($user->phone != $request->phone){
            $this->validate($request,[
                'phone' => ['required','unique:users'],
            ]);
            $user->phone = $request->phone;
        }

        if( !is_null($request->old_password) && !is_null($request->password) && !is_null($request->password_confirmation)){
            $this->validate($request,[
                'password' => ['string', 'min:8', 'confirmed'],
            ]);


            if(Hash::check($request->old_password, $user->password)){
                $user->password = Hash::make($request->password);
            }else{
                if($request->ajax()){
                    $validator = Validator::make([], []);
                    return $validator->getMessageBag()->add('old_password', 'old password wrong');
                }
                return redirect()->back()->withErrors('old_password','old password wrong');
            }
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->role_id = $request->role_id;
        $user->updated_at = Carbon::now()->toDateTimeString();
        $user->creator = Auth::user()->id;
        $user->save();

        if($request->hasFile('image')){
            if(!file_exists(public_path().'/'.$user->photo)){
                unlink(public_path().'/'.$user->photo);
            }
            $user->photo = Storage::put('uploads/user',$request->file('image'));
            $user->save();
        }

        // dd($request->all());
        //function_body
        // return redirect()->route('admin_user_view',$user->id);
        // return redirect()->back()->with('success','data updated');
        return $user;
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->status = 0;
        $user->creator = Auth::user()->id;
        $user->save();

        return redirect()->back()->with('success','data deactivated');
    }

    public function test(Request $request)
    {
        //function_body
        return $request->all();
    }

}
