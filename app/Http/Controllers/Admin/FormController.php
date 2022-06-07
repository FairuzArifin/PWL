<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Requests;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $limit = 5;

    public function index()
    {
        $forms = Form::paginate($this->limit);
        return view('admin.form.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Form $form)
    {
        $pic = Pic::pluck('name', 'id');
        return view('admin.form.create', compact('form'));
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
        return redirect('/admin/form')->with('message', 'Data Berhasil Disimpan');
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
        $form = Form::findOrfail($id);
        return view('admin.form.create', compact('form'));
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
        $form = Form::findOrfail($id);
        $data = $this->handleRequest($request);
        $form -> update($data);
        return redirect(route('formindex'))->with('message', 'Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Form::findOrfail($id)->delete();
        return redirect(route('formindex'))->with('message', 'Data Berhasil Dihapus');
    }
}
