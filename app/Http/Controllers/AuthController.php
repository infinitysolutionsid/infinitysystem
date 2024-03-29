<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard')->with('sukses', 'Login in...');
        }
        return redirect('/signin')->with('gagal', 'Username/password is incorrect...');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/signin');
    }
}
