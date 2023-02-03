<?php

namespace App\Http\Controllers;

use App\Mail\LupaKataLaluan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;


class UserController extends Controller
{
    // public function masuk(){
    //     return view('auth.login');
    // }
    public function masuk(){
        return view('audit_trail.laporan_audit_trail');
    }

    public function cipta_lupa(Request $request){
        $email = $request->email;
        $user = User::where('email',$email)->first();
        // dd($user);
        // if ($user == null || $email == null) {
        //     alert()->error('Email Tidak Sah', 'Gagal');
        //     return redirect('/login'); 
        // }
        $user->password = Hash::make('password');
        $user->save();
        Mail::to('maisarah.musa@pipeline-network.com')->send(new LupaKataLaluan);
        // Mail::to($user->email)->send(new LupaKataLaluan);
        alert()->success('TERIMA KASIH', 'Kata Laluan Baharu telah dihantar ke emel anda');
        return redirect('/login');
    }
}
