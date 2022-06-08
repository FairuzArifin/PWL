<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        return view('login.login', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->level === "Warga" ) {
                return redirect()->intended('/dashboard');
            } elseif (Auth::user()->level === "Admin") {
                return redirect()->intended('/admin');
            }  else (Auth::user()->level === "PIC");{
             return redirect()->intended('/pic');
            }
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
