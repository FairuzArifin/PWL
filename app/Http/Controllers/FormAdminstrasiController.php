<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAdminstrasiController extends Controller
{
    public function index()
    {
        return view('dashboard.formAdminstrasi.index');
    }


    public function store()
    {
        return request()->all();
    }
}


