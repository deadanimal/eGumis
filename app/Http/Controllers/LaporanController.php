<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Models\Laporan;
use App\Models\LaporanGagalLogMasuk;
use App\Models\DaftarPengguna;
use App\Models\LaporanSemakanWTD;
use App\Models\PengurusanPengguna;
use App\Models\AppRfdInfo;
use App\Models\AuditTrail;
use App\Models\SecAuditLog;
use App\Models\SecUser;
use App\Models\LaporanPermohonanTuntutanAplikasi;
use App\Models\LaporanTempohPenggunaanAplikasi;
use App\Models\LaporanPermohonanWTDNegeri;

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

    /**x
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
        // $id = (int)$request->route('id'); 
        // $pengguna = DaftarPengguna::find($id);
        // // if ($pengguna != null) {
        // $pengguna->full_name = $request->full_name;
        // $pengguna->username = $request->username;
        // $pengguna->identity_type = $request->identity_type;
        // $pengguna->identity_number = $request->identity_number;
        // $pengguna->email = $request->email;
        // $pengguna->save();
        // // // }

        // // // dd($pengguna);
        
        // alert()->success('Maklumat berjaya dikemaskini');
        // // // return redirect('/pengurusan-pengguna/senarai-pengguna');
        // return back();
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
        $laporan = AuditTrail::where('id','!=',null);
       
            //$laporan->whereDate('created_date', '=', $request->tempoh);
        

        // if ($request->jenis_pengguna != null) {
        //     $laporan->where('')
        // }
        if ($request->nama) {
            $laporan->where('username','LIKE','%'.$request->nama.'%');
        }
        if ($request->alamat_ip) {
            $laporan->where('ip_address','LIKE','%'.$request->alamat_ip.'%');
        }
        if ($request->tempoh) {
            $laporan->whereDate('requested_time', 'LIKE', '%'.$request->tempoh.'%');
        }


        // $jenisPengguna = Laporan::limit(20);
        // $jenis_pengguna = $request->('jenis_pengguna');
        // if ($jenis_pengguna) {
        //     $jenisPengguna->where('name', 'LIKE', '%' . $jenis_pengguna . '%');
        // }
        // $jenis_pengguna = $jenisPengguna>get();
            // dd('ok');
        return view('audit_trail.laporan_audit_trail',[
            'audit_trail'=> $laporan->get(),
            'username'=>$request->nama,
            'alamat_ip'=>$request->alamat_ip, 
            'tempoh'=>$request->tempoh,
        ]);
    }

    public function carianLaporanLogAudit(Request $request) {
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

    public function carianLaporanLogAkses(Request $request) {
       
        $laporan = SecAuditLog::where('id','!=',null);
       
        //$laporan->whereDate('created_date', '=', $request->tempoh);
    

        // if ($request->jenis_pengguna != null) {
        //     $laporan->where('')
        // }
        if ($request->nama) {
            $laporan->where('username','LIKE','%'.$request->nama.'%');
        }
        if ($request->alamat_ip) {
            $laporan->where('ip_address','LIKE','%'.$request->alamat_ip.'%');
        }
        if ($request->log_masuk) {
            $laporan->whereDate('date_logged_in', 'LIKE', '%'.$request->log_masuk.'%');
        }
        if ($request->log_keluar) {
            $laporan->whereDate('date_logged_out', 'LIKE', '%'.$request->log_keluar.'%');
        }

        return view('audit_trail.log_akses', [
            'log_akses'=> $laporan->get(),
            'username'=>$request->nama,
            'alamat_ip'=>$request->alamat_ip, 
            'log_masuk'=>$request->log_masuk,
            'log_keluar'=>$request->log_keluar,
        ]);
    }

    public function carianLaporanGagalLogMasuk(Request $request) {
        $laporan = LaporanGagalLogMasuk::where('id','!=',null);
        // $laporan = LaporanGagalLogMasuk::where('status','!=',null);

        if($request->nama){
            $laporan->where('username', 'LIKE','%'.$request->nama.'%');
        }
        if($request->nama_pengguna){
            $laporan->where('username', 'LIKE','%'.$request->nama_pengguna.'%');
        }
        if($request->status){
            $laporan->where('status', 'LIKE','%'.$request->jenis_status.'%');
        }
        if($request->no_ic){
            $laporan->where('identity_number','LIKE','%'.$request->no_ic.'%');
        }
        if($request->tempoh){
            $laporan->whereDate('created_date','LIKE','%'.$request->tempoh.'%');
        }
        if($request->emel){
            $laporan->where('email','LIKE','%'.$request->emel.'%');
        }
        

        
        // dd('ok');
        // dd($request->all());
        return view('pelaporan.laporan_gagal_log_masuk',[
            'pelaporan'=> $laporan->get(),
            'nama'=>$request->nama, 
            'nama_pengguna'=>$request->nama_pengguna, 
            'status'=>$request->status,
            'identity_number'=>$request->no_ic,
            'tempoh'=>$request->tempoh,
            'emel'=>$request->emel,
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

    public function carianLaporanSemakanWTD(Request $request)
    {

        $semakan_wtd = LaporanSemakanWTD::where('id','!=',null);

        if ($request->nama) {
            $semakan_wtd->where('full_name', 'LIKE', '%'.$request->nama.'%');
        }
        if($request->no_rujukan){
            $semakan_wtd->where('file_refno', 'LIKE', '%'.$request->no_rujukan.'%');
        }
        if($request->no_ic){
            $semakan_wtd->where('new_ic_number', 'LIKE', '%'.$request->no_ic.'%');
            $semakan_wtd->where('old_ic_number', 'LIKE', '%'.$request->no_ic.'%');
        }
        // if ($request->tempoh) {
        //     $semakan_wtd->whereDate('requested_time', 'LIKE', '%'.$request->tempoh.'%');
        // }
        if($request->jenis_status){
            $semakan_wtd->where('status', 'LIKE', '%'.$request->jenis_status.'%');
        }

        return view('pelaporan.laporan_semakan_wtd',[
            'semakan_wtd'=>$semakan_wtd->get(),
            'nama'=>$request->nama,
            'no_rujukan'=>$request->no_rujukan,
            'no_ic'=>$request->no_ic,
            'jenis_status'=>$request->jenis_status,
        ]);
    }

    public function carianLaporanPermohonanTuntutanAplikasi(Request $request)
    {
        $permohonan_tuntutan_aplikasi = LaporanPermohonanTuntutanAplikasi::where('id','!=',null);
        if ($request->no_rujukan) {
            $permohonan_tuntutan_aplikasi->where('file_refno', 'LIKE', '%'.$request->nama.'%');
        }
        if($request->nama_penuh){
            $permohonan_tuntutan_aplikasi->where('fullname', 'LIKE', '%'.$request->nama_penuh.'%');
        }
        if($request->no_ic){
            $permohonan_tuntutan_aplikasi->where('new_ic_number', 'LIKE', '%'.$request->no_ic.'%');
            $permohonan_tuntutan_aplikasi->where('old_ic_number', 'LIKE', '%'.$request->no_ic.'%');
        }
        if($request->amaun_tuntutan){
            $permohonan_tuntutan_aplikasi->where('unclaimed_amount', 'LIKE', '%'.$request->amaun_tuntutan.'%');
        }
        if($request->tarikh_tuntutan){
            $permohonan_tuntutan_aplikasi->where('status_date', 'LIKE', '%'.$request->tarikh_tuntutan.'%');
        }
        if($request->jenis_status){
            $permohonan_tuntutan_aplikasi->where('status', 'LIKE', '%'.$request->jenis_status.'%');
        }
        if($request->tindakan){
            $permohonan_tuntutan_aplikasi->where('tindakan', 'LIKE', '%'.$request->tindakan.'%');
        }
        
        return view('pelaporan.laporan_permohonan_tuntutan_aplikasi',[
            'permohonan_tuntutan_aplikasi'=>$permohonan_tuntutan_aplikasi->get(),
            'nama_penuh'=>$request->nama_penuh,
            'no_ic'=>$request->no_ic,
            'amaun_tuntutan'=>$request->amaun_tuntutan,
            'tarikh_tuntutan'=>$request->tarikh_tuntutan,
            'jenis_status'=>$request->jenis_status,
            'tindakan'=>$request->tindakan,
        ]);
    }

    public function carianLaporanPermohonanWTD(Request $request)
    {
        $laporan_permohonan_wtd_negeri = LaporanPermohonanWTDNegeri::where('id', '!=', null);

        if($request->nama_penuh){
            $laporan_permohonan_wtd_negeri->where('fullname', 'LIKE', '%'.$request->nama_penuh.'%');
        }
        if ($request->tempoh) {
            $laporan_permohonan_wtd_negeri->whereDate('tempoh', 'LIKE', '%'.$request->tempoh.'%');
        }
        if($request->no_ic){
            $laporan_permohonan_wtd_negeri->where('new_ic_number', 'LIKE', '%'.$request->no_ic.'%');
            $laporan_permohonan_wtd_negeri->where('old_ic_number', 'LIKE', '%'.$request->no_ic.'%');
        }
        if ($request->no_rujukan) {
            $laporan_permohonan_wtd_negeri->where('file_refno', 'LIKE', '%'.$request->nama.'%');
        }
        if ($request->negeri) {
            $laporan_permohonan_wtd_negeri->where('state', 'LIKE', '%'.$request->negeri.'%');
        }

        return view('pelaporan.laporan_permohonan_wtd',[
            'laporan_permohonan_wtd_negeri'=>$laporan_permohonan_wtd_negeri->get(),
            'tempoh'=>$request->tempoh,
            'no_ic'=>$request->no_ic,
            'no_rujukan'=>$request->no_rujukan,
            'negeri'=>$request->negeri
        ]);
    }

    public function carianLaporanTempohPenggunaanAplikasi(Request $request)
    {
        $laporan_tempoh_penggunaan_aplikasi = LaporanTempohPenggunaanAplikasi::where('id','!=',null);

        if ($request->tempoh) {
            $laporan_tempoh_penggunaan_aplikasi->whereDate('tempoh', 'LIKE', '%'.$request->tempoh.'%');
        }
        if($request->jenis_capaian){
            $laporan_tempoh_penggunaan_aplikasi->where('jenis_capaian', 'LIKE', '%'.$request->jenis_capaian.'%');
        }
        if($request->jenis_os){
            $laporan_tempoh_penggunaan_aplikasi->where('jenis_os', 'LIKE', '%'.$request->jenis_os.'%');
        }
        if($request->jenis_status){
            $laporan_tempoh_penggunaan_aplikasi->where('status', 'LIKE', '%'.$request->jenis_status.'%');
        }

        return view('pelaporan.laporan_tempoh_penggunaan_aplikasi',[
            'laporan_tempoh_penggunaan_aplikasi'=>$laporan_tempoh_penggunaan_aplikasi->get(),
            'tempoh'=>$request->tempoh,
            'jenis_capaian'=>$request->jenis_capaian,
            'jenis_os'=>$request->jenis_os,
            'jenis_status'=>$request->jenis_status      
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
       $id = (int)$request->route('id');
       $audit_trail = SecUser::find($id);
       $sec_user = AuditTrail::find($id);  
  
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
        // $audit_trail->jenis_pengguna = $request->jenis_pengguna;

        // dd($audit_trail);
        // return view('audit_trail.laporan_audit_trail',
        //     ['audit_trail'=>AuditTrail::all()]
        // );
        return view('audit_trail.laporan_audit_trail',
            ['audit_trail'=>AuditTrail::get(),
            
            ]
        );
        // return view('audit_trail.laporan_audit_trail', 
        // compact('audit_trail','sec_user'));

        // return redirect('/audit_trail');
    }

    

    public function log_audit(){
        return view('audit_trail.log_audit');
    }

    public function log_akses(){


        return view('audit_trail.log_akses', [
            'log_akses'=>SecAuditLog::all()
        ]);
    }

    public function pelaporan(){

        
        return view('pelaporan.laporan_semakan_wtd',[
            'semakan_wtd'=>LaporanSemakanWTD::all()
        ]);
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
        return view('pelaporan.laporan_permohonan_tuntutan_aplikasi',[
            'gagal_log_masuk'=>LaporanSemakanWTD::all()
        ]);
    }

    public function laporan_permohonan_wtd(){
        $negeri = LaporanSemakanWTD::where('id','!=',null);
        // $negeri1 = AppRfdInfo::where('id','!=',null);


        return view('pelaporan.laporan_permohonan_wtd',[
            'negeri'=>LaporanSemakanWTD::all(),
            // 'negeri1'=>AppRfdInfo::all()
        ]);
    }

    public function laporan_tempoh_penggunaan_aplikasi(){
        return view('pelaporan.laporan_tempoh_penggunaan_aplikasi');
    }

    public function daftar_pengguna(){

        // $daftar = new DaftarPengguna();  

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

        if($request->identity_type == "NOMBOR KP BARU"){
            $daftar->new_ic_number = $request->new_ic_number;       
        }
        if($request->identity_type == "NOMBOR KP LAMA"){
            $daftar->old_ic_number = $request->old_ic_number;       
        }
        if($request->identity_type == "NOMBOR TENTERA"){
            $daftar->no_tentera = $request->no_tentera;       
        }
        if($request->identity_type == "NOMBOR POLIS"){
            $daftar->no_polis = $request->no_polis;       
        }
        if($request->identity_type == "NOMBOR PASPORT"){
            $daftar->no_passport = $request->no_passport;       
        }
        if($request->identity_type == "NOMBOR SIJIL KELAHIRAN"){
            $daftar->no_sijil_kelahiran = $request->no_sijil_kelahiran;       
        }
        if($request->identity_type == "NOMBOR PENDAFTARAN SYARIKAT/FIRMA"){
            $daftar->no_pendaftaran_syarikat_firma = $request->no_pendaftaran_syarikat_firma;       
        }
        // $daftar->identity_type = $request->identity_type;
        $daftar->identity_number = $request->identity_number;
        $daftar->email = $request->email;
        $daftar->jenis_pengguna = $request->jenis_pengguna;
        $daftar->save();

        // return view('pengurusan-pengguna.daftar-pengguna',
        //     ['daftar'=>Laporan::all()]
        // );
        return redirect('/pengurusan-pengguna/daftar-pengguna');
    }

    public function senarai_pengguna_kemaskini(Request $request, $id)
    {
        //$id = (int)$request->route('id'); 
        // dd($request->all());
       
        $pengguna = DaftarPengguna::find($id);
        $pengguna1 = PengurusanPengguna::find($id);
        // dd($id);

        // $pengguna = DaftarPengguna::all();
        // if ($request->nama != null) {
            // $pengguna->username = $request->username;
            // $pengguna->save();
        // }
        // $pengguna->email = $request->email;
        // $pengguna->save();
        // }

        // dd($pengguna);

        // dd('test');

       return view('pengurusan-pengguna.senarai-pengguna-edit', 
       compact('pengguna', 'pengguna1'));
    }

    public function senarai_pengguna_simpan_kemaskini(Request $request)
    {
        $id = (int)$request->route('id'); 
        $s_pengguna = DaftarPengguna::find($id);
        $s_pengguna1 = PengurusanPengguna::find($id);

        // // if ($pengguna != null) {
        $s_pengguna->full_name = $request->full_name;
        $s_pengguna->username = $request->username;
        $s_pengguna->identity_type = $request->identity_type;
        $s_pengguna->identity_number = $request->identity_number;
        $s_pengguna->email = $request->email;
        $s_pengguna1->entity_name = $request->entity_name;
        
        $s_pengguna1->save();
        $s_pengguna->save();
        // // // }



        // // // dd($pengguna);
        
        alert()->success('Maklumat Dikemaskini, Berjaya');
        // // return redirect('/pengurusan-pengguna/senarai-pengguna');
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
}
