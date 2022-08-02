<?php

namespace App\Http\Controllers;

use App\Models\Laporan_pendaftaran;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class LaporanPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan_pendaftaran = Laporan_pendaftaran::withCount(['pendaftaran'])->get();
        return view('admin.laporan_pendaftaran.index', compact('laporan_pendaftaran'));
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
     * @param  \App\Models\Laporan_pendaftaran  $laporan_pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan_pendaftaran $laporan_pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan_pendaftaran  $laporan_pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan_pendaftaran $laporan_pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan_pendaftaran  $laporan_pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan_pendaftaran $laporan_pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan_pendaftaran  $laporan_pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan_pendaftaran $laporan_pendaftaran)
    {
        //
    }
}
