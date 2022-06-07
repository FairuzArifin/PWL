<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){

        return view('register.register',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    } 

    public function store(request $request){

        $validatedData = $request->validate([
            'nik'=> 'required|min:16|max:255|unique:users',
            'name'=>'required|max:255',
            'email'=>'required',
            'password'=> 'required|max:255',

        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Anda Berhasil');

        return redirect ('/login');
    } 
    
}
  