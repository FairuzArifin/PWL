<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\FormAdminstrasi;

class FormAdminstrasiController extends Controller
{
    public function index()
    {
        return view('dashboard.formAdminstrasi.index');
    }


    public function store(Request $request)
    {
       $validateData = $request->validate([
           'jenis' => 'required',
           'name' => 'required',
           'alamat' => 'required',
           'no_hp' => 'required',
           'judul' => 'required',
           'deskripsi' => 'required',
           'PIC' => '',
           'jawaban' => '', 
       ]);

       dd('berhasil');
    }
}


