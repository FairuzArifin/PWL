<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Http\Requests;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;
    
     public function index()
    {
        $beritas = Berita::paginate($this->limit);
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Berita $berita)
    {
        return view('admin.berita.create', compact('berita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BeritaRequest $request)
    {
        $request->user()->posts()->create($request->all());
        return redirect(route('beritaindex'))->with('message', 'Berita Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function handleRequest($request)
    {
        $data = $request->all();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrfail($id);
        return view('admin.berita.create', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\BeritaRequest $request, $id)
    {
        $berita = Berita::findOrfail($id);
        $data = $this->handleRequest($request);
        $berita -> update($data);
        return redirect(route('beritaindex'))->with('message', 'Berita Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::findOrfail($id)->delete();
        return redirect(route('beritaindex'))->with('message', 'Berita Berhasil Dihapus');
    }
}
