<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role; 
use App\Models\Permission; 
use App\Models\Admin; 
class BackendController extends Controller
{
    public function role()
    {
        $roles = Role::all(); 
        return view('backend.role',compact('roles'));
    }

    public function user()
    {
        $admins= Admin::all();
        $roles = Role::all(); 
        $permissions = Permission::all(); 
        return view('backend.user', compact('roles', 'permissions','admins'));
    }

    public function permission()
    {
        $permissions = Permission::all(); 
        return view('backend.permission', compact( 'permissions'));
    }
}
