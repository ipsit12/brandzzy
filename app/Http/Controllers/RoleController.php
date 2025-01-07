<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role; 

class RoleController extends Controller
{
    public function rolepost(Request $request)
    {
        
        $request->validate([
            'role' => 'required|string|max:255',
        ]);

        
        $role = new Role();
        $role->role = $request->role;
        $role->save();

      
        return redirect()->back()->with('success', 'Role added successfully!');
    }
}
