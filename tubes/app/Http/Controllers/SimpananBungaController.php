<?php

namespace App\Http\Controllers;

use App\SimpananBunga;
use Illuminate\Http\Request;

class SimpananBungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('simpanan-bunga');
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
     * @param  \App\SimpananBunga  $simpananBunga
     * @return \Illuminate\Http\Response
     */
    public function show(SimpananBunga $simpananBunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SimpananBunga  $simpananBunga
     * @return \Illuminate\Http\Response
     */
    public function edit(SimpananBunga $simpananBunga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SimpananBunga  $simpananBunga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimpananBunga $simpananBunga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SimpananBunga  $simpananBunga
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimpananBunga $simpananBunga)
    {
        //
    }
}
