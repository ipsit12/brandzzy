<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
class PermissionController extends Controller
{
    public function permissionpost(Request $request){
        $permission = new Permission;
        $permission->permission=$request->permission;
        $permission->save();
        return redirect()->back()->with('success', 'Role added successfully!');
    }
}
