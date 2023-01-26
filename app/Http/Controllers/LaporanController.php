<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Models\Laporan;
use App\Models\LaporanGagalLogMasuk;
use App\Models\DaftarPengguna;

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
        if ($request->nama) {
            $laporan->where('full_name','LIKE','%'.$request->nama.'%');
        }
        if ($request->alamat_ip) {
            $laporan->where('ip_address','LIKE','%'.$request->alamat_ip.'%');
        }
        
            // dd('ok');
        return view('audit_trail.laporan_audit_trail',[
            'audit_trail'=> $laporan->get(),
            'full_name'=>$request->nama,
            'tempoh'=>$request->tempoh,
            'alamat_ip'=>$request->alamat_ip, 
        ]);
    }

    public function carianLogAudit(Request $request) {
        $laporan = LaporanGagalLogMasuk::where('id','!=',null);
        // $laporan = LaporanGagalLogMasuk::where('status','!=',null);

        $laporan->where('username', $request->nama_pengguna);
        // $laporan->where('status', $request->jenis_status);
        $laporan->where('identity_number', $request->identity_number);
        $laporan->whereDate('created_date', '=', $request->tempoh);

        
        // dd('ok');
        // dd($request->all());
        return view('audit_trail.log_audit',[
            'pelaporan'=> $laporan->get(),
            'tempoh'=>$request->tempoh, 
        ]);
    }

    public function carianLogAkses(Request $request) {
       
        return view('audit_trail.log_akses');
    }

    public function carianLaporanGagalLogMasuk(Request $request) {
        $laporan = LaporanGagalLogMasuk::where('id','!=',null);
        // $laporan = LaporanGagalLogMasuk::where('status','!=',null);

        $laporan->where('username', $request->nama_pengguna);
        // $laporan->where('status', $request->jenis_status);
        $laporan->where('identity_number', $request->identity_number);
        $laporan->whereDate('created_date', '=', $request->tempoh);

        
        // dd('ok');
        // dd($request->all());
        return view('pelaporan.laporan_gagal_log_masuk',[
            'pelaporan'=> $laporan->get(),
            'tempoh'=>$request->tempoh, 
        ]);
    }

    public function carianSenaraiPengguna(Request $request)
    {
        $senarai_pengguna = DaftarPengguna::where('id','!=',null);

        // 1st method
        // $senarai_pengguna->where('full_name', $request->nama_penuh);
        // $senarai_pengguna->where('username', $request->nama_pengguna);
        // $senarai_pengguna->where('identity_number', $request->identity_number);
        // $senarai_pengguna->where('email', $request->email);

        if ($request->nama) {
            $senarai_pengguna->where('full_name', 'LIKE', '%'.$request->nama.'%');
        }
        if ($request->nama_pengguna) {
            $senarai_pengguna->where('username', 'LIKE', '%'.$request->nama_pengguna.'%');
        }
        if ($request->no_kad_pengenalan) {
            $senarai_pengguna->where('identity_number', 'LIKE', '%'.$request->no_kad_pengenalan.'%');
        }
        if ($request->emel) {
            $senarai_pengguna->where('email', 'LIKE', '%'.$request->emel.'%');
        }



        return view('/pengurusan-pengguna.senarai-pengguna',[
            'senarai_pengguna'=>$senarai_pengguna->get(),
            'nama_penuh'=>$request->nama_penuh,
            'nama_pengguna'=>$request->nama_pengguna,
            'no_kad_pengenalan'=>$request->no_kad_pengenalan,
            'emel'=>$request->emel,
        ]);
    }

    public function carianLaporanSemakanWTD()
    {
        return view('pelaporan.laporan_semakan_wtd');
    }

    public function carianLaporanPermohonanTuntutanAplikasi()
    {
        return view('pelaporan.laporan_permohonan_tuntutan_aplikasi');
    }

    public function carianLaporanPermohonanWTD()
    {
        return view('pelaporan.laporan_permohonan_wtd');
    }

    public function carianLaporanTempohPenggunaanAplikasi()
    {
        return view('pelaporan.laporan_tempoh_penggunaan_aplikasi');
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

    public function daftar_pengguna(){
        return view('pengurusan-pengguna.daftar-pengguna');
    }
    
    public function senarai_pengguna(){

        // $id = (int)$request->route('id'); 
        // $senarai_pengguna = DaftarPengguna::find($id);
        return view('pengurusan-pengguna.senarai-pengguna',
        ['senarai_pengguna'=>DaftarPengguna::all()]
        );
    }

    public function daftarPengguna(Request $request)
    {
        $daftar = new DaftarPengguna();  
        $daftar->full_name = $request->full_name;
        $daftar->username = $request->username;
        $daftar->identity_type = $request->identity_type;
        $daftar->identity_number = $request->identity_number;
        $daftar->email = $request->email;
        $daftar->save();


        // return view('pengurusan-pengguna.daftar-pengguna',
        //     ['daftar'=>Laporan::all()]
        // );
        return redirect('/pengurusan-pengguna/daftar-pengguna');
    }

    public function senarai_pengguna_kemaskini(Request $request)
    {
        $id = (int)$request->route('id'); 
        // dd($request->all());
       
        $pengguna = DaftarPengguna::find($id);
        if ($pengguna != null) {
        $pengguna->username = $request->username;
        $pengguna->save();
        }

        // dd('test');

       return view('pengurusan-pengguna.senarai-pengguna-edit', 
       compact('pengguna'));
    }

    public function senarai_pengguna_simpan_kemaskini(Request $request)
    {
        $id = (int)$request->route('id'); 
        $pengguna = DaftarPengguna::find($id);
        $pengguna->full_name = strtoupper($request->full_name);
        $pengguna->username = $request->username;
        $pengguna->identity_type = $request->identity_type;
        $pengguna->identity_number = $request->identity_number;
        $pengguna->email = $request->email;
        $pengguna->save();
        
        // return redirect('/pengurusan-pengguna/senarai-pengguna');
        return back();
    }

    public function hapus_senarai_pengguna(Request $request)
    {
        $id = (int)$request->route('id'); 

        // dd($request->all());
        $pengguna = DaftarPengguna::find($id); 
        if ($pengguna != null) {
            $pengguna->delete();
        }
        alert()->success('Maklumat Pengguna Dihapuskan', 'Berjaya');
        return back();
    }

    // public function log_masuk(){


    //     alert()->success('TERIMA KASIH', 'Kata laluan baharu telah dihantar ke emel anda');

    //     return back();
    // }
}
