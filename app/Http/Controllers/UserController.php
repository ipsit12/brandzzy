<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class UserController extends Controller
{
    public function userpost(Request $request){
        $admin=new Admin;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->phone=$request->phone;
        $admin->address=$request->address;
        $admin->role=$request->role;
        $admin->permission=$request->permission;
        $admin->save();
        return redirect()->back()->with('success', 'Role added successfully!');
    }
    public function userstatus(Request $request ,$id){
        $request->validate([
            'status' => 'required|boolean', 
        ]);
         $admin=Admin::find($id);
         if($admin){
            $admin->status=$request->status;
            $admin->save();
         }
        return redirect()->back()->with('success', 'Role added successfully!');
    }
}    
