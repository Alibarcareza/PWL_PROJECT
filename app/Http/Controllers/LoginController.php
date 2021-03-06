<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $remember_me = $request->remember ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
            
            return view('home');
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return view('home');
    }
}