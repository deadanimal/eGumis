<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Models\Laporan;
use App\Models\LaporanGagalLogMasuk;

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


    public function carianLaporan(Request $request)
    {
        $laporan = Laporan::where('id','!=',null);
            
       
            //$laporan->whereDate('created_date', '=', $request->tempoh);
        

        // if ($request->jenis_pengguna != null) {
        //     $laporan->where('')
        // }

       
        $laporan->where('full_name', $request->nama);
        
            // dd('ok');
        return view('audit_trail.laporan_audit_trail',[
            'audit_trail'=> $laporan->get(),
            'nama'=>$request->nama,
            'tempoh'=>$request->tempoh, 
        ]);
    }
    
    public function carianLaporanGagalLogMasuk(Request $request) {
        $laporan = LaporanGagalLogMasuk::where('id','!=',null);
        // $laporan = LaporanGagalLogMasuk::where('status','!=',null);

        $laporan->where('username', $request->nama_pengguna);
        $laporan->where('status', $request->jenis_status);
        $laporan->where('identity_number', $request->identity_number);
        $laporan->whereDate('created_date', '=', $request->tempoh);

        
        // dd('ok');
        // dd($request->all());
        return view('pelaporan.laporan_gagal_log_masuk',[
            'pelaporan'=> $laporan->get(),
            'tempoh'=>$request->tempoh, 
        ]);
    }

    public function audit_trail(Request $request){
        // $id = (int)$request->route('id');
        // $audit_trail = New Laporan();

        // $audit_trail->created_by = $request->created_by;
        // $audit_trail->created_date = $request->created_date;
        // $audit_trail->menu_name_en = $request->menu_name_en;
        // $audit_trail->menu_name_ms = $request->menu_name_ms;
        // $audit_trail->menu_url = $request->menu_url;
        // $audit_trail->method_name = $request->method_name;
        // $audit_trail->description = $request->description;
        // $audit_trail->descriptionmy = $request->descriptionmy;
        // $audit_trail->modified_by = $request->modified_by;
        // $audit_trail->modified_date = $request->modified_date;
        // $audit_trail->date_logged_in = $request->date_logged_in;
        // $audit_trail->date_logged_out = $request->date_logged_out;
        // $audit_trail->http_method = $request->http_method;
        // $audit_trail->ip_address = $request->ip_address;
        // $audit_trail->requested_time = $request->requested_time;
        // $audit_trail->requested_url = $request->requested_url;
        // $audit_trail->session_id = $request->session_id;
        // $audit_trail->action = $request->action;
        // $audit_trail->action_by = $request->action_by;
        // $audit_trail->detail = $request->detail;
        // $audit_trail->entity_id = $request->entity_id;
        // $audit_trail->entity_name = $request->entity_name; 
        // $audit_trail->save();

        return redirect('/');
    }

    public function laporan_audit_trail(Request $request){
      //  $id = (int)$request->route('id');
      //  $audit_trail = Laporan::find($id);  
        // $audit_trail = new Laporan();  
        // dd($request->all());
        // dd('request');

        // $audit_trail->created_by = $request->created_by;
        // $audit_trail->created_date = $request->created_date;
        // $audit_trail->menu_name_en = $request->menu_name_en;
        // $audit_trail->menu_name_ms = $request->menu_name_ms;
        // $audit_trail->menu_url = $request->menu_url;

        // $audit_trail->method_name = $request->method_name;
        // $audit_trail->description = $request->description;
        // $audit_trail->descriptionmy = $request->descriptionmy;
        // $audit_trail->modified_by = $request->modified_by;
        // $audit_trail->modified_date = $request->modified_date;
        // $audit_trail->date_logged_in = $request->date_logged_in;
        // $audit_trail->date_logged_out = $request->date_logged_out;
        // $audit_trail->full_name = $request->full_name;
        // $audit_trail->http_method = $request->http_method;
        // $audit_trail->ip_address = $request->ip_address;
        // $audit_trail->requested_time = $request->requested_time;
        // $audit_trail->requested_url = $request->requested_url;
        // $audit_trail->session_id = $request->session_id;
        // $audit_trail->action = $request->action;
        // $audit_trail->action_by = $request->action_by;
        // $audit_trail->detail = $request->detail;
        // $audit_trail->entity_id = $request->entity_id;
        // $audit_trail->entity_name = $request->entity_name; 
        // $audit_trail->save();
        return view('audit_trail.laporan_audit_trail',
    ['audit_trail'=>Laporan::all()]
    );
        // return redirect('/audit_trail');
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
        // dd('ok');


    return view('pelaporan.laporan_gagal_log_masuk',
    ['pelaporan'=>LaporanGagalLogMasuk::all()]);
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
