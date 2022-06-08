<?php

namespace App\Http\Controllers\PIC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormAdminstrasi;
use App\Http\Requests;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $limit = 5;

    public function index()
    {
        $forms = FormAdminstrasi::paginate($this->limit);
        return view('pic.form.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Form $form)
    {
        $pic = Pic::pluck('name', 'id');
        return view('pic.form.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FormsRequest $request)
    {
        $request->user()->forms()->create($request->all());
        return redirect('/pic/form')->with('message', 'Data Berhasil Disimpan');
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
        $form = FormAdminstrasi::findOrfail($id);
        return view('pic.form.create', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\FormsRequest $request, $id)
    {
        $form = FormAdminstrasi::findOrfail($id);
        $data = $this->handleRequest($request);
        $form -> update($data);
        return redirect(route('formsindex'))->with('message', 'Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormAdminstrasi::findOrfail($id)->delete();
        return redirect(route('formisndex'))->with('message', 'Data Berhasil Dihapus');
    }
}
