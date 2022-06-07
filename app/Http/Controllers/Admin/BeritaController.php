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
        $posts = Berita::paginate($this->limit);
        return view('admin.berita.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Berita $post)
    {
        return view('admin.berita.create', compact('post'));
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
        return redirect('/admin/berita')->with('message', 'Data Berhasil Disimpan');
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
        $post = Berita::findOrfail($id);
        return view('admin.berita.create', compact('post'));
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
        $post = Berita::findOrfail($id);
        $data = $this->handleRequest($request);
        $post -> update($data);
        return redirect(route('beritaindex'))->with('message', 'Data Berhasil Diperbaharui');
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
        return redirect(route('beritaindex'))->with('message', 'Data Berhasil Dihapus');
    }
}
