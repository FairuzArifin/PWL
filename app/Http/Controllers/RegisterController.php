<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){

        return view('register');
    } 

    public function store(request $request){

        $validatedData = $request->validate([
            'nik'=> 'required|min:16|max:255|unique:users',
            'name'=>'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'password'=> 'required|max:255',

        ]);

        $validateData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Anda Berhasil');

        return redirect ('/login');
    } 
    
}
  