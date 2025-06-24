<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('penggajian.index');
        
    }


    public function periode()
    {
        return view('penggajian.periode'); // Sesuaikan dengan nama view Anda
    }

    public function komponen()
    {
        return view('penggajian.komponen');
    }

    public function strukturGaji()
    {
        return view('penggajian.strukturGaji');
    }

    // Tambahkan semua method lain yang didefinisikan di route
    public function riwayatSlip()
    {
        return view('penggajian.riwayatSlip');
    }

    public function insentif()
    {
        return view('penggajian.insentif');
    }

    public function tarifUmum()
    {
        return view('penggajian.tarifUmum');
    }

    public function riwayatPajak()
    {
        return view('penggajian.riwayatPajak');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
