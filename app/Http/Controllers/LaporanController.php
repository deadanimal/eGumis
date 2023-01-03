<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Models\Laporan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('audit_trail.laporan_audit_trail');
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
     * @param  \App\Http\Requests\StoreLaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanRequest  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }

    public function audit_trail(){
        return view('audit_trail.laporan_audit_trail');
    }

    public function laporan_audit_trail(){
        return view('audit_trail.laporan_audit_trail');
    }

    public function log_audit(){
        return view('audit_trail.log_audit');
    }

    public function log_akses(){
        return view('audit_trail.log_akses');
    }

    public function pelaporan(){
        return view('pelaporan.laporan_semakan_wtd');
    }

    // public function laporan_semakan_wtd(){
    //     return view('pelaporan.laporan_semakan_wtd');
    // }

    public function laporan_gagal_log_masuk(){
        return view('pelaporan.laporan_gagal_log_masuk');
    }

    public function laporan_permohonan_tuntutan_aplikasi(){
        return view('pelaporan.laporan_permohonan_tuntutan_aplikasi');
    }

    public function laporan_permohonan_wtd(){
        return view('pelaporan.laporan_permohonan_wtd');
    }

    public function laporan_tempoh_penggunaan_aplikasi(){
        return view('pelaporan.laporan_tempoh_penggunaan_aplikasi');
    }

    public function peranan(){
        return view('peranan');
    }

    // public function log_masuk(){


    //     alert()->success('TERIMA KASIH', 'Kata laluan baharu telah dihantar ke emel anda');

    //     return back();
    // }
}
