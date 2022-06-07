<?php

namespace App\Http\Controllers;

use App\Models\FormWarga;
use Illuminate\Http\Request;

class FormWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.formwarga.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormWarga  $formWarga
     * @return \Illuminate\Http\Response
     */
    public function show(FormWarga $formWarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormWarga  $formWarga
     * @return \Illuminate\Http\Response
     */
    public function edit(FormWarga $formWarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormWarga  $formWarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormWarga $formWarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormWarga  $formWarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormWarga $formWarga)
    {
        //
    }
}
