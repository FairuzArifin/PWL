<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function pic()
    {
        return view('pic.home');
    }

}
