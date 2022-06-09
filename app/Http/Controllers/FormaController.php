<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormAdminstrasi;
use App\Http\Requests;

class FormaController extends Controller
{
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
        return view('dashboard.formAdminstrasi.lihat', compact('form'));
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
        return redirect(route('formindex'))->with('message', 'Data Berhasil Diperbaharui');
    }
}
