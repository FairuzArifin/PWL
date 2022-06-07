<?php

namespace App\Http\Controllers;

use App\Models\DashboardForm;
use Illuminate\Http\Request;

class DashboardFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.forms.index');
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
     * @param  \App\Models\DashboardForm  $dashboardForm
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardForm $dashboardForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardForm  $dashboardForm
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardForm $dashboardForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardForm  $dashboardForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardForm $dashboardForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardForm  $dashboardForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardForm $dashboardForm)
    {
        //
    }
}
