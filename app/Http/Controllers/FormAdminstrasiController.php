<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\FormAdminstrasi;
use App\Models\Berita;
use App\Http\Requests;

class FormAdminstrasiController extends Controller
{
    public function index()
    {
        return view('dashboard.formAdminstrasi.index');
    }

    protected $limit = 5;
    
    public function list()
    {
        $forms = FormAdminstrasi::paginate($this->limit);
        return view('dashboard.formAdminstrasi.listform', compact('forms'));
    }
    
    public function berita()
   {
       $beritas = Berita::paginate($this->limit);
       return view('dashboard.berita.index', compact('beritas'));
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


