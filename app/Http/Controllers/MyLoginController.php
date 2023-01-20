<?php

namespace App\Http\Controllers;

use App\Models\SecUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
           $user = User::where('email',$request->email)->first();
           Auth::login($user);
        //    dd('betul');
           return redirect('/audit_trail');
        }
        // dd('salah');
        return redirect('login');
    }
}
