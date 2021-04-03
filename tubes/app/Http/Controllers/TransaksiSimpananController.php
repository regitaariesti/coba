<?php

namespace App\Http\Controllers;

use App\TransaksiSimpanan;
use Illuminate\Http\Request;

class TransaksiSimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('transaksi-simpanan');
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
     * @param  \App\TransaksiSimpanan  $transaksiSimpanan
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiSimpanan $transaksiSimpanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TransaksiSimpanan  $transaksiSimpanan
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiSimpanan $transaksiSimpanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TransaksiSimpanan  $transaksiSimpanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiSimpanan $transaksiSimpanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TransaksiSimpanan  $transaksiSimpanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiSimpanan $transaksiSimpanan)
    {
        //
    }
}
