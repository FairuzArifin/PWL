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
       $validatedData = $request->validate([
           'jenis' => 'required',
           'name' => 'required',
           'alamat' => 'required',
           'no_hp' => 'required',
           'judul' => 'required',
           'deskripsi' => 'required',
           'status'=> 'Diproses',
           'PIC' => '',
           'jawaban' => '', 
       ]);

       $validatedData['user_id'] = auth()->user()->id;

       FormAdminstrasi::create($validatedData);

       return redirect('dashboard/');
    }
}


