<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function registerpost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $register=new User;
        $register->name=$request->name;
        $register->email=$request->email;
        $register->password = Hash::make($request->password);
        
        $register->save();
       

        return redirect()->route('login')->with('success', 'User registered successfully.');
    }
}
