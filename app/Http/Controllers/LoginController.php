<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function loginpost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $register=DB::select("select email,password from users");
        if (Auth::attempt($credentials)) {
            // dd($credentials);
            Session::put('name', Auth::user()->email);
            return redirect('/')->with('success', 'Login Successfully !!');
        } else {
            return redirect('/login')->withErrors(['email' => 'Invalid credentials.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
