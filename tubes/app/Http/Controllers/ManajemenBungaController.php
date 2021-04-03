<?php

namespace App\Http\Controllers;

use App\ManajemenBunga;
use Illuminate\Http\Request;

class ManajemenBungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('manajemen-bunga');
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
     * @param  \App\ManajemenBunga  $manajemenBunga
     * @return \Illuminate\Http\Response
     */
    public function show(ManajemenBunga $manajemenBunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManajemenBunga  $manajemenBunga
     * @return \Illuminate\Http\Response
     */
    public function edit(ManajemenBunga $manajemenBunga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManajemenBunga  $manajemenBunga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManajemenBunga $manajemenBunga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManajemenBunga  $manajemenBunga
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManajemenBunga $manajemenBunga)
    {
        //
    }
}
