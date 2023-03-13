<?php

namespace App\Http\Controllers;

use App\Mail\LupaKataLaluan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\SecUser;



class UserController extends Controller
{
    // public function masuk(){
    //     return view('auth.login');
    // }
    public function masuk(){
        return view('audit_trail.laporan_audit_trail');
    }

    public function tunjuk_lupa(Request $request){
        
        // dd('123');
        // return redirect('/lupa-katalaluan');
        return view('auth.lupa');
    }



    // // $email = $request->email;
    // $user = User::where('email',$email)->first();
    // // dd($user);
    // // if ($user == null || $email == null) {
    // //     alert()->error('Email Tidak Sah', 'Gagal');
    // //     return redirect('/login'); 
    // // }
    // // if ($user =! null){
    //     $user->password = Hash::make('password');
    // // }
    // // dd($user);

    // $user->save();
    // Mail::to('maisarah.musa@pipeline-network.com')->send(new LupaKataLaluan);
    // // Mail::to($user->email)->send(new LupaKataLaluan);
    // alert()->success('TERIMA KASIH', 'Kata Laluan Baharu telah dihantar ke emel anda');
    // // return redirect('/lupa-katalaluan');
    // return view('/lupa-katalaluan');

    public function cipta_lupa(Request $request){
        
        $email = $request->email;
        $password = $request->password;
        // $user = SecUser::where('email',$email)->first();
        // $user = SecUser::where('password',$password)->first();
        // dd($user->email);
        // dd($user);

        $user = SecUser::where([
            ['email', '=', $request->email],
            ['password', '=', $request->password]
        ])->first();
        if ($user != null || $email != null) {
            alert()->error('Email Tidak Sah', 'Gagal');
            return redirect('/login'); 
        }
        if ($user != null || $password != null) {
            $user->password = Hash::make('eGUMIS');
            $user->save();
        }
        // $user->save();

        Mail::to('maisarah.musa@pipeline-network.com')->send(new LupaKataLaluan);
        // Mail::to($user->email)->send(new LupaKataLaluan);
        alert()->success('Kata laluan baharu telah dihantar ke emel anda');
        return redirect('/login');
        // return view('auth.lupa-katalaluan');
    }

    // public function Portal(Request $request, $id)
    // {
    //    $username = User::find($id);

    //    return view('/audit_trail',
    //     compact('username'));
    // }
}
